<?php

namespace App;

include "project.php";
use Project\Table;

class Table {
  public function get() {
    echo "App.Table.get \n";
  }
}

Table::get();
