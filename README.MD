# PHP development server
This package is a wrapper around the wonderful [Symfony Binary](https://symfony.com/download).

### Start development server
```./vendor/bin/php-dev-server```
### Configuration in composer.json
```json
{
    "extra": {
        "clubdrei/php-dev-server": {
            "port": 55555,
            "webDirectory": "public",
            "tlsEnabled": false,
            "p12File": null
        }
    }
}
```

### Generate P12 file from [Let's Encrypt](https://letsencrypt.org) certificate
1. Generate certificate
2. Convert to P12 ```openssl pkcs12 -export -out default.p12 -inkey privkey.pem -in cert.pem -certfile chain.pem```
3. Use ```symfony``` as export password
4. Copy ```default.p12``` to the desired directory``

### Credits
* [Symfony Binary](https://symfony.com/doc/current/setup/symfony_server.html)
* [Symfony Local Web Server](https://symfony.com/doc/current/setup/symfony_server.html)
* [Let's Encrypt](https://letsencrypt.org)
