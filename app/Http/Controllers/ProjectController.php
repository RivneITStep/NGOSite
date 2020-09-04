<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $groups = Project::all()->groupBy('year');
        $groupsByYear = $groups;
        return view('pages.projects', ['groupsByYear' => $groupsByYear]);
    }
}
