@extends('layouts.layout')  

@section('content')

  <!-- Header Start -->
  <div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5 bg-info">
        <h1 class="text-primary mb-4">Ahmad Faiz Bin Daud</h1>
        <h1 class="text-white display-3 mb-5">Aspiring Web Developer</h1>
        <div class="mx-auto" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                <div class="input-group-append">
                    <button class="btn btn-primary px-3">Track & Trace</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/about.jpg" alt="">
                <div class="bg-primary text-dark text-center p-4">
                    <h3 class="m-0">25+ Years Experience</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">About Me</h6>
                <h1 class="mb-4">In search for Opportunities</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <div class="d-flex align-items-center pt-2">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span>Details</span>
                    </button>
                    <button type="button" class="btn-play" data-toggle="modal"
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
<!-- About End -->

<!-- Pricing Plan Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Development</h6>
            <h1 class="mb-4">Relevant Skills</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Back-End</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">See Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Front-End</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">See Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Mobile</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">See Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

<!--  Quote Request Start -->
<div class="container-fluid my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                <h1 class="mb-4">Experience</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary py-5 px-4 px-sm-5">
                    <h1 class="mb-4">Education</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote Request Start -->


<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Online</h6>
            <h1 class="mb-4">Sample Projects</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-store text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Contact</h6>
            <h1 class="mb-4">Let's Get to Know Each Other</h1>
        </div>
        <div class="row pb-3 justify-content-center">
            <div class="col-8 contact-form bg-secondary" style="padding: 30px;">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                            required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                            Message</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- Services End -->




@endsection