<?php

namespace TransformCore\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package TransformCore\Bundle\AppBundle\Controller
 */
class DefaultController extends Controller
{

    /**
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name)
    {
        return $this->render('TransformCoreAppBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function changelogAction()
    {
        return $this->render(
            'TransformCoreAppBundle:Default:changelog.html.twig',
            array(
                'changelog' => file('../changelog')
            )
        );
    }
}
