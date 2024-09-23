<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\MediaLibrary\Conversions\ImageGenerators\Video;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = Team::all();


        foreach ($teamMembers as $member) {
            $member->image = asset($member->image);
        }

        return response()->json($teamMembers);
    }

    public function show($id)
    {
        $teamMember = Team::findOrFail($id);

        $teamMember->image = asset($teamMember->image);

       return View('team.show', compact('teamMember'));
    }
}
