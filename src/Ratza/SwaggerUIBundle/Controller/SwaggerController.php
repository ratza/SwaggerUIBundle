<?php
/**
 * This file is part of the Ratza package.
 *
 * @author Ion Marusic <ion.marusic@gmail.com>
 */

namespace Ratza\SwaggerUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SwaggerController
 * @package Ratza\SwaggerUIBundle\Controller
 * @author Ion Marusic <ion.marusic@gmail.com>
 */
class SwaggerController extends Controller
{
    /**
     * This is main action that renders the Swagger UI page
     */
    public function indexAction()
    {
        return $this->render('RatzaSwaggerUIBundle:Swagger:index.html.twig');
    }
}
