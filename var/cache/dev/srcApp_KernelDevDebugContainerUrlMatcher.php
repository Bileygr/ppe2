<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/administrateur/gestion/administrateurs' => array(array(array('_route' => 'gestion_des_administrateurs', '_controller' => 'App\\Controller\\AdministrateurController::gestionDesAdministrateurs'), null, null, null, false, false, null)),
            '/administrateur/modifier-mes-informations' => array(array(array('_route' => 'modification_des_informations_administrateur', '_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsAdministrateur'), null, null, null, false, false, null)),
            '/administrateur/gestion/administrateurs/inscription' => array(array(array('_route' => 'inscription_des_administrateurs', '_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesAdministrateurs'), null, null, null, false, false, null)),
            '/administrateur/gestion/partenaires' => array(array(array('_route' => 'gestion_des_partenaires', '_controller' => 'App\\Controller\\AdministrateurController::gestionDesPartenaires'), null, null, null, false, false, null)),
            '/administrateur/gestion/partenaires/inscription' => array(array(array('_route' => 'inscription_des_partenaires', '_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesPartenaires'), null, null, null, false, false, null)),
            '/administrateur/gestion/partenaires/modification' => array(array(array('_route' => 'modification_des_partenaires', '_controller' => 'App\\Controller\\AdministrateurController::modificationDesPartenaires'), null, null, null, false, false, null)),
            '/administrateur/gestion/jeunes' => array(array(array('_route' => 'gestion_des_jeunes', '_controller' => 'App\\Controller\\AdministrateurController::gestionDesJeunes'), null, null, null, false, false, null)),
            '/administrateur/gestion/jeunes/inscription' => array(array(array('_route' => 'inscription_des_jeunes', '_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesJeunes'), null, null, null, false, false, null)),
            '/administrateur/gestion/offres' => array(array(array('_route' => 'gestion_des_offres', '_controller' => 'App\\Controller\\AdministrateurController::gestionDesOffres'), null, null, null, false, false, null)),
            '/accueil' => array(array(array('_route' => 'accueil', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, false, null)),
            '/jeune/profil' => array(array(array('_route' => 'jeune_profil', '_controller' => 'App\\Controller\\JeuneController::profil'), null, null, null, false, false, null)),
            '/offre' => array(array(array('_route' => 'offre', '_controller' => 'App\\Controller\\OffreController::index'), null, null, null, false, false, null)),
            '/partenaire/gestion/offres' => array(array(array('_route' => 'partenaire_gestion_offres', '_controller' => 'App\\Controller\\PartenaireController::gestionOffres'), null, null, null, false, false, null)),
            '/partenaire/gestion/offres/ajout' => array(array(array('_route' => 'ajout_des_offres', '_controller' => 'App\\Controller\\PartenaireController::ajoutOffres'), null, null, null, false, false, null)),
            '/partenaire/gestion/offres/liste' => array(array(array('_route' => 'liste_des_offres_partenaire', '_controller' => 'App\\Controller\\PartenaireController::listeOffres'), null, null, null, false, false, null)),
            '/register' => array(array(array('_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'), null, null, null, false, false, null)),
            '/connexion' => array(array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/logout' => array(array(array('_route' => 'app_logout'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            38 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            57 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            102 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            116 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            136 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            149 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            159 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
