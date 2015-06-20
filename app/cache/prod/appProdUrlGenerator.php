<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'did_you_do_it_get_all_tasklist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::getAllAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_get_one_tasklist' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::getOneAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_new_tasklist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist/new/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_create_tasklist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_delete_tasklist' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_edit_tasklist' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_modify_tasklist' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::modifyAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_new_task' => array (  0 =>   array (    0 => 'idTaskList',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/new/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTaskList',    ),    2 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_create_task' => array (  0 =>   array (    0 => 'idTaskList',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTaskList',    ),    2 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_edit_task_from_tasklist' => array (  0 =>   array (    0 => 'idTaskList',    1 => 'idTask',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTask',    ),    2 =>     array (      0 => 'text',      1 => '/task',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTaskList',    ),    4 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'did_you_do_it_modify_task_from_tasklist' => array (  0 =>   array (    0 => 'idTaskList',    1 => 'idTask',  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::modifyAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTask',    ),    1 =>     array (      0 => 'text',      1 => '/task',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTaskList',    ),    3 =>     array (      0 => 'text',      1 => '/didyoudoit/tasklist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connection_oauth' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::connectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/didyoudoit/oauthconnection',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oauth2_callback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::oauth2callbackAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oauth2callback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
