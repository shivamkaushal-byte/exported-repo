<?php
namespace Drupal\resume\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;


class Employee extends FieldPluginBase {
  /**
   * {@inheritdoc}
   */
  public function execute(ViewExecutable $view) {
     if ($access_tokens = $this->resumeAccessTokenManager->loadMultipleAccessToken()) {
       $index = 0;
       foreach ($access_tokens as $id => $access_token) {
         if ($data = $this->resumeClient->getResourceOwner($access_token)) {
           $data = $data->toArray();
           $row['id'] = $data['id'];
           $row['candidate_name'] = $data['candidate_name'];
           $row['candidate_mail'] = $data['candidate_mail'];
           $row['candidate_number'] = $data['candidate_number'];
           $row['candidate_dob'] = $data['candidate_dob'];
           $row['candidate_gender'] = $data['candidate_gender'];
           $row['candidate_confirmation'] = $data['candidate_confirmation'];
           // 'index' key is required.
           $row['index'] = $index++;
           $view->result[] = new ResultRow($row);
         }
       }
     }
   }
