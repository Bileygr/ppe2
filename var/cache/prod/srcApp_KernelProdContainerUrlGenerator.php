<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'modification_des_partenaires' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesPartenaires'), array(), array(array('text', '/administrateur/gestion/partenaires/modification')), array(), array()),
        'gestion_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesJeunes'), array(), array(array('text', '/administrateur/gestion/jeunes')), array(), array()),
        'inscription_des_jeunes' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::inscriptionDesJeunes'), array(), array(array('text', '/administrateur/gestion/jeunes/inscription')), array(), array()),
        'gestion_des_offres' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::gestionDesOffres'), array(), array(array('text', '/administrateur/gestion/offres')), array(), array()),
        'modification_des_offres' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::modificationDesOffres'), array(), array(array('text', '/administrateur/gestion/offres/modification')), array(), array()),
        'accueil' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/accueil')), array(), array()),
        'jeune_profil' => array(array(), array('_controller' => 'App\\Controller\\JeuneController::profil'), array(), array(array('text', '/jeune/profil')), array(), array()),
        'offre' => array(array(), array('_controller' => 'App\\Controller\\OffreController::index'), array(), array(array('text', '/offre')), array(), array()),
        'partenaire_gestion_offres' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::gestionOffres'), array(), array(array('text', '/partenaire/gestion/offres')), array(), array()),
        'ajout_des_offres' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::ajoutOffres'), array(), array(array('text', '/partenaire/gestion/offres/ajout')), array(), array()),
        'liste_des_offres_partenaire' => array(array(), array('_controller' => 'App\\Controller\\PartenaireController::listeOffres'), array(), array(array('text', '/partenaire/gestion/offres/liste')), array(), array()),
        'app_register' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/connexion')), array(), array()),
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
