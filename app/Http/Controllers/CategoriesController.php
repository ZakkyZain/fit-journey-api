<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index ()
    {
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
        return response()->json($categories);
    }
}