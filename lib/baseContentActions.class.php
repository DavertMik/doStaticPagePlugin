<?php
class baseContentActions extends sfActions
{
  public function executeShow(sfWebRequest $request) {
    $this->page = $this->getRoute()->getObject();
  }

}
?>
