<?php
/**
 * Description of doStaticPageRouting
 *
 * @author Davert
 */
class doStaticPageRouting {


  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();

    $r->appendRoute('content', new sfDoctrineRoute('/:slug', array('module' => 'content','action' => 'show'), array(), array('model' => 'StaticPage', 'type' => 'object')));
  }

  static public function listenToBackendRoutingLoadConfigurationEvent(sfEvent $event) {
    
    $r = $event->getSubject();

    $r->prependRoute('content', new sfDoctrineRouteCollection(array('name' => 'content','model' => 'StaticPage', 'prefix_path' => 'content','module' => 'contentAdmin')));

  }

}
?>
