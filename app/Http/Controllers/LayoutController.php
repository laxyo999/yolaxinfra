<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function about(){
    	return view('frontend.about');
    }

    public function railway_consultancy(){
    	return view('frontend.railway-consultancy');
    }

    public function feasibility_study_report(){
    	return view('frontend.feasibility-study-report');
    }

    public function rail_traffic_clearance(){
    	return view('frontend.rail-traffic-clearance');
    }

    public function survey_construction_plan(){
    	return view('frontend.survey-construction-plan');
    }

    public function detailed_project_report(){
    	return view('frontend.detailed-project-report');
    }

    public function engineering_scale_plan(){
    	return view('frontend.engineering-scale-plan');
    }

    public function overhead_electrification(){
    	return view('frontend.overhead-electrification');
    }

    public function signaling_telecommunication(){
    	return view('frontend.signaling-telecommunication');
    }

    public function construction_supervision(){
    	return view('frontend.construction-supervision');
    }

    public function d3_mapping_survey(){
    	return view('frontend.3d-mapping-survey');
    }

    public function drone_uav_survey(){
    	return view('frontend.drone-uav-survey');
    }

    public function topographical_survey(){
    	return view('frontend.topographical-survey');
    }
    
    public function drone_lidar_survey(){
    	return view('frontend.drone-lidar-survey');
    }

    public function infrastructure_survey(){
    	return view('frontend.infrastructure-survey');
    }

    public function renewable_energy_survey(){
    	return view('frontend.renewable-energy-survey');
    }

    public function smart_city_survey(){
    	return view('frontend.smart-city-survey');
    }

    public function agriculture_survey(){
    	return view('frontend.agriculture-survey');
    }


    public function repair_customization(){
    	return view('frontend.repair_customization');
    }

    public function echosounder(){
    	return view('frontend.echosounder');
    }

    public function energy_efficiency_and_power_consultancy(){
    	return view('frontend.energy-efficiency-and-power-consultancy');
    }

    public function energy_audit_service(){
    	return view('frontend.energy-audit-service');
    }

    public function energy_efficiency_consultancy(){
    	return view('frontend.energy-efficiency-consultancy');
    }

    public function green_building_consultancy(){
    	return view('frontend.green-building-consultancy');
    }

    public function solar_power_consultancy(){
    	return view('frontend.solar-power-consultancy');
    }

    public function power_cost_reduction(){
    	return view('frontend.power-cost-reduction');
    }

    public function health_safety_and_environment(){
    	return view('frontend.health-safety-and-environment');
    }
    public function maintenance_managementaudit(){
    	return view('frontend.maintenance-managementaudit');
    }

    public function captive_powerplant(){
    	return view('frontend.captive-powerplant');
    }

    public function third_party_construction_audit(){
    	return view('frontend.third-party-construction-audit');
    }

    public function school_education_consulting(){
    	return view('frontend.school-education-consulting');
    }

    public function school_planning_construction_assistance(){
    	return view('frontend.school-planning-construction-assistance');
    }

    public function affiliation_Legal_assistance(){
    	return view('frontend.affiliation-Legal-assistance');
    }

    public function Marketing_business_development(){
    	return view('frontend.Marketing&business-development');
    }

    public function recruitment_selection_procedure(){
    	return view('frontend.recruitment&selection-procedure');
    }

    public function management_system_consulting(){
    	return view('frontend.management-system-consulting');
    }

    public function value_added_product_strategies(){
    	return view('frontend.value-added-product-strategies');
    }

    public function quality_policy(){
    	return view('frontend.quality-policy');
    }

    public function client(){
    	return view('frontend.client');
    }


    public function contact(){
    	return view('frontend.contact');
    }
}
