<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Sarfraznawaz2005\VisitLog\Models\VisitLog;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $startDates = Carbon::now('Asia/Jakarta');
        $weekStartDate = $startDates->startOfWeek()->format('Y-m-d H:i:s');
        $weekEndDate = $startDates->endOfWeek()->format('Y-m-d H:i:s');

        $startDate = Carbon::now('Asia/Jakarta');
        //this day
        $dateNow = date('Y-m-d');
        // dd($dateNow);

        //thisMonth
        $firstDay = $startDate->firstOfMonth()->toDateTimeString();
        $lastDay = $startDate->endOfMonth()->toDateTimeString();
        $getMonth = date('M-y', strtotime($lastDay));
        //-1 month
        $firstDayMin1 = date("Y-m-01 00:00:00",strtotime("-1 month"));
        $lastDayMin1 = date("Y-m-t 23:59:59",strtotime("-1 month"));
        $getMonth1 = date('M-y', strtotime($lastDayMin1));
        //-2 month
        $firstDayMin2 = date('Y-m-d 00:00:00', strtotime($firstDayMin1 . ' first day of previous month'));
        $lastDayMin2 = date("Y-m-d 23:59:59",strtotime($lastDayMin1 . ' last day of previous month'));
        $getMonth2 = date('M-y', strtotime($lastDayMin2));
        //-3 month
        $firstDayMin3 = date('Y-m-d 00:00:00', strtotime($firstDayMin2 . ' first day of previous month'));
        $lastDayMin3 = date("Y-m-d 23:59:59",strtotime($lastDayMin2 . ' last day of previous month'));
        $getMonth3 = date('M-y', strtotime($lastDayMin3));
        //-4 month
        $firstDayMin4 = date('Y-m-d 00:00:00', strtotime($firstDayMin3 . ' first day of previous month'));
        $lastDayMin4 = date("Y-m-d 23:59:59",strtotime($lastDayMin3 . ' last day of previous month'));
        $getMonth4 = date('M-y', strtotime($lastDayMin4));
        //-5 month
        $firstDayMin5 = date('Y-m-d 00:00:00', strtotime($firstDayMin4 . ' first day of previous month'));
        $lastDayMin5 = date("Y-m-d 23:59:59",strtotime($lastDayMin4 . ' last day of previous month'));
        $getMonth5 = date('M-y', strtotime($lastDayMin5));

        $thisDay = VisitLog::where('created_at', 'like', $dateNow.'%')->count();
        $thisWeek = VisitLog::whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();
        $thisMonth = VisitLog::whereBetween('created_at', [$firstDay, $lastDay])->count();
        $thisMonth1 = VisitLog::whereBetween('created_at', [$firstDayMin1, $lastDayMin1])->count();
        $thisMonth2 = VisitLog::whereBetween('created_at', [$firstDayMin2, $lastDayMin2])->count();
        $thisMonth3 = VisitLog::whereBetween('created_at', [$firstDayMin3, $lastDayMin3])->count();
        $thisMonth4 = VisitLog::whereBetween('created_at', [$firstDayMin4, $lastDayMin4])->count();
        $thisMonth5 = VisitLog::whereBetween('created_at', [$firstDayMin5, $lastDayMin5])->count();

        return view('admin.dashboard.index', compact('thisMonth', 'thisMonth1', 'thisMonth2', 'thisMonth3', 'thisMonth4', 
                    'thisMonth5', 'getMonth', 'getMonth1', 'getMonth2', 'getMonth3', 'getMonth4', 'getMonth5', 'thisDay', 'thisWeek'));
    }
}
