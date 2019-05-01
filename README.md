### TMPHP Server Info

This project generate constants that can be used in PHP projects.

For example, you can get actual url access by user like a charm:

```php
$base = BASE;
...
echo "<a href=\"{$base}/new-url/test\">go to another page</a>";
```

Or, if you need the `URL` containing all things, like: `http://site.com/teste[?user=lorem]`
Then, you can uses:

```php
$url = ACTUAL;
echo "<span>Real URL is: {$url}</a>";
```

Of course, you can use that in all places:

```php
class AnotherClass
{
    /**
     * This will return this url containing the base url
     */
    public function getUrl(string $url) {
        return BASE . $url;
    }
}
```

-----

## Manual

### METHOD

Get actual method used.

```php
echo METHOD; // prints -> get|post...
```

### IS_HTTPS

Verify if is HTTPS on

```php
return IS_HTTPS; // returns -> true|false
```

### SCHEME

Get actual scheme.

```php
echo SCHEME . '://site.com'; // prints -> [http|https]://site.com
```

### PORT

Get actual port.

```php
echo PORT; // prints -> :8000|null
```

### BASE

Get the base for this website.

```php
echo BASE; // prints -> http://example.dev/
```

### BASE_ADDR

Like BASE, but return IP_ADDR

```php
echo BASE_ADDR; // prints -> http://127.0.0.1/
```

### CORE

Get directory base for this project

```php
return CORE; // returns -> /home/user/web/test-site|C://wamp/www/test-site
```

### BRANCH

Get the actual branch.

```php
echo BRANCH; // prints -> users/2|test/create -> http://site.com/[my/branch/returned]
```

### ACTUAL

Get actual url containing all things.

```php
echo ACTUAL; // prints -> https://example.com/test?select=test-1
```

### URL

Get actual url clean.

```php
echo URL; // prints -> https://example.com/test
```

### SERVER_INFO

See all server info from this project.

```php
var_dump(SERVER_INFO); // prints a array with all data
```
