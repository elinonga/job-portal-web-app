@extends('layouts.app')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">My Jobs</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li>My Jobs</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Browse Jobs -->
            <div class="section-full bg-white browse-job content-inner-2">
                <div class="container">
                    <div class="row">

                        @include('inc.messages')

                        <div class="col-xl-12 col-lg-12">
                            <h5 class="widget-title font-weight-700 text-uppercase">Recent Jobs</h5>
                            <ul class="post-job-bx">

                                @if($jobs->count())

                                @foreach($jobs as $job)
                                    <li>
                                    <a href="{{ route('view-job.details', $job->id) }}">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img src="{{ asset('assets/images/logo/icon1.png') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4>{{ $job->title }}</h4>
                                                <ul>
                                                    <li><i class="fa fa-map-marker"></i> {{ $job->address }}</li>
                                                    <li><i class="fa fa-bookmark-o"></i> {{ $job->job_type }} </li>
                                                    <li><i class="fa fa-clock-o"></i> Published {{ $job->created_at->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time mr-auto">
                                                <span>{{ $job->job_type }}</span>
                                            </div>
                                            <div class="salary-bx">
                                                <span>${{ $job->salary }} {{ $job->salary_label }}</span>
                                            </div>
                                        </div>
                                        <span class="post-like fa fa-heart-o"></span>
                                    </a>
                                </li>
                                @endforeach

                                <!-- For Pagination -->
                                {{ $jobs->links() }}

                                @else
                                    <p>You haven't posted any job posts!</p>
                                @endif

                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Browse Jobs END -->
        </div>
    </div>
    <!-- Content END-->

@endsection
