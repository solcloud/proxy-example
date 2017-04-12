# Proxy example

Need five terminal tabs with pwd as current directory:

For client
`php -S localhost:9000 -t example/`

For target website
`php -S localhost:9001 -t example/`

For dispatcher
`php -S localhost:9002 -t example/`

For Endpoint 1
`php -S localhost:9010 -t example/`

For Endpoint 2
`php -S localhost:9020 -t example/`

after setting up, open `http://localhost:9000/client.php`
in webbrowser and check if "**All tests passed**"

Addresses are hardcoded in `example/config.php`, also you can set proxy here `setProxyAddress()` to better see requests

If you are lazy and want oneliner for one terminal here is

```bash
php -S localhost:9000 -t example/ & \
php -S localhost:9001 -t example/ & \
php -S localhost:9002 -t example/ & \
php -S localhost:9010 -t example/ & \
php -S localhost:9020 -t example/ &
```
