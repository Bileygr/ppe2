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
        'administration_gestion_des_administrateurs' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesAdministrateurs'), array(), array(array('text', '/administration/gérer-les-administrateurs')), array(), array()),
        'administration_gestion_des_partenaires' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesPartenaires'), array(), array(array('text', '/administration/gérer-les-partenaires')), array(), array()),
        'administration_gestion_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesJeunes'), array(), array(array('text', '/administration/gérer-les-jeunes')), array(), array()),
        'administration_gestion_des_offres' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesOffres'), array(), array(array('text', '/administration/gérer-les-offres')), array(), array()),
        'administration_inscription_d_un_administrateur' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesAdministrateurs'), array(), array(array('text', '/administration/inscription-des-administrateurs')), array(), array()),
        'administration_inscription_d_un_partenaire' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesPartenaires'), array(), array(array('text', '/administration/inscription-des-parteniares')), array(), array()),
        'administration_inscription_d_un_jeune' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesJeunes'), array(), array(array('text', '/administrateur/inscription-des-jeunes')), array(), array()),
        'administrateur_modification' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDeSesInformations'), array(), array(array('text', '/administration/modifier-ses-informations')), array(), array()),
        'administration_modification_des_informations_d_un_administrateur' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsAdministrateur'), array(), array(array('text', '/administration/modification-des-informations-d-un-administrateur')), array(), array()),
        'administration_modification_des_informations_d_un_partenaire' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsPartenaire'), array(), array(array('text', '/administration/modification-des-informations-d-un-partenaire')), array(), array()),
        'administration_modification_des_informations_d_un_jeune' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsJeune'), array(), array(array('text', '/administration/modification-des-informations-d-un-jeune')), array(), array()),
        'administration_modification_des_informations_d_une_offre' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesInformationsOffres'), array(), array(array('text', '/administration/modification-des-informations-d-une-offre')), array(), array()),
        'statistiques' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::statistiquesDesOffres'), array(), array(array('text', '/administration/statistiques-des-offres')), array(), array()),
        'accueil' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::accueil'), array(), array(array('text', '/accueil')), array(), array()),
        'jeune_modification' => array(array(), array('_controller' => 'App\\Controller\\JeuneController::modificationDeSesInformations'), array(), array(array('text', '/jeune/modifier-ses-informations')), array(), array()),
        'jeune_gestion_de_ses_candidatures' => array(array(), array('_controller' => 'App\\Controller\\JeuneController::gestionDesCandidatures'), array(), array(array('text', '/jeune/mes-candidatures')), array(), array()),
        'download' => array(array(), array('_controller' => 'App\\Controller\\JeuneController::download'), array(), array(array('text', '/download/')), array(), array()),
        'offres' => array(array(), array('_controller' => 'App\\Controller\\OffreController::index'), array(), array(array('text', '/offres')), array(), array()),
        'offre_ajout' => array(array(), array('_controller' => 'App\\Controller\\OffreController::ajouter'), array(), array(array('text', '/ajout-d-une-offre')), array(), array()),
        'partenaire_modification' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::modificationDeSesInformations'), array(), array(array('text', '/partenaire/modifier-ses-informations')), array(), array()),
        'partenaire_gestion_des_candidatures' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::gestionDesCandidatures'), array(), array(array('text', '/partenaire/gérer-les-candidatures')), array(), array()),
        'partenaire_gestion_des_offres' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::gestionDesOffres'), array(), array(array('text', '/partenaire/gérer-les-offres')), array(), array()),
        'partenaire_modification_des_informations_d_une_offre' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::modificationDesInformationsOffres'), array(), array(array('text', '/partenaire/modification-des-informations-d-une-offre')), array(), array()),
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
