<?php
/**
 * @file
 * Contains \Drupal\diamydesign_pages\Controller\CustomPagesController.
 */
namespace Drupal\diamydesign_pages\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomPagesController extends ControllerBase {

  public function contactPage(): array {
    return [
      '#theme' => 'page__contact'
      ];
  }

  public function blogPage(): array {
    return [

    ];
  }

  public function aboutPage(): array {
    return [

    ];
  }

}
