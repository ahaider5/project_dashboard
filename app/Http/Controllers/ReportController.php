<?php
// ReportController.php
namespace App\Http\Controllers;

use App\Reports\UserReport;
use App\Reports\MyReport;
use Illuminate\Support\Facades\DB;

class ReportController extends \koolreport\KoolReport
{
    public function __contruct()
    {
        $this->middleware("guest");
    }
    public function index()
    {
        return view("reports");
    }

    public function userReport() {
        return view("reports.user-report.index");
    }

    public function growthReport() {
        return view("reports.growth-report.index");
    }

    public function earningReport() {
        return view("reports.earning-report.index");
    }

    public function myReport()
    {
        $report = new UserReport();
        $report->run();
        return view("report",["report"=>$report]);
    }

    public function getAllUsers() {
        // return Response::json($data);
        return response()->json(DB::table('users')->get());
        // return view("reports.user-report.index");
    }
}
