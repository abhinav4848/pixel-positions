<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jobs = Job::all()->groupBy('featured');
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
            'featuredJobs' => $jobs[0],
            'jobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
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
    public function update(UpdateJobRequest $request, Job $job)
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
