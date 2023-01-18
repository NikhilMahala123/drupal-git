<?php

namespace Drupal\customlayout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Drupalup Block' Block.
 *
 * @Block(
 *   id = "customlayout",
 *   admin_label = @Translation("Drupalup block"),
 *   category = @Translation("Our example Drupal Up block"),
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'rendertemplate',
      '#var1' => $this->t("hello my name is riya"),
    ];
  }

}