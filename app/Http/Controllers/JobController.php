<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\StoreJobRequest;
use App\Http\Requests\Job\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('dashboard.jobs.index_jobs');
    }


    public function create()
    {

        return view('dashboard.jobs.create_job');
    }


    public function store(StoreJobRequest $request)
    {
        Job::create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return to_route('dashboard.jobs.index');
    }

    public function show(Job $job)
    {
        return view('job', compact('job'));
    }
    public function edit(Job $job)
    {
        return view('dashboard.jobs.edit_job', ['job' => $job]);
    }


    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return to_route('dashboard.jobs.index');
    }


    public function destroy(Job $job)
    {
        $job->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.jobs.index');
    }

    public function apply($id)
    {
        $job = Job::find($id);
        $job->users()->attach(auth()->guard('web')->user()->id);
        session()->flash('success', __('site.aplied_successfully'));
        return back();
    }

    public function show_candidates($id)
    {
        $job = Job::with('users')->find($id);
        return view('dashboard.jobs.show_job_candidates' , compact('job'));
    }
}
