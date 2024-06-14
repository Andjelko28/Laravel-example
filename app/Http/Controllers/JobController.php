<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view(
            'jobs.index',
            [
                'jobs' => $jobs
            ]
        );
    }


    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {

        // Validation
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('jobs');
    }

    public function edit(JOb $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // validate
        // authorize (On hold...)
        // update job
        // and persiste
        // redirect to the job page

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request(('salary'))
        ]);

        return redirect('/jobs/' . $job->id);

    }

    public function destroy(Job $job)
    {
        // autorize
        // delete the job
        // redirect

        $job->delete();

        return redirect('/jobs');
    }

}
