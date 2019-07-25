<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'LayoutController@about');
Route::get('/railway-consultancy', 'LayoutController@railway_consultancy');
Route::get('/feasibility-study-report', 'LayoutController@feasibility_study_report');

Route::get('/rail-traffic-clearance', 'LayoutController@rail_traffic_clearance');
Route::get('/survey-construction-plan', 'LayoutController@survey_construction_plan');

Route::get('/detailed-project-report', 'LayoutController@detailed_project_report');

Route::get('/engineering-scale-plan', 'LayoutController@engineering_scale_plan');

Route::get('/overhead-electrification', 'LayoutController@overhead_electrification');

Route::get('/signaling-telecommunication', 'LayoutController@signaling_telecommunication');

Route::get('/construction-supervision', 'LayoutController@construction_supervision');

Route::get('/3d-mapping-survey', 'LayoutController@d3_mapping_survey');

Route::get('/drone-uav-survey', 'LayoutController@drone_uav_survey');

Route::get('/topographical-survey', 'LayoutController@topographical_survey');

Route::get('/drone-lidar-survey', 'LayoutController@drone_lidar_survey');

Route::get('/infrastructure-survey', 'LayoutController@infrastructure_survey');

Route::get('/renewable-energy-survey', 'LayoutController@renewable_energy_survey');

Route::get('/smart-city-survey', 'LayoutController@smart_city_survey');

Route::get('/agriculture-survey', 'LayoutController@agriculture_survey');

Route::get('/repair_customization', 'LayoutController@repair_customization');

Route::get('/echosounder', 'LayoutController@echosounder');

Route::get('/energy-efficiency-and-power-consultancy', 'LayoutController@energy_efficiency_and_power_consultancy');

Route::get('/energy-audit-service', 'LayoutController@energy_audit_service');

Route::get('/energy-efficiency-consultancy', 'LayoutController@energy_efficiency_consultancy');

Route::get('/green-building-consultancy', 'LayoutController@green_building_consultancy');

Route::get('/solar-power-consultancy', 'LayoutController@solar_power_consultancy');

Route::get('/power-cost-reduction', 'LayoutController@power_cost_reduction');

Route::get('/health-safety-and-environment', 'LayoutController@health_safety_and_environment');

Route::get('/maintenance-managementaudit', 'LayoutController@maintenance_managementaudit');

Route::get('/captive-powerplant', 'LayoutController@captive_powerplant');

Route::get('/third-party-construction-audit', 'LayoutController@third_party_construction_audit');

Route::get('/school-education-consulting', 'LayoutController@school_education_consulting');

Route::get('/school-planning-construction-assistance', 'LayoutController@school_planning_construction_assistance');

Route::get('/affiliation-Legal-assistance', 'LayoutController@affiliation_Legal_assistance');

Route::get('/Marketing&business-development', 'LayoutController@Marketing_business_development');

Route::get('/recruitment&selection-procedure', 'LayoutController@recruitment_selection_procedure');

Route::get('/management-system-consulting', 'LayoutController@management_system_consulting');

Route::get('/value-added-product-strategies', 'LayoutController@value_added_product_strategies');

Route::get('/quality-policy', 'LayoutController@quality_policy');

Route::get('/client', 'LayoutController@client');

Route::get('/contact', 'LayoutController@contact');







