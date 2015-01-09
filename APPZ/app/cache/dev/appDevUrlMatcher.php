<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        if (0 === strpos($pathinfo, '/areas')) {
            // areas
            if (0 === strpos($pathinfo, '/areas/index') && preg_match('#^/areas/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_areas;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::indexAction',));
            }
            not_areas:

            // areas_index_json
            if ($pathinfo === '/areas/data/index_all.json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_areas_index_json;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::indexAllJsonAction',  '_route' => 'areas_index_json',);
            }
            not_areas_index_json:

            // areas_create
            if ($pathinfo === '/areas/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_areas_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::createAction',  '_route' => 'areas_create',);
            }
            not_areas_create:

            // areas_new
            if ($pathinfo === '/areas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_areas_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::newAction',  '_route' => 'areas_new',);
            }
            not_areas_new:

            // areas_edit
            if (0 === strpos($pathinfo, '/areas/edit') && preg_match('#^/areas/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_areas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::editAction',));
            }
            not_areas_edit:

            // areas_update
            if (0 === strpos($pathinfo, '/areas/update') && preg_match('#^/areas/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_areas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::updateAction',));
            }
            not_areas_update:

            // areas_delete
            if (0 === strpos($pathinfo, '/areas/delete') && preg_match('#^/areas/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_areas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\AreaController::deleteAction',));
            }
            not_areas_delete:

        }

        if (0 === strpos($pathinfo, '/contratos')) {
            // contratos
            if (0 === strpos($pathinfo, '/contratos/index') && preg_match('#^/contratos/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contratos;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratos')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::indexAction',));
            }
            not_contratos:

            if (0 === strpos($pathinfo, '/contratos/data')) {
                if (0 === strpos($pathinfo, '/contratos/data/index')) {
                    // contratos_json
                    if ($pathinfo === '/contratos/data/index.json') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_contratos_json;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::indexJsonAction',  '_route' => 'contratos_json',);
                    }
                    not_contratos_json:

                    // contratos_index_json
                    if ($pathinfo === '/contratos/data/index_all.json') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_contratos_index_json;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::indexAllJsonAction',  '_route' => 'contratos_index_json',);
                    }
                    not_contratos_index_json:

                }

                // contrato_json
                if ($pathinfo === '/contratos/data/show.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contrato_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::showJsonAction',  '_route' => 'contrato_json',);
                }
                not_contrato_json:

            }

            // contratos_create
            if ($pathinfo === '/contratos/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contratos_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::createAction',  '_route' => 'contratos_create',);
            }
            not_contratos_create:

            // contratos_new
            if ($pathinfo === '/contratos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contratos_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::newAction',  '_route' => 'contratos_new',);
            }
            not_contratos_new:

            // contratos_edit
            if (0 === strpos($pathinfo, '/contratos/edit') && preg_match('#^/contratos/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contratos_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratos_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::editAction',));
            }
            not_contratos_edit:

            // contratos_update
            if (0 === strpos($pathinfo, '/contratos/update') && preg_match('#^/contratos/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_contratos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratos_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::updateAction',));
            }
            not_contratos_update:

            // contratos_delete
            if (0 === strpos($pathinfo, '/contratos/delete') && preg_match('#^/contratos/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contratos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratos_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ContratoController::deleteAction',));
            }
            not_contratos_delete:

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/empresas')) {
                // empresas
                if (0 === strpos($pathinfo, '/empresas/index') && preg_match('#^/empresas/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresas;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresas')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::indexAction',));
                }
                not_empresas:

                // empresas_index_json
                if ($pathinfo === '/empresas/data/index_empresas_all.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_empresas_index_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::indexEmpresasAllJsonAction',  '_route' => 'empresas_index_json',);
                }
                not_empresas_index_json:

                // empresas_create
                if ($pathinfo === '/empresas/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_empresas_create;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::createAction',  '_route' => 'empresas_create',);
                }
                not_empresas_create:

                // empresas_new
                if ($pathinfo === '/empresas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresas_new;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresas_new',);
                }
                not_empresas_new:

                // empresas_edit
                if (0 === strpos($pathinfo, '/empresas/edit') && preg_match('#^/empresas/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresas_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::editAction',));
                }
                not_empresas_edit:

                // empresas_update
                if (0 === strpos($pathinfo, '/empresas/update') && preg_match('#^/empresas/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_empresas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresas_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::updateAction',));
                }
                not_empresas_update:

                // empresas_delete
                if (0 === strpos($pathinfo, '/empresas/delete') && preg_match('#^/empresas/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresas_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EmpresaController::deleteAction',));
                }
                not_empresas_delete:

            }

            if (0 === strpos($pathinfo, '/encuestas')) {
                if (0 === strpos($pathinfo, '/encuestas/encuesta_reporte_')) {
                    if (0 === strpos($pathinfo, '/encuestas/encuesta_reporte_total_')) {
                        // encuesta_reporte_total_no_50_20_csv
                        if ($pathinfo === '/encuestas/encuesta_reporte_total_no_50_20_csv/data.csv') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_encuesta_reporte_total_no_50_20_csv;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestarTotalNo5020CsvAction',  '_route' => 'encuesta_reporte_total_no_50_20_csv',);
                        }
                        not_encuesta_reporte_total_no_50_20_csv:

                        // encuesta_reporte_total_prevencionistas_csv
                        if ($pathinfo === '/encuestas/encuesta_reporte_total_prevencionistas_csv/data.csv') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_encuesta_reporte_total_prevencionistas_csv;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaTotalPrevencionistasInspectoresCsvAction',  '_route' => 'encuesta_reporte_total_prevencionistas_csv',);
                        }
                        not_encuesta_reporte_total_prevencionistas_csv:

                    }

                    // encuesta_reporte_ipal_por_prevencionista_csv
                    if ($pathinfo === '/encuestas/encuesta_reporte_ipal_por_prevencionista_csv/data.csv') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_reporte_ipal_por_prevencionista_csv;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaIpalPorPrevencionistaCsvAction',  '_route' => 'encuesta_reporte_ipal_por_prevencionista_csv',);
                    }
                    not_encuesta_reporte_ipal_por_prevencionista_csv:

                    // encuesta_reporte_no_conformidades_csv
                    if ($pathinfo === '/encuestas/encuesta_reporte_no_conformidades_csv/data.csv') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_reporte_no_conformidades_csv;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaNoConformidadesCsvAction',  '_route' => 'encuesta_reporte_no_conformidades_csv',);
                    }
                    not_encuesta_reporte_no_conformidades_csv:

                    // encuesta_reporte_todos_los_datos_csv
                    if ($pathinfo === '/encuestas/encuesta_reporte_todos_los_datos_csv/data.csv') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_reporte_todos_los_datos_csv;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaTodosLosDatosCsvAction',  '_route' => 'encuesta_reporte_todos_los_datos_csv',);
                    }
                    not_encuesta_reporte_todos_los_datos_csv:

                    // encuesta_reporte_cierre_csv
                    if ($pathinfo === '/encuestas/encuesta_reporte_cierre_csv/data.csv') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_reporte_cierre_csv;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaCierreCsvAction',  '_route' => 'encuesta_reporte_cierre_csv',);
                    }
                    not_encuesta_reporte_cierre_csv:

                    // encuesta_reporte_por_mes_csv
                    if ($pathinfo === '/encuestas/encuesta_reporte_por_mes_csv/data.csv') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_reporte_por_mes_csv;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::reporteEncuestaMesCsvAction',  '_route' => 'encuesta_reporte_por_mes_csv',);
                    }
                    not_encuesta_reporte_por_mes_csv:

                }

                // download_encuesta_file
                if (0 === strpos($pathinfo, '/encuestas/reportes') && preg_match('#^/encuestas/reportes/(?P<file>[^/]++)/download\\.html$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_download_encuesta_file;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_encuesta_file')), array (  'file' => 'data',  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::downloadAction',));
                }
                not_download_encuesta_file:

                // encuestas
                if (0 === strpos($pathinfo, '/encuestas/index') && preg_match('#^/encuestas/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_encuestas;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::indexAction',));
                }
                not_encuestas:

                if (0 === strpos($pathinfo, '/encuestas/data')) {
                    // encuesta_data_dashboard
                    if ($pathinfo === '/encuestas/data/dashboard.json') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuesta_data_dashboard;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::dashboardAction',  '_route' => 'encuesta_data_dashboard',);
                    }
                    not_encuesta_data_dashboard:

                    // registros_supervisores_json
                    if ($pathinfo === '/encuestas/data/supervisores.json') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_registros_supervisores_json;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::indexSupervisorJsonAction',  '_route' => 'registros_supervisores_json',);
                    }
                    not_registros_supervisores_json:

                    // encuestas_json
                    if ($pathinfo === '/encuestas/data/index.json') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_json;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::indexJsonAction',  '_route' => 'encuestas_json',);
                    }
                    not_encuestas_json:

                }

                if (0 === strpos($pathinfo, '/encuestas/add')) {
                    // encuestas_create_electrica
                    if ($pathinfo === '/encuestas/add/electrica') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_create_electrica;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createElectricaAction',  '_route' => 'encuestas_create_electrica',);
                    }
                    not_encuestas_create_electrica:

                    // encuestas_create_telecomunicaciones
                    if ($pathinfo === '/encuestas/add/telecomunicaciones') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_create_telecomunicaciones;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createTelecomunicacionesAction',  '_route' => 'encuestas_create_telecomunicaciones',);
                    }
                    not_encuestas_create_telecomunicaciones:

                    // encuestas_create_logistica
                    if ($pathinfo === '/encuestas/add/logistica') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_create_logistica;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createLogisticaAction',  '_route' => 'encuestas_create_logistica',);
                    }
                    not_encuestas_create_logistica:

                    // encuestas_create_obras_civiles
                    if ($pathinfo === '/encuestas/add/obras_civiles') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_create_obras_civiles;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createObrasCivilesAction',  '_route' => 'encuestas_create_obras_civiles',);
                    }
                    not_encuestas_create_obras_civiles:

                    // encuestas_create_colombia_general
                    if ($pathinfo === '/encuestas/add/colombia_general') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_encuestas_create_colombia_general;
                        }

                        return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createColombiaGeneralAction',  '_route' => 'encuestas_create_colombia_general',);
                    }
                    not_encuestas_create_colombia_general:

                    if (0 === strpos($pathinfo, '/encuestas/add/brazil_')) {
                        // encuestas_create_brazil_general
                        if ($pathinfo === '/encuestas/add/brazil_general') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_encuestas_create_brazil_general;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createBrazilGeneralAction',  '_route' => 'encuestas_create_brazil_general',);
                        }
                        not_encuestas_create_brazil_general:

                        // encuestas_create_brazil_interno
                        if ($pathinfo === '/encuestas/add/brazil_interno') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_encuestas_create_brazil_interno;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::createBrazilInternoAction',  '_route' => 'encuestas_create_brazil_interno',);
                        }
                        not_encuestas_create_brazil_interno:

                    }

                }

                // encuestas_new
                if (0 === strpos($pathinfo, '/encuestas/new') && preg_match('#^/encuestas/new/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_encuestas_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_new')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::newAction',));
                }
                not_encuestas_new:

                // encuestas_show
                if (preg_match('#^/encuestas/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_encuestas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_show')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::showAction',));
                }
                not_encuestas_show:

                if (0 === strpos($pathinfo, '/encuestas/e')) {
                    // encuestas_show_form
                    if (0 === strpos($pathinfo, '/encuestas/encuestas_ipal') && preg_match('#^/encuestas/encuestas_ipal/(?P<type>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_encuestas_show_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_show_form')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::showFormAction',));
                    }
                    not_encuestas_show_form:

                    // encuestas_edit
                    if (0 === strpos($pathinfo, '/encuestas/edit') && preg_match('#^/encuestas/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_encuestas_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::editAction',));
                    }
                    not_encuestas_edit:

                }

                // encuestas_update
                if (0 === strpos($pathinfo, '/encuestas/update') && preg_match('#^/encuestas/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_encuestas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::updateAction',));
                }
                not_encuestas_update:

                // encuesta_delete
                if (0 === strpos($pathinfo, '/encuestas/delete') && preg_match('#^/encuestas/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_encuesta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuesta_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\EncuestaController::deleteAction',));
                }
                not_encuesta_delete:

            }

        }

        if (0 === strpos($pathinfo, '/gerencias')) {
            // gerencias
            if (0 === strpos($pathinfo, '/gerencias/index') && preg_match('#^/gerencias/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gerencias;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencias')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::indexAction',));
            }
            not_gerencias:

            // gerencias_index_json
            if ($pathinfo === '/gerencias/data/index_all.json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gerencias_index_json;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::indexAllJsonAction',  '_route' => 'gerencias_index_json',);
            }
            not_gerencias_index_json:

            // gerencias_create
            if ($pathinfo === '/gerencias/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gerencias_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::createAction',  '_route' => 'gerencias_create',);
            }
            not_gerencias_create:

            // gerencias_new
            if ($pathinfo === '/gerencias/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gerencias_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::newAction',  '_route' => 'gerencias_new',);
            }
            not_gerencias_new:

            // gerencias_edit
            if (0 === strpos($pathinfo, '/gerencias/edit') && preg_match('#^/gerencias/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gerencias_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencias_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::editAction',));
            }
            not_gerencias_edit:

            // gerencias_update
            if (0 === strpos($pathinfo, '/gerencias/update') && preg_match('#^/gerencias/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_gerencias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencias_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::updateAction',));
            }
            not_gerencias_update:

            // gerencias_delete
            if (0 === strpos($pathinfo, '/gerencias/delete') && preg_match('#^/gerencias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gerencias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerencias_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\GerenciaController::deleteAction',));
            }
            not_gerencias_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/mandantes')) {
                // mandantes
                if (0 === strpos($pathinfo, '/mandantes/index') && preg_match('#^/mandantes/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mandantes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandantes')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::indexAction',));
                }
                not_mandantes:

                // mandantes_index_json
                if ($pathinfo === '/mandantes/data/index_all.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mandantes_index_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::indexAllJsonAction',  '_route' => 'mandantes_index_json',);
                }
                not_mandantes_index_json:

                // mandantes_create
                if ($pathinfo === '/mandantes/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mandantes_create;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::createAction',  '_route' => 'mandantes_create',);
                }
                not_mandantes_create:

                // mandantes_new
                if ($pathinfo === '/mandantes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mandantes_new;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::newAction',  '_route' => 'mandantes_new',);
                }
                not_mandantes_new:

                // mandantes_edit
                if (0 === strpos($pathinfo, '/mandantes/edit') && preg_match('#^/mandantes/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mandantes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandantes_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::editAction',));
                }
                not_mandantes_edit:

                // mandantes_update
                if (0 === strpos($pathinfo, '/mandantes/update') && preg_match('#^/mandantes/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mandantes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandantes_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::updateAction',));
                }
                not_mandantes_update:

                // mandantes_delete
                if (0 === strpos($pathinfo, '/mandantes/delete') && preg_match('#^/mandantes/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mandantes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandantes_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MandanteController::deleteAction',));
                }
                not_mandantes_delete:

            }

            if (0 === strpos($pathinfo, '/metas')) {
                // metas
                if (0 === strpos($pathinfo, '/metas/index') && preg_match('#^/metas/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_metas;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'metas')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::indexAction',));
                }
                not_metas:

                // metas_create
                if ($pathinfo === '/metas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_metas_create;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::createAction',  '_route' => 'metas_create',);
                }
                not_metas_create:

                // metas_new
                if ($pathinfo === '/metas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_metas_new;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::newAction',  '_route' => 'metas_new',);
                }
                not_metas_new:

                // metas_edit
                if (preg_match('#^/metas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_metas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'metas_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::editAction',));
                }
                not_metas_edit:

                // metas_update
                if (preg_match('#^/metas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_metas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'metas_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::updateAction',));
                }
                not_metas_update:

                if (0 === strpos($pathinfo, '/metas/d')) {
                    // metas_delete
                    if (0 === strpos($pathinfo, '/metas/delete') && preg_match('#^/metas/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_metas_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'metas_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::deleteAction',));
                    }
                    not_metas_delete:

                    if (0 === strpos($pathinfo, '/metas/dashboard')) {
                        // metas_dashboard
                        if ($pathinfo === '/metas/dashboard') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_metas_dashboard;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::dashboardAction',  '_route' => 'metas_dashboard',);
                        }
                        not_metas_dashboard:

                        // metas_show_dashboard
                        if ($pathinfo === '/metas/dashboard/results.html') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_metas_show_dashboard;
                            }

                            return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\MetaController::dashboardResultsAction',  '_route' => 'metas_show_dashboard',);
                        }
                        not_metas_show_dashboard:

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/observaciones')) {
            if (0 === strpos($pathinfo, '/observaciones/observacion_reporte_')) {
                // observacion_reporte_por_mes_csv
                if ($pathinfo === '/observaciones/observacion_reporte_por_mes_csv/data.csv') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_observacion_reporte_por_mes_csv;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::reporteObservacionesMesCsvAction',  '_route' => 'observacion_reporte_por_mes_csv',);
                }
                not_observacion_reporte_por_mes_csv:

                // observacion_reporte_todos_los_datos_csv
                if ($pathinfo === '/observaciones/observacion_reporte_todos_los_datos_csv/data.csv') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_observacion_reporte_todos_los_datos_csv;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::reporteObservacionTodosLosDatosCsvAction',  '_route' => 'observacion_reporte_todos_los_datos_csv',);
                }
                not_observacion_reporte_todos_los_datos_csv:

            }

            // download_observacion_file
            if (0 === strpos($pathinfo, '/observaciones/reportes') && preg_match('#^/observaciones/reportes/(?P<file>[^/]++)/download\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_download_observacion_file;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_observacion_file')), array (  'file' => 'data',  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::downloadAction',));
            }
            not_download_observacion_file:

            // observaciones
            if (0 === strpos($pathinfo, '/observaciones/index') && preg_match('#^/observaciones/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observaciones;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'observaciones')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::indexAction',));
            }
            not_observaciones:

            // observaciones_json
            if ($pathinfo === '/observaciones/data/index.json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_observaciones_json;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::indexJsonAction',  '_route' => 'observaciones_json',);
            }
            not_observaciones_json:

            // observacion_create
            if ($pathinfo === '/observaciones/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_observacion_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::createAction',  '_route' => 'observacion_create',);
            }
            not_observacion_create:

            // observaciones_new
            if ($pathinfo === '/observaciones/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observaciones_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::newAction',  '_route' => 'observaciones_new',);
            }
            not_observaciones_new:

            // observaciones_show
            if (preg_match('#^/observaciones/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observaciones_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'observaciones_show')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::showAction',));
            }
            not_observaciones_show:

            // observaciones_show_form
            if ($pathinfo === '/observaciones/observaciones/form.html') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observaciones_show_form;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::showFormAction',  '_route' => 'observaciones_show_form',);
            }
            not_observaciones_show_form:

            // observaciones_edit
            if (0 === strpos($pathinfo, '/observaciones/edit') && preg_match('#^/observaciones/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observaciones_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'observaciones_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::editAction',));
            }
            not_observaciones_edit:

            // observacion_update
            if (preg_match('#^/observaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_observacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'observacion_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::updateAction',));
            }
            not_observacion_update:

            // observacion_delete
            if (0 === strpos($pathinfo, '/observaciones/delete') && preg_match('#^/observaciones/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_observacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'observacion_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ObservacionDeComportamientoController::deleteAction',));
            }
            not_observacion_delete:

        }

        if (0 === strpos($pathinfo, '/registros')) {
            // registros
            if (0 === strpos($pathinfo, '/registros/index') && preg_match('#^/registros/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registros;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registros')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::indexAction',));
            }
            not_registros:

            if (0 === strpos($pathinfo, '/registros/data')) {
                // registros_inspectores_json
                if ($pathinfo === '/registros/data/inspectores.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_registros_inspectores_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::indexInspectorJsonAction',  '_route' => 'registros_inspectores_json',);
                }
                not_registros_inspectores_json:

                // registros_prevencionistas_json
                if ($pathinfo === '/registros/data/prevencionistas.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_registros_prevencionistas_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::indexPrevencionistaJsonAction',  '_route' => 'registros_prevencionistas_json',);
                }
                not_registros_prevencionistas_json:

            }

            // registros_create
            if ($pathinfo === '/registros/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_registros_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::createAction',  '_route' => 'registros_create',);
            }
            not_registros_create:

            // registros_new
            if ($pathinfo === '/registros/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registros_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::newAction',  '_route' => 'registros_new',);
            }
            not_registros_new:

            // registros_edit
            if (0 === strpos($pathinfo, '/registros/edit') && preg_match('#^/registros/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registros_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registros_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::editAction',));
            }
            not_registros_edit:

            // registros_update
            if (0 === strpos($pathinfo, '/registros/update') && preg_match('#^/registros/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_registros_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registros_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::updateAction',));
            }
            not_registros_update:

            // registros_delete
            if (0 === strpos($pathinfo, '/registros/delete') && preg_match('#^/registros/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registros_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registros_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\RegistroController::deleteAction',));
            }
            not_registros_delete:

        }

        // welcome
        if (preg_match('#^/(?P<_locale>pt|es)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'welcome')), array (  '_locale' => 'es',  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SecurityController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // _login
            if (0 === strpos($pathinfo, '/login') && preg_match('#^/login(?:/(?P<_locale>pt|es))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_login')), array (  '_locale' => 'es',  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SecurityController::loginAction',));
            }

            // _logout
            if (0 === strpos($pathinfo, '/logout') && preg_match('#^/logout(?:/(?P<_locale>pt|es))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_logout')), array (  '_locale' => 'es',  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SecurityController::logoutAction',));
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/servicios')) {
                // servicios
                if (0 === strpos($pathinfo, '/servicios/index') && preg_match('#^/servicios/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::indexAction',));
                }
                not_servicios:

                // servicios_index_json
                if ($pathinfo === '/servicios/data/index_all.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_servicios_index_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::indexAllJsonAction',  '_route' => 'servicios_index_json',);
                }
                not_servicios_index_json:

                // servicios_create
                if ($pathinfo === '/servicios/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_servicios_create;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::createAction',  '_route' => 'servicios_create',);
                }
                not_servicios_create:

                // servicios_new
                if ($pathinfo === '/servicios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_new;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::newAction',  '_route' => 'servicios_new',);
                }
                not_servicios_new:

                // servicios_edit
                if (0 === strpos($pathinfo, '/servicios/edit') && preg_match('#^/servicios/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::editAction',));
                }
                not_servicios_edit:

                // servicios_update
                if (0 === strpos($pathinfo, '/servicios/update') && preg_match('#^/servicios/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_servicios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::updateAction',));
                }
                not_servicios_update:

                // servicios_delete
                if (0 === strpos($pathinfo, '/servicios/delete') && preg_match('#^/servicios/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\ServicioController::deleteAction',));
                }
                not_servicios_delete:

            }

            if (0 === strpos($pathinfo, '/subgerencias')) {
                // subgerencias
                if (0 === strpos($pathinfo, '/subgerencias/index') && preg_match('#^/subgerencias/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subgerencias;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subgerencias')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::indexAction',));
                }
                not_subgerencias:

                // subgerencias_index_json
                if ($pathinfo === '/subgerencias/data/index_all.json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_subgerencias_index_json;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::indexAllJsonAction',  '_route' => 'subgerencias_index_json',);
                }
                not_subgerencias_index_json:

                // subgerencias_create
                if ($pathinfo === '/subgerencias/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_subgerencias_create;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::createAction',  '_route' => 'subgerencias_create',);
                }
                not_subgerencias_create:

                // subgerencias_new
                if ($pathinfo === '/subgerencias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subgerencias_new;
                    }

                    return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::newAction',  '_route' => 'subgerencias_new',);
                }
                not_subgerencias_new:

                // subgerencias_edit
                if (0 === strpos($pathinfo, '/subgerencias/edit') && preg_match('#^/subgerencias/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subgerencias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subgerencias_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::editAction',));
                }
                not_subgerencias_edit:

                // subgerencias_update
                if (0 === strpos($pathinfo, '/subgerencias/update') && preg_match('#^/subgerencias/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_subgerencias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subgerencias_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::updateAction',));
                }
                not_subgerencias_update:

                // subgerencias_delete
                if (0 === strpos($pathinfo, '/subgerencias/delete') && preg_match('#^/subgerencias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subgerencias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subgerencias_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\SubGerenciaController::deleteAction',));
                }
                not_subgerencias_delete:

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuarios
            if (0 === strpos($pathinfo, '/usuario/index') && preg_match('#^/usuario/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios')), array (  'page' => 1,  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::indexAction',));
            }
            not_usuarios:

            // usuarios_search
            if ($pathinfo === '/usuario/search/index.html') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuarios_search;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::searchAction',  '_route' => 'usuarios_search',);
            }
            not_usuarios_search:

            // usuario_create
            if ($pathinfo === '/usuario/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuarios_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_edit
            if (0 === strpos($pathinfo, '/usuario/edit') && preg_match('#^/usuario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_password
            if ($pathinfo === '/usuario/password') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_password;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::passwordAction',  '_route' => 'usuarios_password',);
            }
            not_usuarios_password:

            // usuario_update_password
            if ($pathinfo === '/usuario/update_password') {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuario_update_password;
                }

                return array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::updatePasswordAction',  '_route' => 'usuario_update_password',);
            }
            not_usuario_update_password:

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuarios_delete
            if (0 === strpos($pathinfo, '/usuario/delete') && preg_match('#^/usuario/delete/(?P<id>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'BcTic\\CamIpalBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuarios_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
