<?php

namespace Drupal\jsan2020_hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController print hellow world.
 *
 * @package Drupal\jsan2020_hello_world\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Says hello world.
   *
   * @return array
   *   Markup.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
