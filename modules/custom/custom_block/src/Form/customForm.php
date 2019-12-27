<?php

 namespace Drupal\custom_block\Form;

 use Drupal\Core\Form\FormBase;
 use Drupal\Core\Form\FormStateInterface;
 use  Drupal\Core\Form;


 class custom_form extends FormBase {
   public function getFormId() {
     return 'custom_form';
   }
   public function builtForm( array $form, FormStateInterface $form_state) {
     $form['name'] = array(
       '#type' =>'textfield',
       '#title' => t('name'),
       '#required' => TRUE,
     );
     $form['email'] = array(
       '#type' => 'email',
       '#title'=>t('email'),
       '#required' => TRUE,
     );
     $form['password'] = array(
       '#type'=> 'password',
       '#title' => t('password'),
       '#required'=> TRUE,

     );
     $form['gender'] = array (
       '#type' =>'select',
       '#title' =>('gender'),
       '#options' => array(
         'Female' =>t('Female'),
         'Male' =>t('Male'),

       ),

     );
     // $form['actions']['#type'] 'actions';
      $form['actions']['submit'] = array (
        '#type' => 'submit',
        '#value' =>$this->t('save'),
        '#button type' => 'primary',
      );
      return $form;

   }
   public function submitForm(array &$form, FormStateInterface $form_state) {
     foreach ($form_state->getValues() as $key => $value) {
       drupal_set_message($key , ':' , $value);
     }
   }


 }
