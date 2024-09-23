<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionEmail;
use App\Models\Newsletter;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function index($month)
    {
        $monthNumber = \Carbon\Carbon::createFromFormat('F', $month)->month;

        $projects = Project::whereMonth('starting_at', $monthNumber)
            ->orderBy('starting_at', 'desc')
            ->paginate(10);

        $topProjects = $projects->take(2); // Assuming top 2 projects
        $otherProjects = $projects->skip(2); // Rest of the projects

        return view('newsletter.index', compact('projects', 'topProjects', 'otherProjects'));
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        Mail::to($request->email)->send(new NewsletterSubscriptionEmail());


        return redirect()->back()->with('success', 'You have successfully signed up for newsletter subscription!');
    }

    public function monthly()
    {
        $projectsByMonth = Project::selectRaw('YEAR(starting_at) as year, MONTH(starting_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();

        return view('newsletter', compact('projectsByMonth'));
    }
}
