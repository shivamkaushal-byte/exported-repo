<?php

namespace Drupal\testmodule\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class testmoduleConfigForm extends ConfigFormBase {

  /**
   * Configure form for external integration configurations.
   */

  protected function getEditableConfigNames() {
    return ['testmodule.settings'];
  }
  /**
   * Returns the form’s unique ID.
   */

  public function getFormId() {
    return 'testmodule_form';
  }

  public function buildForm( array $form, FormStateInterface $form_state) {
    $config = $this->config('testmodule.adminsettings');


    $form['name'] = [
      '#type'=>'textfield',
      '#title' => t('name'),
      '#required' => TRUE,
      '#default_value' => $config->get('name'),
    ];
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => t('email'),
      '#required' => TRUE,
      '#default_value' => $config->get('email'),

    ];
    $form['password'] = [
      '#type' => 'password',
      '#title' => t('password'),
      '#required' => TRUE,
      '#default_value' => $config->get('password'),
    ];
    $form['submit'] = [
      '#type' =>'submit',
      '#value'=>$this->t('save'),
      '#button type'=>'primary',
    ];
    return parent::buildForm($form, $form_state);
  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('testmodule.settings')
      ->set('name', $values['name'])
      ->set('email',$values['email'])
      ->set('password',$values['password'])
      ->save();
    parent::submitForm($form, $form_state);
  }

}
