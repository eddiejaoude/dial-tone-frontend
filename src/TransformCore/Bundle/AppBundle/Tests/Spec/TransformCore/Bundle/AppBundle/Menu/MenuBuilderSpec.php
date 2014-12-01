<?php

namespace Spec\TransformCore\Bundle\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilderSpec extends ObjectBehavior
{
    function it_is_initializable(FactoryInterface $factory)
    {
        $this->beConstructedWith($factory);
        $this->shouldHaveType('TransformCore\Bundle\AppBundle\Menu\MenuBuilder');
    }
}
