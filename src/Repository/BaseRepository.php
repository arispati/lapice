<?php

namespace Arispati\Lapice\Repository;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

abstract class BaseRepository
{
    /**
     * Set the model class
     *
     * @return string
     */
    abstract protected function setModel(): string;

    /**
     * Eloquent Model
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Model|\Exception
     */
    protected function model()
    {
        $model = App::make($this->setModel());

        if ($model instanceof Model) {
            return $model;
        }

        throw new Exception("Class {$this->setModel()} must be an instance of " . Model::class);
    }

    /**
     * Query Builder
     *
     * @return \Illuminate\Database\Query\Builder|\Exception
     */
    protected function query()
    {
        return $this->model()->getQuery();
    }
}
