http://matthewdaly.co.uk/blog/2015/06/14/setting-etags-in-laravel-5/

- save file to `app/Http/Middleware/ETagMiddleware.php`
- Then add this to the ***$middleware*** array in **app/Http/Kernel.php**

```php
    'App\Http\Middleware\ETagMiddleware'
```
