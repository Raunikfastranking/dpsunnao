<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/cms-image-alt.php';

/** Branch ID for /api/galleries/branch/{id}/year/{year} (Unnao) */
const DPS_UNNAO_GALLERY_BRANCH_ID = 8;

$api_url = "https://dps.allenhouseschools.com";

function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $mh = curl_multi_init();
    $curlHandles = [];
    $responses = [];
    // Create all curl handles
    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);          // max 15s per request so a hung API can't stall the page
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // disable SSL check if needed
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$key] = $ch;
    }
    $running = null;
    do {
        $status = curl_multi_exec($mh, $running);

        if ($status > CURLM_OK) {
             break;
        }
        curl_multi_select($mh);
        usleep(10000);
    } while ($running > 0);

    // Collect responses
    foreach ($curlHandles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = json_decode($content, true);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $responses;
}
$endpoints = [
    'home_data'   => '/pages/home-page-unnao',
    'menu_data'   => '/menus/5',
    'statistic_data' => '/statistics/branch/8',
    'flyer_data'   => '/flyers/branch/8',
    'header_footer_data' => '/public/branches/8/layout-parts/',
    'scroll_text_data' => '/scrolling-texts/branch/8',
    'excellence_data' => '/pages/excellence-in-action-page-unnao',
    'celebrating_data' => '/pages/celebrating-excellence-page-unnao',
    'spotlight_data' => '/pages/excellence-in-the-spotlight-page-unnao',
    'embark_data' => '/pages/embark-on-a-journey-of-excellence-page-unnao',
    'mv_data' => '/pages/mission-vision-and-core-values-page-unnao',
    'our_motto_data' => '/pages/our-motto-aspiration-span-page-unnao',
    'DPS_unnao_data' => '/pages/dps-unnao-page-unnao',
    'DPS_society_data' => '/pages/dps-society-page-unnao',
    'Chairman_msg_data' => '/pages/chairmans-message-page-unnao',
    'principal_msg_data' => '/pages/principals-message-page-unnao',
    'management_committee_data' => '/pages/management-committee-page-unnao',
    'faculty_list_data' => '/pages/faculty-list-page-unnao',
    'PP_stage_data' => '/pages/pre-primary-stage-page-unnao',
    'Primary_stage_data' => '/pages/primary-stage-page-unnao',
    'middle_stage_data' => '/pages/middle-stage-page-unnao',
    'secondary_stage_data' => '/pages/secondary-stage-page-unnao',
    'sr_secondary_stage_data' => '/pages/sr-secondary-stage-page-unnao',
    'smart_classroom_data' => '/pages/smart-classrooms-page-unnao',
    'junior_lab_data' => '/pages/junior-labs-page-unnao',
    'senior_lab_data' => '/pages/senior-lab-page-unnao',
    'sports_academy_data' => '/pages/sports-academy-page-unnao',
    'LS_dev_data' => '/pages/language-skill-development-page-unnao',
    'ASS_data' => '/pages/assessment-system-and-schedule-page-unnao',
    'our_usp_data' => '/pages/our-usp-page-unnao',
    'health_fitness_data' => '/pages/health-and-physical-fitness-page-unnao',
    'NCC_data' => '/pages/national-cadet-corps-page-unnao',
    'DE_program_data' => '/pages/domestic-exchange-program-page-unnao',
    'domestic_outbounds_data' => '/pages/domestic-outbounds-page-unnao',
    'animation_master_data' => '/pages/animation-master-class-page-unnao',
    'coding_data' => '/pages/coding-page-unnao',
    'oluxi_smart_skills_data' => '/pages/oluxi-smart-skills-page-unnao',
    'financial_literacy_data' => '/pages/financial-literacy-page-unnao',
    'NWS_academy_data' => '/pages/north-west-sports-academy-page-unnao',
    'student_led_data' => '/pages/student-led-programme-page-unnao',
    'health_Well_being_data' => '/pages/health-and-well-being-page-unnao',
    'leadership_data' => '/pages/leadership-programme-page-unnao',
    'peer_edu_data' => '/pages/peer-educator-program-page-unnao',
    'sikhsha_kendra_data' => '/pages/shiksha-kendra-page-unnao',
    'SEWA_data' => '/pages/sewa-page-unnao',
    'CGCP_data' => '/pages/career-guidance-and-counselling-program-page-unnao',
    'primary_wing_data' => '/pages/primary-wing-page-unnao',
    'pre_primary_wing_data' => '/pages/pre-primary-wing-page-unnao',
    'admission_overview_data' => '/pages/admission-overview-page-unnao',
    'withdrawal_policy_data' => '/pages/withdrawal-policy-page-unnao',
    'TC_guideline_data' => '/pages/transfer-certificate-guidelines-page-unnao',
    'GT_policy_data' => '/pages/group-transfer-policy-page-unnao',
    'bus_route_data' => '/pages/bus-route-page-unnao',
    'academic_achievements_data' => '/pages/academic-achievements-page-unnao',
    'ECA_data' => '/pages/extra-curricular-achievements-page-unnao',
    'SA_achievements_data' => '/pages/sports-academy-achievements-page-unnao',
    'School_award_data' => '/pages/school-awards-page-unnao',
    'principal_award_data' => '/pages/principal-awards-page-unnao',
    'SF_award_data' => '/pages/school-faculty-awards-page-unnao',
    'video_gallery_data' => '/pages/video-gallery-page-unnao',
    'magazines_newsletter_data' => '/pages/magazines-and-newsletter-page-unnao',
    'other_information_data' => '/pages/other-information-page-unnao',
    'SH_committee_data' => '/pages/sexual-harassment-committee-page-unnao',
    'leadership_team_data' => '/pages/leadership-team-page-unnao',
    'doc_info_data' => '/pages/documents-and-information-page-unnao',
    'results_academics_data' => '/pages/results-and-academics-page-unnao',
    'school_infra_data' => '/pages/school-infrastructure-page-unnao',
    'CB_program_data' => '/pages/capacity-building-program-page-unnao',
    'schoolSSC_data' => '/pages/school-staff-selection-committee-page-unnao',
    'SMC_data' => '/pages/school-management-committee-page-unnao',
    'DC_data' => '/pages/discipline-committee-page-unnao',
    'PTAC_data' => '/pages/parents-teacher-association-committee-page-unnao',
    'POSH_data' => '/pages/posh-page-unnao',
    'POCSO_data' => '/pages/pocso-page-unnao',
    'SS_club_data' => '/pages/stem-stream-club-page-unnao',
    'FAQ_data' => '/pages/faqs-page-unnao',
    'photo_gallery_data' => '/galleries/branch/8',
    'achievement_data' => '/galleries/type/achievements/branch/8',
    'process_____data' => '/accordions/branch/8/filter/id?id=8',
    'fee_____data' => '/accordions/branch/8/filter/id?id=9',
    'footer_link_data' => '/public/link-groups/position/footer/hierarchical?branch_id=8',
    'online_enquiry_form' => '/pages/online-enquiry-form-page-unnao',
    'view_tc' => '/pages/view-tc-page-unnao',
    'almanac' => '/pages/almanac-page-unnao',
    'cambridge' => '/pages/cambridge-assessment-page-unnao',
    'contact' => '/pages/contact-us-page-unnao',
    'jobs_data' => '/jobs/branch/8',
    'fee_data' => '/pages/fee-structure-page-unnao',
    'process_data' => '/pages/process-page-unnao',
    'campus_tour' => '/pages/campus-tour-page-unnao',
    'bus_routes_data' => '/pages/bus-route-page-unnao',
    'route_data' => '/get-bus-routes/8',
    'blogData' => '/blogs/branch/8',
    'testimonial_data' => '/pages/testimonials-page-unnao',
    'terms_and_conditions' => '/pages/terms-and-conditions-page-unnao'

  ];

// --- API response caching ---
// All ~95 endpoints are cached to disk so every page load doesn't hit the remote API.
$cacheFile = __DIR__ . '/cache/api_data.json';
$cacheTime = 600; // 10 minutes

// Manual cache flush: open any page with ?flush_api_cache=dps_unnao_2026
if (isset($_GET['flush_api_cache']) && $_GET['flush_api_cache'] === 'dps_unnao_2026' && file_exists($cacheFile)) {
    unlink($cacheFile);
}

$staleData = null;
if (file_exists($cacheFile)) {
    $decodedCache = json_decode(file_get_contents($cacheFile), true);
    if (is_array($decodedCache)) {
        $staleData = $decodedCache;
    }
}

if ($staleData !== null && (time() - filemtime($cacheFile)) < $cacheTime) {
    // Fresh cache — skip all remote calls
    $data = $staleData;
} else {
    $data = fetchMultipleApiData($endpoints);

    // If an endpoint failed (null) but we have older cached data for it, keep the stale value
    $hasFreshData = false;
    foreach ($endpoints as $key => $_) {
        if (($data[$key] ?? null) !== null) {
            $hasFreshData = true;
        } elseif (isset($staleData[$key])) {
            $data[$key] = $staleData[$key];
        }
    }

    if ($hasFreshData) {
        $cacheDir = dirname($cacheFile);
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }
        // Atomic write so concurrent visitors never read a half-written file
        file_put_contents($cacheFile . '.tmp', json_encode($data), LOCK_EX);
        rename($cacheFile . '.tmp', $cacheFile);
    } elseif ($staleData !== null) {
        // API fully unreachable — serve last known good cache
        $data = $staleData;
    }
}
// --- End caching ---

$home_data   = $data['home_data'];
$menu_data   = $data['menu_data'];
$statistic_data = $data['statistic_data'];
$flyer_data = $data['flyer_data'];
$header_footer_data = $data['header_footer_data'];
$scroll_text_data = $data['scroll_text_data'];
$excellence_data   = $data['excellence_data'];
$celebrating_data   = $data['celebrating_data'];
$spotlight_data   = $data['spotlight_data'];
$embark_data   = $data['embark_data'];
$mv_data   = $data['mv_data'];
$our_motto_data   = $data['our_motto_data'];
$DPS_unnao_data   = $data['DPS_unnao_data'];
$DPS_society_data   = $data['DPS_society_data'];
$Chairman_msg_data   = $data['Chairman_msg_data'];
$principal_msg_data   = $data['principal_msg_data'];
$management_committee_data   = $data['management_committee_data'];
$faculty_list_data   = $data['faculty_list_data'];
$PP_stage_data   = $data['PP_stage_data'];
$Primary_stage_data   = $data['Primary_stage_data'];
$middle_stage_data   = $data['middle_stage_data'];
$secondary_stage_data   = $data['secondary_stage_data'];
$sr_secondary_stage_data   = $data['sr_secondary_stage_data'];
$smart_classroom_data   = $data['smart_classroom_data'];
$junior_lab_data   = $data['junior_lab_data'];
$senior_lab_data   = $data['senior_lab_data'];
$sports_academy_data   = $data['sports_academy_data'];
$LS_dev_data   = $data['LS_dev_data'];
$ASS_data   = $data['ASS_data'];
$our_usp_data   = $data['our_usp_data'];
$health_fitness_data   = $data['health_fitness_data'];
$DE_program_data   = $data['DE_program_data'];
$domestic_outbounds_data   = $data['domestic_outbounds_data'];
$animation_master_data   = $data['animation_master_data'];
$coding_data   = $data['coding_data'];
$oluxi_smart_skills_data   = $data['oluxi_smart_skills_data'];
$financial_literacy_data   = $data['financial_literacy_data'];
$NWS_academy_data   = $data['NWS_academy_data'];
$student_led_data   = $data['student_led_data'];
$health_Well_being_data   = $data['health_Well_being_data'];
$leadership_data   = $data['leadership_data'];
$peer_edu_data   = $data['peer_edu_data'];
$sikhsha_kendra_data   = $data['sikhsha_kendra_data'];
$SEWA_data   = $data['SEWA_data'];
$CGCP_data   = $data['CGCP_data'];
$primary_wing_data   = $data['primary_wing_data'];
$pre_primary_wing_data   = $data['pre_primary_wing_data'];
$admission_overview_data   = $data['admission_overview_data'];
$withdrawal_policy_data   = $data['withdrawal_policy_data'];
$TC_guideline_data   = $data['TC_guideline_data'];
$GT_policy_data   = $data['GT_policy_data'];
$bus_route_data   = $data['bus_route_data'];
$academic_achievements_data   = $data['academic_achievements_data'];
$ECA_data   = $data['ECA_data'];
$SA_achievements_data = $data['SA_achievements_data'];
$School_award_data   = $data['School_award_data'];
$principal_award_data   = $data['principal_award_data'];
$SF_award_data   = $data['SF_award_data'];
$video_gallery_data   = $data['video_gallery_data'];
$magazines_newsletter_data   = $data['magazines_newsletter_data'];
$other_information_data   = $data['other_information_data'];
$SH_committee_data   = $data['SH_committee_data'];
$leadership_team_data   = $data['leadership_team_data'];
$doc_info_data   = $data['doc_info_data'];
$results_academics_data   = $data['results_academics_data'];
$school_infra_data   = $data['school_infra_data'];
$CB_program_data   = $data['CB_program_data'];
$schoolSSC_data   = $data['schoolSSC_data'];
$SMC_data   = $data['SMC_data'];
$DC_data   = $data['DC_data'];
$PTAC_data   = $data['PTAC_data'];
$POSH_data   = $data['POSH_data'];
$POCSO_data   = $data['POCSO_data'];
$SS_club_data   = $data['SS_club_data'];
$FAQ_data   = $data['FAQ_data'];
$photo_gallery_data = $data['photo_gallery_data'];
$achievement_data = $data['achievement_data'];
$process_____data = $data['process_____data'];
$fee_____data = $data['fee_____data'];
$footer_link_data = $data['footer_link_data'];
$NCC_data = $data['NCC_data'];
$online_enquiry_form   = $data['online_enquiry_form'];
$view_tc = $data['view_tc'];
$almanac = $data['almanac'];
$cambridge = $data['cambridge'];
$contact = $data['contact'];
$jobs_data = $data['jobs_data'];
$fee_data = $data['fee_data'];
$process_data = $data['process_data'];
$campus_tour = $data['campus_tour'];
$bus_routes_data = $data['bus_routes_data'];
$route_data = $data['route_data'];
$blogData = $data['blogData'];
$testimonial_data = $data['testimonial_data'];
$terms_and_conditions = $data['terms_and_conditions'];

// Aliases / defaults for includes/header.php $pageDataMap (not all have API batch entries yet)
$contact_data = $contact;
$teacher_details_data = null;
$school_guidelines_data = null;
$general_information_data = null;
$dpss_human_data = null;
$cbse_data = null;
$superhouse_data = null;
$debriefing_data = null;
$safety_security_data = null;