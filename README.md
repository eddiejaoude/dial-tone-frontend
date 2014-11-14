# DialTone

## Check project

`php app/check.php`


## Run built in WebServer

`php app/console server:run`

Then go to `http://localhost:8000/hello/guest`


## Behat command (use config in test/behat.yml)

`bin/behat --config test/behat.yml`

For example, initialise Behat for `Transform\AppBundle`

```
bin/behat --config test/behat.yml --init "@TransformAppBundle"
```

