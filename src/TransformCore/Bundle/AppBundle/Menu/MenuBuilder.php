<?php
namespace TransformCore\Bundle\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'navbar-nav'));

        $menu->addChild('Home', array('route' => 'transform_core_app_homepage'));
        $menu->addChild('Login', array('route' => 'transform_core_app_homepage'));
        // ... add more children

        return $menu;
    }
}