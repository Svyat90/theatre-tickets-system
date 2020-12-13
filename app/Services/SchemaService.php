<?php

namespace App\Services;

use App\Models\Row;
use App\Models\Col;
use App\Models\Schema;

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
     * @param Schema $schema
     *
     * @return array
     */
    public function generateRowsData(Schema $schema) : array
    {
        $this->schema = $schema;

        $this->fillCartIds();
        $this->fillBalcony();
        $this->fillRows();

        return $this->data;
    }

    private function fillCartIds() : void
    {
        foreach (\Cart::getContent()->toArray() as $key => $value){
            if (! in_array($key, $this->cartColIds)) {
                $this->cartColIds[] = $key;
            }
        }
    }

    /**
     * @param array $colData
     *
     * @return array
     */
    private function setColActiveCart(array $colData) : array
    {
        if (in_array($colData['id'], $this->cartColIds)) {
            $colData['active'] = true;
        } else {
            $colData['active'] = false;
        }

        return $colData;
    }

    private function fillBalcony() : void
    {
        // rows
        $this->schema->rows()->orderByDesc('id')->get()->filter(function (Row $row) {
            return $row->on_balcony && ! $row->on_loggia;
        })->each(function (Row $row) {
            collect($row->cols)->each(function (Col $col) use ($row) {
                $colData = $this->setColActiveCart($col->toArray());
                if ($col->on_left) {
                    $this->data['balcony']['items']['on_left'][] = $colData;
                } else {
                    $this->data['balcony']['items']['on_right'][] = $colData;
                }
            });
        });

        // loggia
        $this->schema->rows->filter(function (Row $row) {
            return $row->on_loggia && $row->on_balcony;
        })->each(function (Row $row) {
            $this->data['balcony']['loggia'] = $row->cols->map(function (Col $col) {
                return $this->setColActiveCart($col->toArray());
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
                $colData = $this->setColActiveCart($col->toArray());
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
                $this->data['rows']['loggia'][$row->id]['data']['on_left'] = $row->cols->map(function (Col $col) {
                    return $this->setColActiveCart($col->toArray());
                })->toArray();
            } else {
                $this->data['rows']['loggia'][$row->id]['data']['on_right'] = $row->cols->map(function (Col $col) {
                    return $this->setColActiveCart($col->toArray());
                })->toArray();
            }
        });
    }

}
