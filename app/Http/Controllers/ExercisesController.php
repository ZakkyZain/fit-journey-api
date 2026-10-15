<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ExercisesController extends Controller
{
    public function index()
    {
        $exercises = DB::table('exercises')->get();
        return response()->json($exercises);
    }
}
