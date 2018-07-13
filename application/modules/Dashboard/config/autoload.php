<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['helper'] = array('url');
$autoload['config'] = array('charts');
$autoload['model'] = array('summary_model', 'trend_model', 'procurement_model', 'county_model', 'subcounty_model', 'facility_model', 'partner_model', 'regimen_model', 'adt_sites_model', 'adt_reports_model');