<?php

require 'LogTrait.php';

class Table {
  // No need to share a common parent class now.
  use Traits\LogTrait;

  public function save() {
    $this->log('Save start');
  }
}

echo (new Table())->save();
