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

------

### Ready to start?

You can see how to install [here](how-to-install.md)!

You can see how to use [here](how-to-use.md)!


### Found a error or a possibility?

Fork it and send us a `pull request` :wink:
