<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = DB::table('workouts')->orderBy('created_at', 'desc')->get();
        return response()->json($workouts);
    }
}