@extends('layouts.layout')



@section('content')

{{-- <div class="container">
    <div class="row py-2 my-4">
        <div class="col-12 text-center py-2 my-4">
            <h1>Who I am?</h1>
            <div class="row">
                <div class="col-4">
                    <img src="{{URL::asset('/images/faiz-passport.jpg')}}" alt="profile Pic" height="200" width="200">
                </div>
                <div class="col-8">
                    <p>I am an aspiring Web developer</p>
                </div>
            </div>

        </div>
    </div>
</div> --}}
 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0 text-center">
                <img class="img-fluid w-50" src="{{URL::asset('/images/faiz-passport.jpg')}}" alt="profile Pic" height="350" width="350">   
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">About Me</h6>
                <h1 class="mb-4">Aspiring Web Developer</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <div class="d-flex align-items-center pt-2">
                    <button type="button" class="btn" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span>Download Resume</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-10 text-center my-4">
        <h4>Web Development Career Timeline</h4>
        </div>
        <div class="col-md-10 my-4">
            <div class="main-timeline4">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="year">2018</span>
                        <div class="inner-content">
                            <h3 class="title">Web Designer</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="year">2017</span>
                        <div class="inner-content">
                            <h3 class="title">Web Developer</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="year">2016</span>
                        <div class="inner-content">
                            <h3 class="title">Web Designer</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="year">2015</span>
                        <div class="inner-content">
                            <h3 class="title">Web Developer</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection