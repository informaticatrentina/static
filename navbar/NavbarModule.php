<?php

class NavbarModule extends CWebModule {

  public function init() {
    $this->setImport(array(
      'static.navbar.*',
      'static.navbar.views.*',
    ));
  }
}
?>