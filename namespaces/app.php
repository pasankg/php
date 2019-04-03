<?php

namespace App;

include "project.php";
use Project\Table as ProjectTableAlias;

class Table {
  public function get() {
    echo "App.Table.get \n";
  }
}

ProjectTableAlias::get();
