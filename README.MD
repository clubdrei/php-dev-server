# PHP development server
This package is a wrapper around the wonderful [Symfony Binary](https://symfony.com/download).

### Start development server
```./vendor/bin/php-dev-server```
### Configuration in composer.json
```json
{
    "extra": {
        "clubdrei/php-dev-server": {
            "port": 9999,
            "webDirectory": "public"
        }
    }
}
```

### Credits
* [Symfony Binary](https://symfony.com/doc/current/setup/symfony_server.html)
* [Symfony Local Web Server](https://symfony.com/doc/current/setup/symfony_server.html)
