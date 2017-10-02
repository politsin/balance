<?php

namespace Drupal\billing\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Billing purchase entities.
 */
class BillingPurchaseViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}