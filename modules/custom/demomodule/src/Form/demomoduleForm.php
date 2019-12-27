<?php
/**
 * @file
 * Contains \Drupal\demomodule\Form\demomoduleForm.
 */
namespace Drupal\demomodule\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class demomoduleForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'demomodule_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type'=>'textfield',
      '#title' => t('name'),
      '#required' => TRUE,
    ];
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => t('email'),
      '#required' => TRUE,

    ];
    $form['password'] = [
      '#type' => 'password',
      '#title' => t('password'),
      '#required' => TRUE,
    ];
    $form['submit'] = [
      '#type' =>'submit',
      '#value'=>$this->t('save'),
      '#button type'=>'primary',
    ];
    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {
      $name = $form_state->getValue('name');
      $email = $form_state->getValue('email');
      $password = $form_state->getValue('password');
      drupal_set_message($name);
      drupal_set_message($email);
      drupal_set_message($password);
  }


}
