<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function getCustomerDashboard(Request $request)
    {
        if (\Session::get('token_nztknk')) {
            return view('customer.dashboard', ['result' => true, 'token' => \Session::get('token_nztknk'), 'contactid' => \Session::get('contactid_nztknk'), 'selector' => 1]);
        } else {
            return view('auth.login');
        }

    }

    public function logoutUser(Request $request)
    {
        \Session::remove('token_nztknk');
        \Session::remove('contact_nztknk');
        return \Response::json(['result' => true]);
    }

    public function setSession(Request $request)
    {
        $token = $request->get('token');
        $contactid = $request->get('contactid');
        $rememberme = $request->get('rememberme');

        \Session::set('token_nztknk', $token);
        \Session::set('contactid_nztknk', $contactid);
        \Session::set('rememberme_nztknk', $rememberme);
        return \Response::json(['result' => true]);
    }

    public function getVisits(Request $request)
    {
        $type = $request->get('type');
        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail1",
        ];


        $data_string = json_encode($data);
        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['tasks'];
        $filteredVisits = array();
        $iterator = 0;
        foreach ($response as $key => $value) {
            if ($value['task_type'] == $type) {
                $filteredVisits[$key] = $response[$key];
            }
            $iterator++;
        }
        return view('frames.visits', ['result' => true, 'type' => $type, 'token' => \Session::get('token_nztknk'), 'contactid' => \Session::get('contactid_nztknk'), 'data' => (object)$filteredVisits]);
    }

    public function getDashboard(Request $request)
    {

        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail1",
        ];


        $data_string = json_encode($data);
        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['tasks'];
        $inProgressVisits = 0;
        $totalVisits = 0;
        $unRatedVisits = 0;

        foreach ($response as $key => $value) {
            $totalVisits++;
            if ($value['task_status'] != "Completed") {
                $filteredVisits[$key] = $response[$key];
                $inProgressVisits++;
            }
            if (!isset($value['task_point'])) {
                $unRatedVisits++;
            }
        }

        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail2",
        ];

        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['jobs'];
        $totalProjects = 0;
        $activeProjects = 0;

        foreach ($response as $key => $value) {
            if (array_key_exists("job_durumu",$value) && $value['job_durumu'] == "Aktif")
                $activeProjects++;

            $totalProjects++;
        }

        return view('frames.dashboard', ['result' => true, "inProgressVisits" => $inProgressVisits, "totalVisits" => $totalVisits, "unRatedVisits" => $unRatedVisits, 'totalProjects' => $totalProjects, 'activeProjects' => $activeProjects]);
    }

    public function getProjects(Request $request)
    {
        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail2",
        ];

        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['jobs'];
        $filteredProjects = array();
        $iterator = 0;
        foreach ($response as $key => $value) {
            $filteredProjects[$key] = $response[$key];

            $iterator++;
        }
        return view('frames.projects', ['data' => $filteredProjects, 'title' => "Projeler", 'token' => \Session::get('token_nztknk'), 'contactid' => \Session::get('contactid_nztknk')]);
    }

    public function getProjectStatistics(Request $request)
    {
        $projectName = $request->get('projectName');
        $projectTime = $request->get('projectTime');

        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail1",
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['tasks'];
        $proVisitCount = 0;
        $doctorVisitCount = 0;
        $portfolioVisitCount = 0;
        foreach ($response as $key => $value) {
            if ($value['job_name'] == $projectName) {
                if ($value['task_type'] == "Uzman Ziyareti") {
                    $proVisitCount++;
                } elseif ($value['task_type'] == "Doktor Ziyareti") {
                    $doctorVisitCount++;
                } else {
                    $portfolioVisitCount++;
                }
            }
        }
        return \Response::json(['result' => true, "doctorVisitCount" => $doctorVisitCount, "portfolioVisitCount" => $portfolioVisitCount, "proVisitCount" => $proVisitCount]);

    }

    public function getProjectDocs(Request $request)
    {
        $projectID = $request->get('proj_id');
        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "proj_id" => $projectID,
            "fnc" => "show_detail4",
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();

        return \Response::json(['result' => true, 'data' => $response['docs']]);
    }

    public function registerUser(Request $request)
    {
        $orid = 3264;
        $email = $request->get('email');
        $telno = $request->get('telno');
        $taxno = $request->get('taxno');
        $func = "get_psw_token";
        $data = [
            "email" => $email,
            "taxno" => $taxno,
            "orid" => $orid,
            "fnc" => $func,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        return \Response::json(['result' => true, 'data' => $response]);
    }

    public function loginUser(Request $request)
    {
        $orid = 3264;
        $email = $request->get('email');
        $password = $request->get('psw');
        $func = "get_token";
        $data = [
            "email" => $email,
            "psw" => $password,
            "orid" => $orid,
            "fnc" => $func,
        ];
    
        $url = "https://tr3.mybasiccrm.com/returndata.php";
        $response = Curl::to($url)->withData($data)->asJson(true)->post();
    
        // Hata kontrolü ekleyelim
        if (!isset($response['token'])) {
            return \Response::json([
                'result' => false, 
                'message' => 'Giriş bilgileri hatalı, lütfen tekrar deneyin.'
            ]);
        }
    
        // Başarılı giriş işlemi
        \Session::put('token_nztknk', $response['token']);
        \Session::put('contactid_nztknk', $response['contactid']);
    
        return \Response::json(['result' => true, 'data' => $response]);
    }
    

    public function getProfileContent(Request $request)
    {
        $orid = 3264;
        $func = "show_main";
        $data = [
            "contactid" => \Session::get('contactid_nztknk'),
            "token" => \Session::get('token_nztknk'),
            "orid" => $orid,
            "fnc" => $func,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        /*\Session::set('rememberme_nztknk', $response['rememberme']);*/
        return \Response::json(['result' => true, 'data' => $response]);
    }

    public function rateVisit(Request $request)
    {
        $orid = 3264;
        $taskid = $request->get('task_id');
        $taskpoint = $request->get('task_point');
        $task_comment = $request->get('task_comment');
        $func = "put_points";
        $data = [
            "contactid" => \Session::get('contactid_nztknk'),
            "token" => \Session::get('token_nztknk'),
            "orid" => $orid,
            "fnc" => $func,
            'task_comment' => $task_comment,
            'task_id' => $taskid,
            'task_point' => $taskpoint,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        /*\Session::set('rememberme_nztknk', $response['rememberme']);*/
        return \Response::json(['result' => true, 'data' => $response]);
    }

    public function getProjectDetail(Request $request)
    {
        $orid = 3264;
        $func = "show_detail3";
        $projectID = $request->get('proj_id');
        $data = [
            "contactid" => \Session::get('contactid_nztknk'),
            "token" => \Session::get('token_nztknk'),
            "orid" => $orid,
            "fnc" => $func,
            'proj_id' => $projectID,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $responseData = $response;


        $projectName = $response['job_name'];

        $data = [
            "token" => \Session::get('token_nztknk'),
            "contactid" => \Session::get('contactid_nztknk'),
            "fnc" => "show_detail1",
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        $response = $response['tasks'];
        $proVisitCount = 0;
        $doctorVisitCount = 0;
        $portfolioVisitCount = 0;
        foreach ($response as $key => $value) {
            if ($value['job_name'] == $projectName) {
                if ($value['task_type'] == "Uzman Ziyareti") {
                    $proVisitCount++;
                } elseif ($value['task_type'] == "Doktor Ziyareti") {
                    $doctorVisitCount++;
                } else {
                    $portfolioVisitCount++;
                }
            }
        }
        /*\Session::set('rememberme_nztknk', $response['rememberme']);*/
        return \Response::json(['result' => true, 'data' => $responseData, "doctorVisitCount" => $doctorVisitCount, "portfolioVisitCount" => $portfolioVisitCount, "proVisitCount" => $proVisitCount]);

    }

    public function requestPin(Request $request)
    {
        $orid = 3264;
        $email = $request->get('email');
        $func = "get_psw_token";
        $data = [
            "contactid" => \Session::get('contactid_nztknk'),
            "token" => \Session::get('token_nztknk'),
            "orid" => $orid,
            "email" => $email,
            "fnc" => $func,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        /*\Session::set('rememberme_nztknk', $response['rememberme']);*/
        return \Response::json(['result' => true, 'data' => $response]);
    }

    public function postPin(Request $request)
    {
        $orid = 3264;
        $pin = $request->get('pin');
        $psw = $request->get('psw');
        $func = "set_psw_token";
        $data = [
            "contactid" => \Session::get('contactid_nztknk'),
            "token" => \Session::get('token_nztknk'),
            "orid" => $orid,
            "pin" => $pin,
            "psw" => $psw,
            "fnc" => $func,
        ];


        $url = "https://tr3.mybasiccrm.com/returndata.php";


        $response = Curl::to($url)->withData($data)->asJson(true)->post();
        /*\Session::set('rememberme_nztknk', $response['rememberme']);*/
        return \Response::json(['result' => true, 'data' => $response]);
    }
}
