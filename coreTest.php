<?php

class coreCase extends Drush_TestCase {
  public function testVersion() {
    $this->drush('version', array(), array('pipe' => NULL));
    $this->assertEquals('5.0-dev', $this->getOutput(), 'Downloaded expected version of drush.');
  }
}