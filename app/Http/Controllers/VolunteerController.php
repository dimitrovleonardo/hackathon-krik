<?php

namespace App\Http\Controllers;

use App\Http\Resources\VolunteerResource;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        return view('volunteers.volunteers');
    }

    public function form()
    {
        return view('volunteers.form-volunteer');
    }

    public function documents()
    {
        return view('volunteers.documents');
    }

    public function getLongTerm()
    {
        $longTermVolunteers = Volunteer::where('term', 'long')->get();

        return VolunteerResource::collection($longTermVolunteers);
    }

    public function getShortTerm()
    {
        $shortTermVolunteers = Volunteer::where('term', 'short')->get();

        return VolunteerResource::collection($shortTermVolunteers);
    }

    public function getAll()
    {
        $allVolunteers = Volunteer::all();

        return VolunteerResource::collection($allVolunteers);
    }

    public function getSingle($id)
    {
        $volunteer = Volunteer::findOrFail($id);

        return view('volunteers.volunteer', ['volunteer' => $volunteer]);
    }
}
