<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = DB::table('schedules')->get();
        return response()->json($schedules);
    }
}