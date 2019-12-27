<?php
/**
 * @file
 * Contains \Drupal\simpleform\Form\ResumeForm.
 */
namespace Drupal\simpleform\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleCustomForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'simple_form';
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
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key , ':' , $value);
    }
  }


}
