@extends('layouts.app')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">POST A JOB </h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li>Post A Job</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->

        <!-- contact area -->
        <div class="content-block">
            <!-- Submit Resume -->
            <div class="section-full bg-white submit-resume content-inner-2">
                <div class="container">

                    <form action="{{ route('post-job') }}" method="post">

                        @csrf

                        @include('inc.messages')

                        <div class="form-group mb-5">
                            <label>Job Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="The Job Title for this role">
                        </div>

                        <div class="form-group mb-5">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Your company name">
                        </div>

                        <div class="form-group mb-5">
                            <label>Job Description</label>
                            <textarea class="form-control" name="job_desc" placeholder="Job Description for this role">{{{ Request::old('job_desc') }}}</textarea>
                        </div>

                        <div class="form-group mb-5">
                            <label>Deadline (yyyy/mm/dd)</label>
                            <div>
                                <div class="input-group">
                                    <input type="text" name="deadline" class="form-control" value="{{ old('deadline') }}" placeholder="yyyy/mm/dd" data-provide="datepicker" data-date-autoclose="true">

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-5">
                            <label>Salary (in US$)</label>
                            <input type="text" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Salary for this role">
                        </div>

                        <div class="form-group mb-5">
                            <label>Salary Label</label>
                            <select name="salary_label">
                                <option>Hourly</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                                <option>Annually</option>
                            </select>
                        </div>

                        <div class="form-group mb-5">
                            <label>Job Type</label>
                            <select name="job_type">
                                <option>Full time</option>
                                <option>Part time</option>
                                <option>Contract</option>
                            </select>
                        </div>

                        <div class="form-group mb-5">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Address of work">
                        </div>

                        <div class="form-group mb-5">
                            <label>Qualifications</label>
                            <input type="text" name="qualifications" class="form-control" value="{{ old('qualifications') }}" placeholder="Must have Qualifications for this role">
                        </div>

                        <div class="form-group mb-5">
                            <label>Experience (in years)</label>
                            <input type="text" name="experience" class="form-control" value="{{ old('experience') }}" placeholder="Experience needed for this role">
                        </div>

                        <div class="form-group mb-5">
                            <label>Job Requirements</label>
                            <textarea class="form-control" name="requirements" placeholder="Job Requirements for this role">{{{ Request::old('requirements') }}}</textarea>
                        </div>

                        <div class="form-group mb-5">
                            <label>Job Benefits</label>
                            <textarea class="form-control" name="benefits" placeholder="Job Benefits for this role">{{{ Request::old('benefits') }}}</textarea>
                        </div>

                        <div class="form-group mb-5">
                            <label>Numbers of Hires for this role</label>
                            <input type="text" name="number_of_hires" class="form-control" value="{{ old('number_of_hires') }}" placeholder="Numbers of Hires for this role">
                        </div>

                        <div class="form-group mb-5">
                            <label>Work Schedule</label>
                            <input type="text" name="schedule" value="{{ old('schedule') }}" class="form-control" placeholder="The expected Work Schedule">
                        </div>

                        <div class="form-group mb-5">
                            <label>Application Questions</label>
                            <textarea class="form-control" name="application_qns" placeholder="Application Questions for this role">{{{ Request::old('application_qns') }}}</textarea>
                        </div>

                        <div class="form-group mb-5">
                            <label>Education Level</label>
                            <input type="text" name="education" value="{{ old('education') }}" class="form-control" placeholder="Highest Education Level preferred">
                        </div>

                        <div class="form-group mb-5">
                            <label>Work Location</label>
                            <input type="text" name="work_location" value="{{ old('work_location') }}" class="form-control" placeholder="Work Location for this role">
                        </div>

                        <button type="submit" class="site-button">POST JOB</button>

                    </form>
                </div>
            </div>
            <!-- Submit Resume END -->
        </div>
    </div>
    <!-- Content END-->

@endsection
