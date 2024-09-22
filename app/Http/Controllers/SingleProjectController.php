<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleProjectController extends Controller
{
    public function index()
    {
        return view('projects.singleproject');
    }
}


// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class singleProjectController extends Controller
// {
//     // Ensure this method exists
//     public function singleproject($id)
//     {
//         // Your logic here, for example:
//         // $project = Project::find($id);
//         // return view('projects.single', compact('project'));
//     }
// }
