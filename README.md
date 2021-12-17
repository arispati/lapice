# Lapice
Laravel library to use repository and service pattern

## Table of Contents
- [Requirement](#requirement)
- [Installation](#installation)
- [Available Commands](#available-commands)
  - [Create Repository](#create-repository)
  - [Create Service](#create-service)
- [Wiki](#wiki)

### Requirement
- PHP >= 7.1
- Laravel >= 5.6

### Installation
- Install with composer
```bash
composer require arispati/lapice
```

### Available Commands
#### Create Repository
```bash
php artisan lapice:repository ExampleRepository
```
It will genarate `app/Repositories/ExampleRepository.php` file
```php
<?php

namespace App\Repositories;

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
        // return Model::class;
    }
}
```

#### Create Service
```bash
php artisan lapice:service ExampleService
```
It will genarate `app/Services/ExampleService.php` file
```php
<?php

namespace App\Services;

class ExampleService
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        //
    }
}
```

### Wiki
- [Usage](https://github.com/arispati/lapice/wiki/usage.md)
- [Available Methods](https://github.com/arispati/lapice/wiki/methods.md)