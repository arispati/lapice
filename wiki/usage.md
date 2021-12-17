# Lapice
Laravel library to use repository and service pattern

## Navigation
- [Home](https://github.com/arispati/lapice)
- [Available Methods](/wiki/methods.md)

## Usage
#### Repository Usage
- After you create the repository file, you need to set the model class
```php
<?php

namespace App\Repositories;

use App\Models\User;
use Arispati\Lapice\Repository\BaseRepository;

class ExampleRepository extends BaseRepository
{
    /**
     * Set the model class
     *
     * @return string
     */
    protected function setModel(): string
    {
        return User::class;
    }
}
```
- The repository class support Eloquent Model & Query Builder
```php
<?php

namespace App\Repositories;

...

class ExampleRepository extends BaseRepository
{
    ...

    /**
     * Example method
     */
    public function exampleMethod() {
        // to use Eloquent Model, $this->model()
        $model = $this->model()->find(1);

        // to use Query Builder, $this->query()
        $query = $this->query()->where('id', 1)->first();
    }
}
```

#### Service Usage
- After you create the service file, you can use Dependency Injection by Laravel to use the repository class
```php
<?php

namespace App\Services;

use App\Repositories\ExampleRepository;

class ExampleService
{
    /**
     * @var ExampleRepository
     */
    protected $repository;

    /**
     * Class constructor
     */
    public function __construct(ExampleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Example task
     */
    public function exampleTask() {
        // call example method from repository
        $this->repository->exampleMethod();
    }
}
```