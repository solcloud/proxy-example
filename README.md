# Proxy example

Need five terminal tabs with pwd as current directory:

For client
`php -S localhost:7000 -t example/`

For target website
`php -S localhost:7001 -t example/`

For dispatcher
`php -S localhost:7002 -t example/`

For Endpoint 1
`php -S localhost:7010 -t example/`

For Endpoint 2
`php -S localhost:7020 -t example/`

after setting up, open `http://localhost:7000/client.php`
in webbrowser and check if "**All tests passed**"

Addresses are hardcoded in `example/config.php`, also you can set proxy here `setProxyAddress()` to better see requests

If you are lazy and want oneliner for one terminal here is

```bash
php -S localhost:7000 -t example/ & \
php -S localhost:7001 -t example/ & \
php -S localhost:7002 -t example/ & \
php -S localhost:7010 -t example/ & \
php -S localhost:7020 -t example/ &
```
