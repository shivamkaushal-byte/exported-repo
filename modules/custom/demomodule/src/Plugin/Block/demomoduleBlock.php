<?php

namespace Drupal\demomodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 *Provides a 'demomoduleBlock' set socket set_socket_block
 *
 *@Block(
 *  id = "demomoduleBlock",
 *  admin_label = @translation("demomoduleBlock"),
 *)
 */
class demomoduleBlock extends BlockBase {
  public function build() {
    $form = \Drupal::formbuilder()->getForm('Drupal\demomodule\Form\demomoduleForm');
    return $form;
  }

}
?>
