@extends('layouts.master')

@section('content')

    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center" style="color: #494949">
            <h1 class="mb-1">Tech Aayam</h1>
            <h3 class="mb-5"><em>Are you looking for a quality solution at an affordable price?</em></h3>
            <a class="btn btn-outline-dark btn-xl" href="#about">Lets Explore<br>
            <i class="fa fa-arrow-down"></i>
            </a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>About TechAayam</h2>
                    <p class="lead mb-5">
                        TechAayam started with the purpose to contribute to the IT sector of Nepal and to provide quality IT services and supports. We have the ability to understand the requirements of your company, configure features and functions according to your needs and bring them to fruition.
                    </p>
                    <p class="lead mb-5 hide" id="hidden_section">
                        These days, IT goes further than just simply understanding, deploying and managing. We understand that today, businesses face modern pressure to adapt to the new changes for you to stay ahead in the game. We not only create platforms ready for your company to change into but also re-evaluate to match the pace of change around you. We don’t just fix your present day's barriers but we think ahead and plan for your tomorrow.<br><br>

                        Our team provide services such as Web Development, Software Development, Graphic Design, IT Support, IT Training and Digital Marketing to take your business in new heights on the internet. We are always looking for new innovations and innovative ideas with our creative and skilled team, to provide you with the best from our side.<br><br>

                        Team TechAayam believes in providing quality service and client satisfaction more than anything.<br><br>
                    </p>
                    <a class="btn btn-dark btn-xl" id='show_button' href="#about" onclick="showHidden()">Learn More</a>
                    <a class="btn btn-dark btn-xl hide" id='hide_button' href="#about" onclick="hideHidden()">Show Less</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text mb-0">Services</h3>
                <h2 class="mb-5">What We Offer</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                    <h4><strong>Responsive Design</strong></h4>
                    <p class="text-faded mb-0">Make your content look fabulous in all screen sizes!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa fa-flask"></i></span>
                    <h4><strong>Research</strong></h4>
                    <p class="text-faded mb-0">Our team will research your needs and provide you the optimal solution.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                    <h4><strong>Support</strong></h4>
                    <p class="text-faded mb-0">
                        We care for our customers
                        <i class="fas fa-heart"></i>
                        Therefore, you can expect excellent support from us.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-star"></i></span>
                    <h4><strong>Quality</strong></h4>
                    <p class="text-faded mb-0">You can rest assured our skilled team will deliver on your expectations.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <section class="callout" id="portfolio">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mx-auto mb-5">
                Stay Upadted on
                <em>Our</em>
                Work!
            </h2>
            <a class="btn btn-dark btn-xl" href="#projects">View</a>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="projects">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text mb-0">Portfolio</h3>
                <h2 class="mb-5">Our Projects</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Development</div>
                                <p class="mb-0">We will provide you with a complete solution for all your software needs.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/development.png') }}"/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Trade</div>
                                <p class="mb-0">Looking to upgrade your tech and get ahead of the competition? Well, look no further!</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/trade.png') }}"/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Digital Education</div>
                                <p class="mb-0">In this growing digital world Tech Aaayam is eager to help the nation digitize.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/education.png') }}"/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Media and Publication</div>
                                <p class="mb-0">Looking to grow your business? Stand out from the crowd with Tech Aayam.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/multimedia.png') }}"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="content-section bg-primary text-white" id="contact">
        <div class="container col-sm-6">
            <h2 class="mb-4 text-center">Lets get in touch!</h2>
            <div class="row">
                <form class="form">
                    <div class="form-group">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Contact</label>
                        <input type="text" class="form-control" id="contact" placeholder="(+977) 989955****">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Message</label>
                        <textarea type="text" class="form-control" id="message" rows="5" placeholder="Your Message Here!"></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-dark ">Send <i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!-- Map-->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.3728114568428!2d83.97276690705158!3d28.20988523259445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595d8f03aec87%3A0x8894aaa7966613ea!2sTechAayam%20Nepal!5e0!3m2!1sen!2snp!4v1635521202039!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        <br />
        <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
    </div>

    <script>
        function showHidden() {
            var section = document.getElementById("hidden_section");
            var show = document.getElementById("show_button");
            var hide = document.getElementById("hide_button");
            section.classList.remove("hide");
            show.classList.add("hide");
            hide.classList.remove("hide");
        }
        function hideHidden() {
            var section = document.getElementById("hidden_section");
            var show = document.getElementById("show_button");
            var hide = document.getElementById("hide_button");
            section.classList.add("hide");
            show.classList.remove("hide");
            hide.classList.add("hide");
        }

    </script>
@endsection
