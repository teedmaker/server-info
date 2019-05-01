## How to use

You can see here how to install this project and initialize.

---

You can do it through two ways.

#### downloading it and requiring the `init.php` file

Download and put this directory in your project. Then, require the `init.php` file like this:

```php
<?php
...
require(__DIR__ . '/path/to/tmphp-server-info/src/init.php');
...
```

Of course, remember to put this require on the begnning of your file! Maybe after `session_start()`, `display_errors` sets and similar configs.

### using composer

You can use `composer` here! It's the better way for me.

Just run:

> composer require teedmaker/tmphp-server-info

After doing it, you need to add a script in your `composer file`.

#### a bit of info before!

When I was developing this project, I has depared with a troub:

The `composer` was not putting my `init.php` in the beginning, but after a list of files. Then I has find one solution that works perfectly for me! The `funkjedi/composer-include-files` project (you can see the directory [here](funkjedi/composer-include-files)).

#### the solution

Then you need to put these script in your `composer.json` file:

````json
{
    ...
    "extra": {
        "include_files": [
            "vendor/teedmaker/tmphp-server-info/src/init.php"
        ]
    }
    ...
}
````

### You are ready!

I think that you are ready! You has find a error? Tell us!
