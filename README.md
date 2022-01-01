# Proxy example

Need five terminal tabs with working directory as current directory:
- `php -S localhost:7000 -t example/` - for client
- `php -S localhost:7001 -t example/` - for target website
- `php -S localhost:7002 -t example/` - for dispatcher
- `php -S localhost:7010 -t example/` - for endpoint 1
- `php -S localhost:7020 -t example/` - for endpoint 2

after setting up, open `http://localhost:7000/client.php` in webbrowser and check if "**All tests passed**"

Addresses are hardcoded in `example/config.php`, also you can set proxy here `setProxyAddress()` to better see requests

### Lazy one-liner

Here is one-liner for one terminal:

```bash
php -S localhost:7000 -t example/ & \
php -S localhost:7001 -t example/ & \
php -S localhost:7002 -t example/ & \
php -S localhost:7010 -t example/ & \
php -S localhost:7020 -t example/ & \
sleep 4 && curl http://localhost:7000/client.php
```
