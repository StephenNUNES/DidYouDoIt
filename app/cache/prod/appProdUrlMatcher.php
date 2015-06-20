<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/didyoudoit')) {
            if (0 === strpos($pathinfo, '/didyoudoit/tasklist')) {
                // did_you_do_it_get_all_tasklist
                if ($pathinfo === '/didyoudoit/tasklist') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_get_all_tasklist;
                    }

                    return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::getAllAction',  '_route' => 'did_you_do_it_get_all_tasklist',);
                }
                not_did_you_do_it_get_all_tasklist:

                // did_you_do_it_get_one_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_get_one_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_get_one_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::getOneAction',));
                }
                not_did_you_do_it_get_one_tasklist:

                // did_you_do_it_new_tasklist
                if (rtrim($pathinfo, '/') === '/didyoudoit/tasklist/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_new_tasklist;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'did_you_do_it_new_tasklist');
                    }

                    return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::newAction',  '_route' => 'did_you_do_it_new_tasklist',);
                }
                not_did_you_do_it_new_tasklist:

                // did_you_do_it_create_tasklist
                if ($pathinfo === '/didyoudoit/tasklist') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_did_you_do_it_create_tasklist;
                    }

                    return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::createAction',  '_route' => 'did_you_do_it_create_tasklist',);
                }
                not_did_you_do_it_create_tasklist:

                // did_you_do_it_delete_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_did_you_do_it_delete_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_delete_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::deleteAction',));
                }
                not_did_you_do_it_delete_tasklist:

                // did_you_do_it_edit_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_edit_tasklist;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'did_you_do_it_edit_tasklist');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_edit_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::editAction',));
                }
                not_did_you_do_it_edit_tasklist:

                // did_you_do_it_modify_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_did_you_do_it_modify_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_modify_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::modifyAction',));
                }
                not_did_you_do_it_modify_tasklist:

                // did_you_do_it_new_task
                if (preg_match('#^/didyoudoit/tasklist/(?P<idTaskList>[^/]++)/task/new/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_new_task;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'did_you_do_it_new_task');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_new_task')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::newAction',));
                }
                not_did_you_do_it_new_task:

                // did_you_do_it_create_task
                if (preg_match('#^/didyoudoit/tasklist/(?P<idTaskList>[^/]++)/task$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_did_you_do_it_create_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_create_task')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::createAction',));
                }
                not_did_you_do_it_create_task:

                // did_you_do_it_edit_task_from_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<idTaskList>[^/]++)/task/(?P<idTask>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_edit_task_from_tasklist;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'did_you_do_it_edit_task_from_tasklist');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_edit_task_from_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::editAction',));
                }
                not_did_you_do_it_edit_task_from_tasklist:

                // did_you_do_it_modify_task_from_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<idTaskList>[^/]++)/task/(?P<idTask>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_did_you_do_it_modify_task_from_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_modify_task_from_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::modifyAction',));
                }
                not_did_you_do_it_modify_task_from_tasklist:

            }

            // connection_oauth
            if ($pathinfo === '/didyoudoit/oauthconnection') {
                return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::connectionAction',  '_route' => 'connection_oauth',);
            }

        }

        // oauth2_callback
        if ($pathinfo === '/oauth2callback') {
            return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::oauth2callbackAction',  '_route' => 'oauth2_callback',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
