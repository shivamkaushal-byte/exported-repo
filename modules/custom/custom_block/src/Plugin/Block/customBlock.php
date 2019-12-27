<?php

 namespace Drupal\custom_block\Plugin\Block;

 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Block\BlockPluginInterface;
 use Drupal\Core\Form\FormStateInterface;
 /**
  *Provides a 'Custom_Block' set_socket_block
  *
  *@Block(
  *  id = "custom_block",
  *  admin_label = @Translation("custom block")
  * )
  */

 class customblockblock extends BlockBase {


    public function build() {
      return array(
        '#type' => 'markup',
        '#markup' => 'This block list the article.',
      );
  }
}
