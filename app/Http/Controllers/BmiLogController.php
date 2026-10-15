<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BmiLogController extends Controller
{
    public function index()
    {
        $bmiLogs = DB::table('bmi_logs')->orderBy('created_at', 'desc')->get();
        return response()->json($bmiLogs);
    }
}