<?php
/**
 * @file
 * Contains \Drupal\premodule\Form\premoduleSaveForm.
 */
namespace Drupal\premodule\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class premoduleSaveForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'premodule_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


    $form['gender'] = [
      '#type' => 'radios',
      '#title' => t('Gender'),
      '#options' => array('Male' => 'Male', 'Female' => 'Female'),
      '#required' => TRUE,
    ];


    $form['value'] = [
      '#type'=>'textfield',
      '#title' => t('value'),
      '#default_value' => $form_state->getValue('gender'),
      '#required' => FALSE,
    ];

    $form['submit'] = [
      '#type' =>'submit',
      '#value'=>$this->t('save'),
      '#button type'=>'primary',
    ];
    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

        $gender = $form_state->getvalue('gender');
        $form['value']['#default_value'] = $gender;

  }


}
