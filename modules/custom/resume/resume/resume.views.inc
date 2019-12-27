<?php

function resume_views_data() {
 $data = [];
 // Base data.
 $data['employee']['table']['group'] = t('Custom Tbale Data');
 $data['employee']['table']['base'] = [
   'title' => t('Custom Tbale Data In View'),
   'help' => t('Fitbit profile data provided by the Fitbit API\'s User Profile endpoint.'),
   //'query_id' => 'employee',
 ];

 // Fields.
 $data['employee']['id'] = [
   'title' => t('ID'),
   'help' => t('ID.'),
   'field' => [
     'id' => 'numeric',
   ],
 ];
 $data['employee']['candidate_name'] = [
   'title' => t('Candidate Name'),
   'help' => t('Name.'),
   'field' => [
     'id' => 'standard',
   ],
 ];
 $data['employee']['candidate_mail'] = [
   'title' => t('Candidate Mail.'),
   'help' => t('Email.'),
   'field' => [
     'id' => 'standard',
   ],
 ];
 $data['employee']['candidate_number'] = [
   'title' => t('Candidate Number'),
   'help' => t('Fibit users\'s height.'),
   'field' => [
     'id' => 'standard',
   ],
 ];
 $data['employee']['candidate_gender'] = [
   'title' => t('Candidate Gender'),
   'help' => t('Candidate Gender.'),
   'field' => [
     'id' => 'standard',
   ],
 ];
 $data['employee']['candidate_dob'] = [
   'title' => t('Candidate DOB'),
   'help' => t('Candidate DOB.'),
   'field' => [
     'id' => 'standard',
   ],
 ];
 $data['employee']['Candidate_Confirmation'] = [
   'title' => t('Candidate Confirmation'),
   'help' => t('Candidate Confirmation'),
   'field' => [
     'id' => 'standard',
   ],
 ];
  return $data;
}
