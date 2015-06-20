<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/bootstrap')) {
            if (0 === strpos($pathinfo, '/bootstrap/css/bootstrap')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/bootstrap/css/bootstrap.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/bootstrap/css/bootstrap_')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/bootstrap/css/bootstrap_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/bootstrap/css/bootstrap_form_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/bootstrap/js')) {
                if (0 === strpos($pathinfo, '/bootstrap/js/bootstrap')) {
                    // _assetic_bootstrap_js
                    if ($pathinfo === '/bootstrap/js/bootstrap.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                    }

                    if (0 === strpos($pathinfo, '/bootstrap/js/bootstrap_')) {
                        // _assetic_bootstrap_js_0
                        if ($pathinfo === '/bootstrap/js/bootstrap_transition_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                        }

                        // _assetic_bootstrap_js_1
                        if ($pathinfo === '/bootstrap/js/bootstrap_alert_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                        }

                        // _assetic_bootstrap_js_2
                        if ($pathinfo === '/bootstrap/js/bootstrap_button_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                        }

                        if (0 === strpos($pathinfo, '/bootstrap/js/bootstrap_c')) {
                            // _assetic_bootstrap_js_3
                            if ($pathinfo === '/bootstrap/js/bootstrap_carousel_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                            }

                            // _assetic_bootstrap_js_4
                            if ($pathinfo === '/bootstrap/js/bootstrap_collapse_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                            }

                        }

                        // _assetic_bootstrap_js_5
                        if ($pathinfo === '/bootstrap/js/bootstrap_dropdown_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                        }

                        // _assetic_bootstrap_js_6
                        if ($pathinfo === '/bootstrap/js/bootstrap_modal_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                        }

                        // _assetic_bootstrap_js_7
                        if ($pathinfo === '/bootstrap/js/bootstrap_tooltip_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                        }

                        // _assetic_bootstrap_js_8
                        if ($pathinfo === '/bootstrap/js/bootstrap_popover_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                        }

                        // _assetic_bootstrap_js_9
                        if ($pathinfo === '/bootstrap/js/bootstrap_scrollspy_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                        }

                        // _assetic_bootstrap_js_10
                        if ($pathinfo === '/bootstrap/js/bootstrap_tab_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                        }

                        // _assetic_bootstrap_js_11
                        if ($pathinfo === '/bootstrap/js/bootstrap_affix_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                        }

                        // _assetic_bootstrap_js_12
                        if ($pathinfo === '/bootstrap/js/bootstrap_bc-bootstrap-collection_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/bootstrap/js/jquery')) {
                    // _assetic_jquery
                    if ($pathinfo === '/bootstrap/js/jquery.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                    }

                    // _assetic_jquery_0
                    if ($pathinfo === '/bootstrap/js/jquery_jquery-1.10.2_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

            if (0 === strpos($pathinfo, '/didyoudoit/oauth')) {
                // connection_oauth
                if ($pathinfo === '/didyoudoit/oauthconnection') {
                    return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::connectionAction',  '_route' => 'connection_oauth',);
                }

                // oauth2_callback
                if ($pathinfo === '/didyoudoit/oauth2callback') {
                    return array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\OAuthController::oauth2callbackAction',  '_route' => 'oauth2_callback',);
                }

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
