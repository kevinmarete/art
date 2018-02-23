<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Default values
$config['data_year'] = '2017';
$config['data_month'] = 'Dec';
$config['data_date'] = '2017-12-01';

//patient_scaleup_chart
$config['patient_scaleup_chart_chartview'] = 'charts/combined_column_line_view';
$config['patient_scaleup_chart_title'] = 'Patient (ART) Scaleup Trend';
$config['patient_scaleup_chart_yaxis_title'] = 'No. of Patients';
$config['patient_scaleup_chart_source'] = 'Source: www.commodities.nascop.org';
$config['patient_scaleup_chart_has_drilldown'] = FALSE;
$config['patient_scaleup_chart_filters'] = array('data_date', 'county', 'regimen_service');
$config['patient_scaleup_chart_filters_default'] = array(
    'data_date' => $config['data_date'],
    'regimen_service' => 'ART'
);

//patient_services_chart
$config['patient_services_chart_chartview'] = 'charts/stacked_column_view';
$config['patient_services_chart_title'] = 'Patient Services by County';
$config['patient_services_chart_yaxis_title'] = 'No. of Patients';
$config['patient_services_chart_source'] = 'Source: www.commodities.nascop.org';
$config['patient_services_chart_has_drilldown'] = FALSE;
$config['patient_services_chart_filters'] = array('data_year', 'data_month', 'county');
$config['patient_services_chart_filters_default'] = array(
    'data_year' => $config['data_year'], 
	'data_month' => $config['data_month']  
);

//national_mos_chart
$config['national_mos_chart_chartview'] = 'charts/stacked_bar_view';
$config['national_mos_chart_title'] = 'National Commodity Months of Stock(MOS)';
$config['national_mos_chart_yaxis_title'] = 'Months of Stock(MOS)';
$config['national_mos_chart_source'] = 'Source: www.commodities.nascop.org';
$config['national_mos_chart_has_drilldown'] = FALSE;
$config['national_mos_chart_filters'] = array('data_year', 'data_month', 'drug');
$config['national_mos_chart_filters_default'] = array(
	'data_year' => $config['data_year'], 
	'data_month' => $config['data_month'], 
	'drug' => array(
        'Zidovudine/Lamivudine/Nevirapine (AZT/3TC/NVP) 60/30/50mg FDC Tabs',
        'Zidovudine/Lamivudine/Nevirapine (AZT/3TC/NVP) 300/150/200mg FDC Tabs',
        'Zidovudine/Lamivudine (AZT/3TC) 60/30mg FDC Tabs',
        'Zidovudine/Lamivudine (AZT/3TC) 300/150mg FDC Tabs',
        'Zidovudine (AZT) 10mg/ml Liquid')
);

//commodity_consumption_chart
$config['commodity_consumption_chart_chartview'] = 'charts/line_view';
$config['commodity_consumption_chart_title'] = 'Commodity Consumption Trend';
$config['commodity_consumption_chart_yaxis_title'] = 'No. of Packs';
$config['commodity_consumption_chart_source'] = 'Source: www.commodities.nascop.org';
$config['commodity_consumption_chart_has_drilldown'] = FALSE;
$config['commodity_consumption_chart_filters'] = array('data_date', 'county', 'drug');
$config['commodity_consumption_chart_filters_default'] = array(
    'data_date' => $config['data_date'],
	'drug' => array(
        'Efavirenz (EFV) 600mg Tabs',
        'Dolutegravir (DTG) 50mg Tabs'
    )
);

//patients_regimen_chart
$config['patients_regimen_chart_chartview'] = 'charts/column_rotated_label_view';
$config['patients_regimen_chart_title'] = 'Patients on Regimen';
$config['patients_regimen_chart_yaxis_title'] = 'No. of Patients';
$config['patients_regimen_chart_source'] = 'Source: www.commodities.nascop.org';
$config['patients_regimen_chart_has_drilldown'] = FALSE;
$config['patients_regimen_chart_filters'] = array('data_date', 'county', 'regimen');
$config['patients_regimen_chart_filters_default'] = array(
    'data_date' => $config['data_date'],
	'regimen' => 'AF2B | TDF + 3TC + EFV'
);

//commodity_month_stock_chart
$config['commodity_month_stock_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['commodity_month_stock_chart_title'] = 'Commodity Month of Stock';
$config['commodity_month_stock_chart_yaxis_title'] = 'Months of Stock';
$config['commodity_month_stock_chart_source'] = 'Source: www.commodities.nascop.org';
$config['commodity_month_stock_chart_has_drilldown'] = FALSE;
$config['commodity_month_stock_chart_filters'] = array('data_date', 'drug');
$config['commodity_month_stock_chart_filters_default'] = array(
    'data_date' => $config['data_date'],
	'drug' => 'Tenofovir/Lamivudine/Efavirenz (TDF/3TC/EFV) 300/300/600mg FDC Tabs'
);

/*county_patient_distribution_chart*/
$config['county_patient_distribution_chart_chartview'] = 'charts/column_view';
$config['county_patient_distribution_chart_title'] = 'County Patient (ART) Numbers';
$config['county_patient_distribution_chart_yaxis_title'] = 'No. of Patients';
$config['county_patient_distribution_chart_source'] = 'Source: www.nascop.org';
$config['county_patient_distribution_chart_has_drilldown'] = FALSE;
$config['county_patient_distribution_chart_filters'] = array('data_year', 'data_month', 'county', 'regimen_service');
$config['county_patient_distribution_chart_filters_default'] = array(
    'data_year' => $config['data_year'], 
    'data_month' => $config['data_month'],
    'regimen_service' => 'ART' 
);

/*county_patient_distribution_table*/
$config['county_patient_distribution_table_chartview'] = 'charts/table_view';
$config['county_patient_distribution_table_title'] = 'County Patient Distibution (By Facilties and AgeGroup)';
$config['county_patient_distribution_table_yaxis_title'] = 'No. of Patients';
$config['county_patient_distribution_table_source'] = 'Source: www.nascop.org';
$config['county_patient_distribution_table_has_drilldown'] = FALSE;
$config['county_patient_distribution_table_filters'] = array('data_year', 'data_month', 'county', 'regimen_service');
$config['county_patient_distribution_table_filters_default'] = array(
    'data_year' => $config['data_year'], 
    'data_month' => $config['data_month'],
    'regimen_service' => 'ART'  
);

/*subcounty_patient_distribution_chart*/
$config['subcounty_patient_distribution_chart_chartview'] = 'charts/column_view';
$config['subcounty_patient_distribution_chart_title'] = 'Subcounty Patient (ART) Numbers';
$config['subcounty_patient_distribution_chart_yaxis_title'] = 'No. of Patients';
$config['subcounty_patient_distribution_chart_source'] = 'Source: www.nascop.org';
$config['subcounty_patient_distribution_chart_has_drilldown'] = FALSE;
$config['subcounty_patient_distribution_chart_filters'] = array('data_year', 'data_month', 'sub_county');
$config['subcounty_patient_distribution_chart_filters_default'] = array(
    'data_year' => $config['data_year'], 
    'data_month' => $config['data_month'],
    'regimen_service' => 'ART'  
);

/*subcounty_patient_distribution_table*/
$config['subcounty_patient_distribution_table_chartview'] = 'charts/table_view';
$config['subcounty_patient_distribution_table_title'] = 'Subcounty Patient Distibution (By Facilties and AgeGroup)';
$config['subcounty_patient_distribution_table_yaxis_title'] = 'No. of Patients';
$config['subcounty_patient_distribution_table_source'] = 'Source: www.nascop.org';
$config['subcounty_patient_distribution_table_has_drilldown'] = FALSE;
$config['subcounty_patient_distribution_table_filters'] = array('data_year', 'data_month', 'sub_county');
$config['subcounty_patient_distribution_table_filters_default'] = array(
    'data_year' => $config['data_year'], 
    'data_month' => $config['data_month'],
    'regimen_service' => 'ART'   
);