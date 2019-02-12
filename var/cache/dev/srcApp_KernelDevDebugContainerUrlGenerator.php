<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gestion_des_administrateurs' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesAdministrateurs'), array(), array(array('text', '/administrateur/gestion/administrateurs')), array(), array()),
        'modification_des_informations_administrateur' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsAdministrateur'), array(), array(array('text', '/administrateur/modifier-mes-informations')), array(), array()),
        'inscription_des_administrateurs' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesAdministrateurs'), array(), array(array('text', '/administrateur/gestion/administrateurs/inscription')), array(), array()),
        'gestion_des_partenaires' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesPartenaires'), array(), array(array('text', '/administrateur/gestion/partenaires')), array(), array()),
        'inscription_des_partenaires' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesPartenaires'), array(), array(array('text', '/administrateur/gestion/partenaires/inscription')), array(), array()),
        'modification_des_partenaires' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesPartenaires'), array(), array(array('text', '/administrateur/gestion/partenaires/modification-des-informations')), array(), array()),
        'gestion_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesJeunes'), array(), array(array('text', '/administrateur/gestion/jeunes')), array(), array()),
        'inscription_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesJeunes'), array(), array(array('text', '/administrateur/gestion/jeunes/inscription')), array(), array()),
        'modification_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesJeunes'), array(), array(array('text', '/administrateur/gestion/jeunes/modification-des-informations')), array(), array()),
        'gestion_des_offres' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesOffres'), array(), array(array('text', '/administrateur/gestion/offres')), array(), array()),
        'modification_des_offres' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesOffres'), array(), array(array('text', '/administrateur/gestion/offres/modification-des-informations')), array(), array()),
        'accueil' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/accueil')), array(), array()),
        'jeune_profil' => array(array(), array('_controller' => 'App\\Controller\\JeuneController::profil'), array(), array(array('text', '/jeune/profil')), array(), array()),
        'offre' => array(array(), array('_controller' => 'App\\Controller\\OffreController::index'), array(), array(array('text', '/offre')), array(), array()),
        'partenaire_gestion_offres' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::gestionOffres'), array(), array(array('text', '/partenaire/gestion/offres')), array(), array()),
        'ajout_des_offres' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::ajoutOffres'), array(), array(array('text', '/partenaire/gestion/offres/ajout')), array(), array()),
        'liste_des_offres_partenaire' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::listeOffres'), array(), array(array('text', '/partenaire/gestion/offres/liste')), array(), array()),
        'app_register' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/connexion')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'app_logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
