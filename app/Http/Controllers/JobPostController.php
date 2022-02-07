<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{

    public function browseCandidates()
    {
        return view('employers.browse-candidates');
    }

    public function index()
    {
        return view('employers.jobs.create');
    }


    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'company_name' => 'required',
            'job_desc' => 'required',
            'deadline' => 'nullable|date',
            'salary' => 'nullable|integer',
            'salary_label' => 'nullable',
            'job_type' => 'required',
            'address' => 'nullable|string',
            'qualifications' => 'required',
            'experience' => 'required',
            'requirements' => 'required',
            'benefits' => 'nullable|string',
            'number_of_hires' => 'nullable|integer',
            'schedule' => 'required',
            'application_qns' => 'nullable|string',
            'education' => 'nullable|string',
            'work_location' => 'required',
        ]);


        // Storing
        $request->user()->jobposts()->create([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'job_desc' => $request->job_desc,
            'deadline' => $request->deadline,
            'salary' => $request->salary,
            'salary_label' => $request->salary_label,
            'job_type' => $request->job_type,
            'address' => $request->address,
            'qualifications' => $request->qualifications,
            'experience' => $request->experience,
            'requirements' => $request->requirements,
            'benefits' => $request->benefits,
            'number_of_hires' => $request->number_of_hires,
            'schedule' => $request->schedule,
            'application_qns' => $request->application_qns,
            'education' => $request->education,
            'work_location' => $request->work_location,
        ]);

        return redirect()->route('view-job')->with('success', 'Job Post Created Successfully!');
    }


    public function show()
    {
        $jobs = JobPost::where('user_id', auth()->user()->id)->paginate(10);
        return view('employers.jobs.read', [
            'jobs' => $jobs,
        ]);
    }


    public function details(JobPost $job)
    {
        return view('employers.jobs.details', [
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
