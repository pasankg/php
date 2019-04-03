<?php

namespace Traits;

trait LogTrait {
  protected function log($msg) {
    echo "{$msg}\n";
  }
}
