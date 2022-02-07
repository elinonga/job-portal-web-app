@extends('layouts.app')

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">

        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li>Job Detail</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->

        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
            <div class="section-full content-inner-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sticky-top">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="m-b30">
                                            <img src="{{ asset('assets/images/blog/grid/pic1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                            <h4 class="text-black font-weight-700 p-t10 m-b15">Job Details</h4>
                                            <ul>
                                                <li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Address</strong><span class="text-black-light"> {{ $job->address }} </span></li>
                                                <li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong> ${{ $job->salary }} {{ $job->salary_label }}</li>
                                                <li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience</strong>{{ $job->experience }} Year Experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="job-info-box">


                                <h3 class="m-t0 m-b10 font-weight-700 title-head">
                                    <a href="#" class="text-secondry m-r30">{{ $job->title }}</a>
                                </h3>


                                <ul class="job-info">
                                    <li><strong>Company:</strong> {{ $job->company_name }} </li>
                                    <li><strong>Deadline:</strong> {{ $job->deadline }} </li>
                                    <li><i class="ti-location-pin text-black m-r5"></i> {{ $job->address }} </li>
                                </ul>


                                <h5 class="font-weight-600 mt-5">Job Description</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <p> {{ $job->job_desc }} </p>


                                <h5 class="font-weight-600 mt-5">Qualifications</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <p> {{ $job->qualifications }} </p>


                                <h5 class="font-weight-600 mt-5">More Details</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <ul class="job-info">
                                    <li><strong>Number of hires:</strong> {{ $job->number_of_hires }} </li>
                                    <li><strong>Schedule:</strong> {{ $job->schedule }} </li>
                                    <li><strong>Work Location:</strong> {{ $job->work_location }} </li>
                                </ul>


                                <h5 class="font-weight-600 mt-5">Job Requirements</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <p> {{ $job->requirements }} </p>


                                <h5 class="font-weight-600 mt-5">Benefits</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <p> {{ $job->benefits }} </p>


                                <h5 class="font-weight-600 mt-5">Application Questions</h5>
                                <div class="dez-divider divider-2px bg-gray-dark mb-2 mt-0"></div>
                                <p> {{ $job->application_qns }} </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Job Detail -->

            <!-- More Jobs -->
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="{{ asset('assets/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                    <div class="dez-post-readmore">
                                        <a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="{{ asset('assets/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                    <div class="dez-post-readmore">
                                        <a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="{{ asset('assets/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                    <div class="dez-post-readmore">
                                        <a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="{{ asset('assets/images/blog/grid/pic4.jpg') }}" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                    <div class="dez-post-readmore">
                                        <a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Jobs END -->

        </div>
    </div>
    <!-- Content END-->

@endsection
