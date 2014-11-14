# DialTone

## Check project

`php app/check.php`

## Download dependencies via composer

1. `php -r "readfile('https://getcomposer.org/installer');" | php`

2. `php composer.phar install`

## Run built in WebServer

1. `php app/console server:run`

2. Then go to `http://localhost:8000/hello/guest`


## Behat command (use config in test/behat.yml)

`bin/behat --config test/behat.yml`

For example, initialise Behat for `Transform\AppBundle`

```
bin/behat --config test/behat.yml --init "@TransformAppBundle"
```

## PHPSpec

To run PHPSpec suite `bin/phpspec run  --config test/phpspec.yml`

Results:
```
                       100%                        1
1 specs
1 example (1 passed)
21ms
```

## Contributions

We are using GitFlow https://github.com/nvie/gitflow
