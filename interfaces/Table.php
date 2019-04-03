<?php

use Log\LogInterface;
use Table\TableInterface;

require "LogInterface.php";
require "TableInterface.php";

class Table implements TableInterface, LogInterface {

  public function save(array $data) {
    return 'foo';
  }

  public function log($message) {
    return $message . "\n";
  }
}

echo (new Table())->save([]);
echo (new Table())->log(' interface is awesome');
