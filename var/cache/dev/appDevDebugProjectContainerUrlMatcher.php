<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // tdb
        if ('/tdb' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TdbController::tdbAction',  '_route' => 'tdb',);
        }

        // technicien_remove_id
        if (0 === strpos($pathinfo, '/technicien/remove') && preg_match('#^/technicien/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'technicien_remove_id']), array (  '_controller' => 'AppBundle\\Controller\\AdministrateurController::removeTechnicienIdAction',));
        }

        // vehicule_view_id
        if (0 === strpos($pathinfo, '/vehicule/view') && preg_match('#^/vehicule/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'vehicule_view_id']), array (  '_controller' => 'AppBundle\\Controller\\TdbController::viewVehiculeIdAction',));
        }

        // vehicule_remove_id
        if (0 === strpos($pathinfo, '/vehicule/remove') && preg_match('#^/vehicule/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'vehicule_remove_id']), array (  '_controller' => 'AppBundle\\Controller\\GestionnaireController::removeVehiculeIdAction',));
        }

        if (0 === strpos($pathinfo, '/page')) {
            // pageVoiture
            if ('/pageVoiture' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TdbController::voitureAction',  '_route' => 'pageVoiture',);
            }

            // pageVehicule_insert
            if ('/pageVehiculeInsert' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VehiculeFormController::insertVehiculeAction',  '_route' => 'pageVehicule_insert',);
            }

            if (0 === strpos($pathinfo, '/pageOperation')) {
                // pageOperation
                if ('/pageOperation' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\TdbController::operationAction',  '_route' => 'pageOperation',);
                }

                // pageOperation_insert
                if ('/pageOperationInsert' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\OperationFormController::insertOperationAction',  '_route' => 'pageOperation_insert',);
                }

            }

            elseif (0 === strpos($pathinfo, '/pageGestionnaire')) {
                // pageGestionnaire_insert
                if ('/pageGestionnaireInsert' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\GestionnaireFormController::insertGestionnaireAction',  '_route' => 'pageGestionnaire_insert',);
                }

                // pageGestionnaire_Insert
                if ('/pageGestionnaire/insert' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\GestionnaireController::gestionnaireInsertAction',  '_route' => 'pageGestionnaire_Insert',);
                }

                // pageGestionnaire
                if ('/pageGestionnaire' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\GestionnaireController::GestionnaireViewAction',  '_route' => 'pageGestionnaire',);
                }

            }

            elseif (0 === strpos($pathinfo, '/pageTechnicien')) {
                // pageTechnicien_insert
                if ('/pageTechnicienInsert' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\TechnicienFormController::insertTechnicienAction',  '_route' => 'pageTechnicien_insert',);
                }

                // pageTechnicien
                if ('/pageTechnicien' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\TechnicienController::TechnicienViewAction',  '_route' => 'pageTechnicien',);
                }

            }

            // pageAdmin
            if ('/pageAdmin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdministrateurController::GestionnaireViewAction',  '_route' => 'pageAdmin',);
            }

        }

        // operation_remove_id
        if (0 === strpos($pathinfo, '/operation/remove') && preg_match('#^/operation/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'operation_remove_id']), array (  '_controller' => 'AppBundle\\Controller\\TechnicienFormController::removeOperationIdAction',));
        }

        // gestionnaire_remove_id
        if (0 === strpos($pathinfo, '/gestionnaire/remove') && preg_match('#^/gestionnaire/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'gestionnaire_remove_id']), array (  '_controller' => 'AppBundle\\Controller\\AdministrateurController::removeGestionnaireIdAction',));
        }

        // operation_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'operation_edit']), array (  '_controller' => 'AppBundle\\Controller\\TechnicienController::edit',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
