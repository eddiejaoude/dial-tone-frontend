<?php

namespace Spec\Transform\AppBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Transform\AppBundle\Entity\Test');
    }
}
