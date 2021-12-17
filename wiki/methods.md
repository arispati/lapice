# Lapice
Laravel library to use repository and service pattern

## Navigation
- [Home](https://github.com/arispati/lapice)
- [Usage](/wiki/usage.md)

## Available Methods
- `create(array $attributes)`
```php
/**
 * Save a new model and return the instance.
 *
 * @param array $attributes
 * @return \Illuminate\Database\Eloquent\Model
 */
public function create(array $attributes)
```
- `find($id, array $columns = ['*'])`
```php
/**
 * Find a model by its primary key.
 *
 * @param mixed $id
 * @param array $columns
 * @return \Illuminate\Database\Eloquent\Model|null
 */
public function find($id, array $columns = ['*'])
```
- `update($model, array $attributes)`
```php
/**
 * Update the model in the database.
 *
 * @param \Illuminate\Database\Eloquent\Model|int|string $model
 * @param array $attributes
 * @return bool
 * @throws \Exception
 */
public function update($model, array $attributes)
```
- `delete($model)`
```php
/**
 * Delete the model from the database.
 *
 * @param \Illuminate\Database\Eloquent\Model|int|string $model
 * @return bool|null
 * @throws \Exception
 */
public function delete($model)
```