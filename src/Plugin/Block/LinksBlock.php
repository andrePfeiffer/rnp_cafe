<?php

namespace Drupal\rnp_cafe\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'LinksBlock' block.
 *
 * @Block(
 *  id = "links_block",
 *  admin_label = @Translation("Links block"),
 * )
 */
class LinksBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['links_block']['#markup'] = 'Implement LinksBlock.';

    return $build;
  }

}
