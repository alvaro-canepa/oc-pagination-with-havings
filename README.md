# OctoberCMS Pagination with Havings

> **Based on [Laravel Pagination with Havings](https://github.com/justbetter/laravel-pagination-with-havings) package**
---

This package makes it possible to use Laravel's pagination with queries which are using havings. Without it you probably get "Column not found" MySQL errors. For more information see:

- https://github.com/laravel/framework/issues/3105
- https://github.com/laravel/framework/pull/5515

## Installation

```
composer require planetadeleste/oc-pagination-with-havings
```

## Usage

Just use the trait on the model.

### Example

```
use PlanetaDelEste\PaginationWithHavings\PaginationWithHavings;

class MyModel extends \Model
{
    use PaginationWithHavings;

    ...
}
```

## Ideas, bugs or suggestions?
Please create a [issue](https://github.com/planetadeleste/oc-pagination-with-havings/issues) or a [pull request](https://github.com/planetadeleste/oc-pagination-with-havings/pulls).

## Thanks
To [Roy Duineveld](https://github.com/justbetter) for write the original version for Laravel.

## License
[MIT](LICENSE.md)
