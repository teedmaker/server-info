## How to install

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

You can use `composer` here! It's the best way, I think.

Just run:

> composer require teedmaker/tmphp-server-info

After doing that, you're done

#### a bit of info before!

While I was developing this project, I was deeply troubled by a major deficiency in how Composer operates:

See, `composer` was not putting my `init.php` in the beginning, but after a list of files. This meant, among other things, that no other library could (safely) use this project. 

At last, I has find one solution that works perfectly for me! The `phpexperts/composer-include-files` project (you can see the project [here](https://github.com/phpexpertsinc/composer-include-files)).

Now, you don't have to bother learning arcane Composer configurations. Just `require` my project and you're good to go!

### You are ready!

I think that you are ready! Have you found an error? Please report it to us at GitHub!
https://github.com/teedmaker/tmphp-server-info
