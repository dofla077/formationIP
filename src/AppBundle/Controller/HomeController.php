<?php
/**
 * Created by PhpStorm.
 * User: Isma
 * Date: 14/09/2016
 * Time: 16:18
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{


    public function indexAction()
    {
        return $this->render('index.html.twig');
    }


    public function cguAction()
    {
        return $this->render('cgu.html.twig');
    }

    public function faqAction()
    {
        return $this->render('faq.html.twig');
    }
}