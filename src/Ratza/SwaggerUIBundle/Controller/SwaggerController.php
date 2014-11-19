<?php
/**
 * This file is part of the Ratza package.
 *
 * @author Ion Marusic <ion.marusic@gmail.com>
 */

namespace Ratza\SwaggerUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpFoundation\Response;

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
        $path = $this->container->getParameter('ratza_swagger_ui.api_docs.path');

        // Check if the setting is a route or a path
        if ($this->container->getParameter('ratza_swagger_ui.api_docs.route')) {
            $path = $this->generateUrl($path);
        }

        return $this->render('RatzaSwaggerUIBundle:Swagger:index.html.twig', array(
            "api_docs_url" => $path
        ));
    }

    /**
     * The action that serves the o2c.html file from the Swagger UI
     *
     * @return Response
     */
    public function oauthAction()
    {
        $file = $this->get('file_locator')->locate('@RatzaSwaggerUIBundle/Resources/public/swagger/o2c.html');
        $file = new SplFileInfo($file, null, null);
        return Response::create($file->getContents());
    }
}
