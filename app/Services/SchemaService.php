<?php

namespace App\Services;

use App\Models\Row;
use App\Models\Col;
use App\Models\Schema;
use App\Models\Spectacle;
use App\Models\Ticket;

class SchemaService
{

    /**
     * @var Schema
     */
    private Schema $schema;

    /**
     * @var array
     */
    private array $data;

    /**
     * @var array
     */
    private array $cartColIds = [];

    /**
     * @var array
     */
    private array $reservedColIds = [];

    /**
     * @var Spectacle
     */
    private Spectacle $spectacle;

    /**
     * @param Schema    $schema
     * @param Spectacle $spectacle
     *
     * @return array
     */
    public function generateRowsData(Schema $schema, Spectacle $spectacle) : array
    {
        $this->schema = $schema;
        $this->spectacle = $spectacle;

        $this->fillBusyIds();
        $this->fillCartIds();
        $this->fillBalcony();
        $this->fillRows();

        return $this->data;
    }

    private function fillBusyIds() : void
    {
        $this->reservedColIds = $this->spectacle->tickets->pluck('col_id')->toArray();
    }

    private function fillCartIds() : void
    {
        foreach (\Cart::getContent()->toArray() as $key => $value) {
            if ($value['attributes']['spectacle_id'] == $this->spectacle->id && ! in_array($key, $this->cartColIds)) {
                $this->cartColIds[] = $key;
            }
        }
    }

    private function fillBalcony() : void
    {
        // rows
        $this->schema->rows()->orderByDesc('id')->get()->filter(function (Row $row) {
            return $row->on_balcony && ! $row->on_loggia;
        })->each(function (Row $row) {
            collect($row->cols)->each(function (Col $col) use ($row) {
                $colData = $this->setClass($col->toArray());
                $colData['row'] = $row->row;
                $this->data['balcony']['items'][$row->id]['color'] = $row->color->name;
                if ($col->on_left) {
                    $this->data['balcony']['items'][$row->id]['on_left'][] = $colData;
                } else {
                    $this->data['balcony']['items'][$row->id]['on_right'][] = $colData;
                }
            });
        });

        // loggia
        $this->schema->rows->filter(function (Row $row) {
            return $row->on_loggia && $row->on_balcony;
        })->each(function (Row $row) {
            $this->data['balcony']['loggia']['color'] = $row->color->name;
            $this->data['balcony']['loggia']['data'] = $row->cols->map(function (Col $col) use ($row) {
                $colData = $col->toArray();
                $colData['row'] = $row->row;
                return $this->setClass($colData);
            })->toArray();
        });
    }

    private function fillRows()
    {
        // rows
        $this->schema->rows->filter(function (Row $row) {
            return ! $row->on_balcony && ! $row->on_loggia;
        })->each(function (Row $row) {
            collect($row->cols)->each(function (Col $col) use ($row) {
                $colData = $this->setClass($col->toArray());
                $colData['row'] = $row->row;
                $this->data['rows']['items'][$row->id]['color'] = $row->color->name;
                if ($col->on_left) {
                    $this->data['rows']['items'][$row->id]['data']['on_left'][] = $colData;
                } else {
                    $this->data['rows']['items'][$row->id]['data']['on_right'][] = $colData;
                }
            });
        });

        // loggia
        $this->schema->rows->filter(function (Row $row) {
            return $row->on_loggia && ! $row->on_balcony;
        })->map(function (Row $row) {
            $this->data['rows']['loggia'][$row->id]['color'] = $row->color->name;
            if ($row->on_left) {
                $this->data['rows']['loggia'][$row->id]['data']['on_left'] = $row->cols->map(function (Col $col) use ($row) {
                    $colData = $col->toArray();
                    $colData['row'] = $row->row;
                    return $this->setClass($colData);
                })->toArray();
            } else {
                $this->data['rows']['loggia'][$row->id]['data']['on_right'] = $row->cols->map(function (Col $col) use ($row) {
                    $colData = $col->toArray();
                    $colData['row'] = $row->row;
                    return $this->setClass($colData);
                })->toArray();
            }
        });
    }

    /**
     * @param array $colData
     *
     * @return array
     */
    private function setClass(array $colData) : array
    {
        $colData['class'] = '';
        if (in_array($colData['id'], $this->cartColIds)) {
            $colData['class'] = 'active';

        } elseif (in_array($colData['id'], $this->reservedColIds)) {
            $colData['class'] = 'busy';

            $order = Ticket::query()
                ->where('spectacle_id', $this->spectacle->id)
                ->where('col_id', $colData['id'])
                ->first()->order;

            $colData['name'] = $order->first_name . ' '
                . $order->last_name . ' '
                . $order->phone . ' '
                . $order->email;
        }

        $colData['active'] = false;

        return $colData;
    }
}
