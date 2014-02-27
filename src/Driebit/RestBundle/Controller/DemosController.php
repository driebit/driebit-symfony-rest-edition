<?php

namespace Driebit\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Driebit\RestBundle\Entity\Demo;
use PhpCollection\Sequence;

/**
 * DemosController
 *
 * @author Esther Weimann <esther@driebit.nl>
 * @copyright Copyright (c) 2014 Driebit BV (http://www.driebit.nl)
 *
 * @ApiDoc(resource=true)
 */ 
class DemosController extends Controller
{

    /**
     * Get a list of demos
     *
     * @return Collection[Demo]
     *
     * @Route()
     * @View()
     * @ApiDoc(
     *  output={
     *      "class"="PhpCollection\Sequence"
     *  },
     *  statusCodes={
     *      200="List of demos"
     *  }
     * )
     */
    public function getDemosAction()
    {
        $demos = array(new Demo('Hello World!'), new Demo('Hallo Wereld!'));
        $sequence = new Sequence();
        $sequence->addAll($demos);

        return $sequence;
    }
}
 