<?php
namespace Drupal\resume\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;
/**
 * Class DisplayTableController.
 *
 * @package Drupal\mydata\Controller
 */
class DisplayTableController extends ControllerBase {
public function getContent() {
 // First we'll tell the user what's going on. This content can be found
 // in the twig template file: templates/description.html.twig.
 // @todo: Set up links to create nodes and point to devel module.
 $build = [
 'description' => [
 '#theme' => 'resume_description',
 '#description' => 'foo',
 '#attributes' => [],
 ],
 ];
 return $build;
 }
/**
 * Display.
 *
 * @return string
 * Return Hello string.
 */
 public function display() {
   /**return [
    ‘#type’ => ‘markup’,
    ‘#markup’ => $this->t(‘Implement method: display with parameter(s): $name’),
    ];*/
 //create table header
 $header_table = array(
 'id'=> t('SrNo'),
 'candidate_name' => t('Name'),
 'candidate_mail' => t('Emial'),
 //'email'=>t('Email'),
 'candidate_number' => t('MobileNumber'),
 'candidate_dob' => t('DOB'),
 'candidate_gender' => t('Gender'),
 'candidate_confirmation' => t('Confirmation'),
 //'website' => t('Web site'),
 //'opt' => t('operations'),
 //'opt1' => t('operations'),
 );
//select records from table
 $query = \Drupal::database()->select('employee', 'm');
 $query->fields('m', ['id','candidate_name','candidate_mail','candidate_number','candidate_dob','candidate_gender','candidate_confirmation']);
 $results = $query->execute()->fetchAll();
 $rows=array();
 foreach($results as $data) {
 //$delete = Url::fromUserInput('/mydata/form/delete/'.$data->id);
 //$edit = Url::fromUserInput('/mydata/form/mydata?num='.$data->id);
//print the data from table
    $rows[] = array(
    'id' =>$data->id,
    'candidate_name' => $data->candidate_name,
    'candidate_mail' => $data->candidate_mail,
    //'email' => $data->email,
    'candidate_number' => $data->candidate_number,
    'candidate_dob' => $data->candidate_dob,
    'candidate_gender' => $data->candidate_gender,
    'candidate_confirmation' => $data->candidate_confirmation,
 //'website' => $data->website,
//\Drupal::l('Delete', $delete),
// \Drupal::l('Edit', $edit),
 );
}
 //display data in site
 $form['table'] = [
 '#type' => 'table',
 '#header' => $header_table,
 '#rows' => $rows,
 '#empty' => t('No users found'),
 ];
 return $form;
}
}
