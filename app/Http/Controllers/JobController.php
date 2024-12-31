<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jobs = Job::latest()->with(['employer','tags'])->get()->groupBy('featured'); // with() is used to prevent n+1 problem

        // $jobs = Job::all()->groupBy('featured');
        // return $jobs;
        // Output:
        // {
        //     "id": 1,
        //     "employer_id": 1,
        //     "title": "Soil Scientist OR Plant Scientist",
        //     "salary": "$90,000 USD",
        //     "location": "Remote",
        //     "schedule": "Full Time",
        //     "url": "http://www.dietrich.com/",
        //     "featured": 0,
        //     "created_at": "2024-12-31T11:17:42.000000Z",
        //     "updated_at": "2024-12-31T11:17:42.000000Z"
        // },

        return view('jobs.index', [
            // using groupBy, first array is full of entries that were 0, next are entries with featured: 1
            // so we're calling the first array
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            // $attributes['tags'] = strtolower(trim($attributes['tags']));

            // foreach (explode(',', $attributes['tags']) as $tag) {
            //     $tag = trim($tag);
            //     $job->tag($tag);
            // }
            $tags = array_map(function ($tag) {
                return trim(strtolower($tag)); // Convert to lowercase and trim each tag
            }, explode(',', $attributes['tags']));

            foreach ($tags as $tag) {
                $job->tag($tag);
            }


        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
