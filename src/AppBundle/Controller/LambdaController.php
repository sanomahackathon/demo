<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LambdaController extends Controller
{
    /**
     * @Route("/lambda", name="lambda_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return new Response('<html><body>Hello World</body></html>');
    }
}
