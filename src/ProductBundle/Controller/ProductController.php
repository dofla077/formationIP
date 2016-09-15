<?php
/**
 * Created by PhpStorm.
 * User: Isma
 * Date: 14/09/2016
 * Time: 11:22
 */

namespace ProductBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ProductController
 * @package ProductBundle\Controller
 */
class ProductController extends Controller
{


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        /*$produit = [
            'id' => $id,
        ];*/

        $produit = new \stdClass();
        $produit->id = $id;

        dump($produit);

        return $this->render('ProductBundle:Product:show.html.twig', [
            'product' => $produit,
        ]);
    }
}