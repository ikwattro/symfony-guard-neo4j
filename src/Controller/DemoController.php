<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController
{
    /**
     * @return JsonResponse
     *
     * @Route("/demo")
     */
    public function demoAction()
    {
        return new JsonResponse(['data' => 'hello']);
    }

    /**
     * @return JsonResponse
     *
     * @Route("/secured/demo")
     */
    public function securedDemoAction()
    {
        return new JsonResponse(['data' => 'secured']);
    }
}