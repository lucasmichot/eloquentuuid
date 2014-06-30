EloquentUUID
===========

Provide a unique Base62-encoded UUID representing the current state of a model instance.

This is particularly useful to keep track of model versions.

**Why Base62 ?**

Compared to `MD5`, a Base62 hash is shorter and the alphabet used makes it cleaner to process, when used in a shorten URL for instance, or when stored in a database.

Requirements:
* PHP >= 5.4
* [Laravel 4.2](http://laravel.com/)

## Package installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lucasmichot/eloquentuuid`.

```json
"require": {
  "lucasmichot/eloquentuuid": "dev-master"
}
```

Next, update Composer from the Terminal:

```sh
$ composer update
```

You can achieve these operations with this one-liner command :

```sh
$ composer require "lucasmichot/eloquentuuid:dev-master"
```

## Usage

```php
use Lucasmichot\Eloquentuuid\UuidTrait;

class Post extends Eloquent
{
    use UuidTrait;

    /// your code comes here
}
```

Accessing the UUID :

```php
$user = User::find(1);
// update the attributes of the user

echo $user->uuid();
```

Each time the model is modified, the UUID is changed accordingly.


## TODO
* [ ] Finish documentation
