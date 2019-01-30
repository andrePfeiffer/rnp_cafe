<?php

namespace Drupal\rnp_cafe\Plugin\Block;


use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'ShibbolethLoginBlock' block.
 *
 * @Block(
 *  id = "newba_block",
 *  admin_label = @Translation("newba block"),
 * )
 */
class RNPBlock extends BlockBase
{

  /**
   * @return array
   */
  public function build() {
    $build['shibboleth_login_block'] = [
      '#markup' => "Olá mundo!",
    ];
    return $build;
  }
}