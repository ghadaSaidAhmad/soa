<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{
    /**
    * @Route("/api/brands/{id}",name="show_brand")
    * @Method({"GET"})
    */
    public function showBrand($id)
    {
        $brand=$this->getDoctrine()->getRepository('AppBundle:Brand')->find($id);


        if (empty($brand)){
            $response=array(
                'code'=>1,
                'message'=>'Brand not found',
                'error'=>null,
                'result'=>null
            );

            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }

        $data=$this->get('jms_serializer')->serialize($brand,'json');


        $response=array(

            'code'=>0,
            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)

        );

        return new JsonResponse($response,200);


    }
}
