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
     * @param Schema $schema
     *
     * @return array
     */
    public function generateRowsData(Schema $schema) : array
    {
        $this->schema = $schema;

        $this->fillBalcony();
        $this->fillRows();

        return $this->data;
    }

    private function fillBalcony() : void
    {
        // rows
        $this->schema->rows()->orderByDesc('id')->get()->filter(function (Row $row) {
            return $row->on_balcony && ! $row->on_loggia;
        })->each(function (Row $row) {
            collect($row->cols)->each(function (Col $col) use ($row) {
                if ($col->on_left) {
                    $this->data['balcony']['items']['on_left'][] = $col->toArray();
                } else {
                    $this->data['balcony']['items']['on_right'][] = $col->toArray();
                }
            });
        });

        // loggia
        $this->schema->rows->filter(function (Row $row) {
            return $row->on_loggia && $row->on_balcony;
        })->each(function (Row $row) {
            $this->data['balcony']['loggia'] = $row->cols->toArray();
        });
    }

    private function fillRows()
    {
        // rows
        $this->schema->rows->filter(function (Row $row) {
            return ! $row->on_balcony && ! $row->on_loggia;
        })->each(function (Row $row) {
            collect($row->cols)->each(function (Col $col) use ($row) {
                if ($col->on_left) {
                    $this->data['rows']['items'][$row->id]['on_left'][] = $col->toArray();
                } else {
                    $this->data['rows']['items'][$row->id]['on_right'][] = $col->toArray();
                }
            });
        });

        // loggia
        $this->schema->rows->filter(function (Row $row) {
            return $row->on_loggia && ! $row->on_balcony;
        })->map(function (Row $row) {
            if ($row->on_left) {
                $this->data['rows']['loggia']['on_left'][] = $row->cols->toArray();
            } else {
                $this->data['rows']['loggia']['on_right'][] = $row->cols->toArray();
            }
        });
    }

}
