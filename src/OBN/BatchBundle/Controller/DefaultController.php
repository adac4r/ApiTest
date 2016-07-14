<?php

namespace OBN\BatchBundle\Controller;

use OBN\AppBundle\Helper\UrlHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class DefaultController
 * @package OBN\BatchBundle\Controller
 */
class DefaultController extends Controller
{

    private $routes = [];

    /**
     * @param Request $request
     * @return jsonResponse
     */
    public function indexAction(Request $request)
    {
        $batchedRequest = $request->request->all();

        $router = $this->get('router');
        $routes = new RouteCollection();
        $routes->addCollection($router->getRouteCollection());
        $this->routes = $routes;

        $batchedResponse = [];

        foreach ($batchedRequest as $subRequest) {
            $route = $this->getRouteMatchFromUrl($subRequest['url'], $subRequest['method']);
            $batchedResponse[] = $this->executeSubRequest($route, $subRequest, $request)->getContent();
        }

        return new jsonResponse($batchedResponse);

    }

    /**
     * @param $url
     * @return mixed
     */
    private function getPathInfo($url)
    {
        $urlHelper = new UrlHelper();
        $pathInfo = $urlHelper->getPathInfo($url);

        return $pathInfo;
    }


    /**
     * @param $url
     * @param $method
     * @return array
     */
    public function getRouteMatchFromUrl($url, $method)
    {
        $context = new RequestContext();
        $context->setMethod($method);

        $pathInfo = $this->getPathInfo($url);
        $urlMatcher = new UrlMatcher($this->routes, $context);

        return $urlMatcher->match($pathInfo);
    }

    /**
     * @param $route
     * @param $subRequest
     * @param Request $request
     * @return Response
     */
    private function executeSubRequest($route, $subRequest, Request $request)
    {
        $subResponse = null;
        $urlHelper = new UrlHelper();
        $queryStringAsArray = $urlHelper->getQueryStringAsArray($subRequest['url']);

        // Get Params
        if ($queryStringAsArray) {
            $queryParams = $queryStringAsArray;
        } else {
            $queryParams = [];
        }

        // Post Params
        if (isset($subRequest['params'])) {
            $params = $subRequest['params'];
        } else {
            $params = [];
        }

        $restFormat = ['_format' => 'json'];

        $pathParams = array_merge($params, $route);
        $queryParams = array_merge($queryParams, $restFormat);

        $fwdRequest = $this->container->get('request_stack')->getCurrentRequest()->duplicate($queryParams, $pathParams, $route, $request->cookies->all(), $request->files->all(), $request->server->all());

        $subResponse = $this->container->get('kernel')->handle($fwdRequest, HttpKernelInterface::SUB_REQUEST, false);

        return $subResponse;
    }

}
