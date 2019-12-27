<?php

namespace Drupal\Daily_Quotes\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Daily Quotes' Block.
 *
 * @Block(
 *   id = "Daily_Quotes",
 *   admin_label = @Translation("Daily Quotes"),
 *   category = @Translation("Our example of daily quotes"),
 * )
 */

class Daily_Quotes extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getRandQuote(),
      '#cache' => [
        'max-age' => 0
      ],
    ];
  }
  /**
   * Private function for getting random quote.
   */
  private function getRandQuote() {
    $quotes = [
      '<i>Whoever is happy will make others happy too.</i> Anne Frank',
      '<i>The secret of getting ahead is getting started.</i> Mark Twain',
      '<i>You can\'t blame gravity for falling in love.</i> Albert Einstein',
      '<i>The weak can never forgive. Forgiveness is the attribute of the strong.</i> Mahatma Gandhi'
    ];

    return $quotes[array_rand($quotes)];
  }
}
