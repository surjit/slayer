<?php

namespace App\Services;

use Bootstrap\Services\Service\ServiceContainer;

class Router extends ServiceContainer
{
  public $_alias = 'router';

  public $_shared = true;

  public function boot()
  {
    return new \Phalcon\Mvc\Router;
  }
}