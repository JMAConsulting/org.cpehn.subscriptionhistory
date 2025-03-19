<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Subscriptionhistory_Form_Report_SubscriptionHistorySummary',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Subscription History Summary',
      'description' => 'Summary report of Subscription History (org.cpehn.subscriptionhistory)',
      'class_name' => 'CRM_Subscriptionhistory_Form_Report_SubscriptionHistorySummary',
      'report_url' => 'org.cpehn.subscriptionhistory/subscriptionhistory-summary',
      'component' => '',
    ),
  ),
);