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
        return $this->model()->newQuery()->getQuery();
    }

    /**
     * Save a new model and return the instance.
     *
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $attributes)
    {
        return $this->model()->create($attributes);
    }

    /**
     * Find a model by its primary key.
     *
     * @param mixed $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function find($id, array $columns = ['*'])
    {
        return $this->model()->find($id, $columns);
    }

    /**
     * Update the model in the database.
     *
     * @param \Illuminate\Database\Eloquent\Model|int|string $model
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function update($model, array $attributes)
    {
        if ($model instanceof Model) {
            return $model->update($attributes);
        }

        return $this->find($model)->update($attributes);
    }

    /**
     * Delete the model from the database.
     *
     * @param \Illuminate\Database\Eloquent\Model|int|string $model
     * @return bool|null
     * @throws \Exception
     */
    public function delete($model)
    {
        if ($model instanceof Model) {
            return $model->delete();
        }

        return $this->find($model)->delete();
    }
}
