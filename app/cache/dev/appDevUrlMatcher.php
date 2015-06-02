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
            // did_you_do_it_homepage
            if (preg_match('#^/didyoudoit/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_homepage')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\DefaultController::indexAction',));
            }

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
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_did_you_do_it_get_one_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_get_one_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::getOneAction',));
                }
                not_did_you_do_it_get_one_tasklist:

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
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_did_you_do_it_delete_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_delete_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::deleteAction',));
                }
                not_did_you_do_it_delete_tasklist:

                // did_you_do_it_modify_name_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_did_you_do_it_modify_name_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_modify_name_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskListController::modifyNameAction',));
                }
                not_did_you_do_it_modify_name_tasklist:

                // did_you_do_it_create_task_from_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)/task$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_did_you_do_it_create_task_from_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_create_task_from_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::createAction',));
                }
                not_did_you_do_it_create_task_from_tasklist:

                // did_you_do_it_delete_task_from_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)/task/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_did_you_do_it_delete_task_from_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_delete_task_from_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::deleteAction',));
                }
                not_did_you_do_it_delete_task_from_tasklist:

                // did_you_do_it_modify_libelle_or_checked_task_from_tasklist
                if (preg_match('#^/didyoudoit/tasklist/(?P<name>[^/]++)/task/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_did_you_do_it_modify_libelle_or_checked_task_from_tasklist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'did_you_do_it_modify_libelle_or_checked_task_from_tasklist')), array (  '_controller' => 'Projects\\DidYouDoItBundle\\Controller\\TaskController::modifyLibelleOrCheckedAction',));
                }
                not_did_you_do_it_modify_libelle_or_checked_task_from_tasklist:

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
