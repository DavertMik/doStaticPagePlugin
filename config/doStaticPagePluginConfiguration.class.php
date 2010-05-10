<?php

/**
 * doStaticPagePlugin configuration.
 * 
 * @package     doStaticPagePlugin
 * @subpackage  config
 * @author      Your name here
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */
class doStaticPagePluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    if (sfConfig::get('app_doStaticPage_routes_register', true) && in_array('content', sfConfig::get('sf_enabled_modules', array()))) {
      $this->dispatcher->connect('routing.load_configuration', array('doStaticPageRouting', 'listenToRoutingLoadConfigurationEvent'));
    }

    if (sfConfig::get('app_doStaticPage_routes_register', true) && in_array('contentAdmin', sfConfig::get('sf_enabled_modules', array()))) {
      $this->dispatcher->connect('routing.load_configuration', array('doStaticPageRouting', 'listenToBackendRoutingLoadConfigurationEvent'));
    }

  }
}
