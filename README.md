[![Build Status](https://travis-ci.org/TransformCore/dial-tone-frontend.svg?branch=feature%2Fsymfony2-behat)](https://travis-ci.org/TransformCore/dial-tone-frontend)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/TransformCore/dial-tone-frontend/badges/quality-score.png?b=feature%2Fsymfony2-behat)](https://scrutinizer-ci.com/g/TransformCore/dial-tone-frontend/?branch=feature%2Fsymfony2-behat)
[![Dependency Status](https://www.versioneye.com/user/projects/546b164d9508250a0c00014f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/546b164d9508250a0c00014f)
[![Dependency Status](https://www.versioneye.com/user/projects/546b16539508250a0c000166/badge.svg?style=flat)](https://www.versioneye.com/user/projects/546b16539508250a0c000166)
[![Code Coverage](https://scrutinizer-ci.com/g/TransformCore/dial-tone-frontend/badges/coverage.png?b=feature%2Fsymfony2-behat)](https://scrutinizer-ci.com/g/TransformCore/dial-tone-frontend/?branch=feature%2Fsymfony2-behat)

# DialTone

## Table of Contents

[Contribution guidelines](/doc/ContributionGuidelines.md)
[Versioning successful builds - Release Candidates](/Versioning.md)

## Check project

`php app/check.php`

## Download dependencies via composer

1. `php -r "readfile('https://getcomposer.org/installer');" | php`

2. `php composer.phar install`

## Run built in WebServer

1. `php app/console server:run`

2. Then go to `http://localhost:8000/hello/guest`


## Behat command (use config in test/behat.yml)

Documentation at http://docs.behat.org/en/latest/quick_intro_pt1.html

`bin/behat --config test/behat.yml`

For example, initialise Behat for `Transform\AppBundle`

```
bin/behat --config test/behat.yml --init --suite=transform_app
```

Run features from bundle

```
bin/behat --config test/behat.yml --suite=transform_app
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

## Run full test suite in parallel

```
bin/robo parallel:run
```

```
 [Robo\Task\ParallelExecTask] bin/phpspec run  --config test/phpspec.yml
 [Robo\Task\ParallelExecTask] bin/behat --config test/behat.yml "@TransformAppBundle"
 [Robo\Task\ParallelExecTask] Processes: 1/2 [==============>-------------]  50%
 [Robo\Task\ParallelExecTask] Output for  bin/phpspec run  --config test/phpspec.yml 
/  pending: 0%  / passed: 100%  /  failed: 0%   /  broken: 0%   /  1 examples
1 specs
1 example (1 passed)
9ms

 [Robo\Task\ParallelExecTask] Processes: 2/2 [============================] 100%
 [Robo\Task\ParallelExecTask] Output for  bin/behat --config test/behat.yml "@TransformAppBundle" 
No scenarios
No steps
0m0.005s


 [Robo\Task\ParallelExecTask] 2 processes ended in 0.18 s
```

## Contributions

Please read on [Contribution Guildlines](/doc/ContributionGuildlines.md)
