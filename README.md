# DialTone

## Check project

`php app/check.php`


## Run built in WebServer

`php app/console server:run`


## Behat command (use config in test/behat.yml)

`bin/behat --config test/behat.yml`

For example, initialise Behat for `Transform\AppBundle`

```
bin/behat --config test/behat.yml --init "@TransformAppBundle"
```

