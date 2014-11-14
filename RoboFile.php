<?php

/**
 * Class Robo
 * @package Test
 */
class RoboFile extends \Robo\Tasks
{

    public function parallelRun()
    {
        $this->taskParallelExec()
            ->process('bin/phpspec run  --config test/phpspec.yml')
            ->process('bin/behat --config test/behat.yml "@TransformAppBundle"')
            ->printed()
            ->run();
    }
}
