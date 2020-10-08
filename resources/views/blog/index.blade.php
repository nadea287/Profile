{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">--}}
{{--    <title>My Blog</title>--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
{{--</head>--}}
{{--<body>--}}
{{--header--}}
{{--<section id="header">--}}
{{--    <div class="header first-container">--}}
{{--        <div class="nav-bar">--}}
{{--            <div class="brand">--}}
{{--                <a href="#hero"><h1><span>L</span>orem <span>I</span>psum</h1></a>--}}
{{--            </div>--}}
{{--            <div class="nav-list">--}}
{{--                <div class="hamburger"><div class="bar"></div></div>--}}
{{--                <ul class="nav-wrapper">--}}
{{--                    <li><a href="#hero" data-after="Home">Home</a></li>--}}
{{--                    <li><a href="#services" data-after="Services">Services</a></li>--}}
{{--                    <li><a href="#projects"data-after="Projects">Projects</a></li>--}}
{{--                    <li><a href="#about" data-after="About">About</a></li>--}}
{{--                    <li><a href="#contact" data-after="Contact">Contact</a></li>--}}
{{--                    <li><a href="{{ route('login') }}" data-after="Contact">Login</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@extends('layouts.bloglayout')
@section('content')
{{--end header--}}

{{--first section--}}
<section id="hero">
    <div class="hero first-container">
        <div>
            <h1>Lorem, <span></span></h1>
            <h1>ipsum dolor <span></span></h1>
            <h1>sit amet <span></span></h1>
            <div class="cta-wrapper">
                <a href="#projects" type="button" class="cta" data-aos="fade-left" data-aos-delay="2700">Prtofolio</a>
            </div>
        </div>
    </div>
    <a href="" class="arrow-up-wrapper-section">
{{--                <img src="{{ asset('/images/icons8-upward-arrow-64.png') }}" alt="" >--}}
                <i class="fa fa-chevron-up" aria-hidden="true" class="arrowup-btn"></i>
    </a>
</section>
{{--end first section--}}

{{--Start Service Section--}}
<section id="services">
    <div class="services first-container">
        <div class="service-top">
            <h1 class="section-title" data-aos="fade-left">serv<span>i</span>ces</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci atque earum explicabo id illum incidunt maxime mollitia nam necessitatibus quasi, ratione recusandae reprehenderit repudiandae, saepe similique velit voluptatem voluptates?</p>
        </div>
        <div class="service-bottom">
            <div class="service-item">
                <div class="icon">
                    {{--                    <img src="{{ asset('/images/icons8-services-50.png') }}" alt="">--}}
                    <img src="{{ asset('/images/icons8-automation-80.png') }}" alt="">
                </div>
                <h2>Lorem ipsum.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur dicta dolor eius eos, minus placeat repellat repellendus similique sint.</p>
            </div>
            <div class="service-item">
                <div class="icon">
                    <img src="{{ asset('/images/icons8-automation-80.png') }}" alt="">
                </div>
                <h2>Lorem ipsum.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur dicta dolor eius eos, minus placeat repellat repellendus similique sint.</p>
            </div>
            <div class="service-item">
                <div class="icon">
                    <img src="{{ asset('/images/icons8-automation-80.png') }}" alt="">
                </div>
                <h2>Lorem ipsum.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur dicta dolor eius eos, minus placeat repellat repellendus similique sint.</p>
            </div>
            <div class="service-item">
                <div class="icon">
                    <img src="{{ asset('/images/icons8-automation-80.png') }}" alt="">
                </div>
                <h2>Lorem ipsum.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur dicta dolor eius eos, minus placeat repellat repellendus similique sint.</p>
            </div>
        </div>
    </div>

</section>
{{--End Service Section--}}

{{--Projecy Section--}}
<section id="projects">
    <div class="projects first-container">
        <div class="projects-header">
            <h1 class="section-title" data-aos="fade-left">Recent <span>Projects</span></h1>
        </div>
        <div class="all-projects">
            <div class="project-item">
                <div class="project-info">
                    <h1>Project 1</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ex excepturi nemo obcaecati provident unde voluptas voluptatum! Aspernatur, maiores, molestiae?</p>
                </div>
                <div class="project-image">
                    <img src="{{ asset('/images/section.png') }}" alt="">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Project 2</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ex excepturi nemo obcaecati provident unde voluptas voluptatum! Aspernatur, maiores, molestiae?</p>
                </div>
                <div class="project-image">
                    <img src="{{ asset('/images/section.png') }}" alt="">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Project 3</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ex excepturi nemo obcaecati provident unde voluptas voluptatum! Aspernatur, maiores, molestiae?</p>
                </div>
                <div class="project-image">
                    <img src="{{ asset('/images/section.png') }}" alt="">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Project 4</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ex excepturi nemo obcaecati provident unde voluptas voluptatum! Aspernatur, maiores, molestiae?</p>
                </div>
                <div class="project-image">
                    <img src="{{ asset('/images/section.png') }}" alt="">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Project 5</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ex excepturi nemo obcaecati provident unde voluptas voluptatum! Aspernatur, maiores, molestiae?</p>
                </div>
                <div class="project-image">
                    <img src="{{ asset('/images/section.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{--End Projecy Section--}}

{{--Start About Section--}}
<section id="about">
    <div class="about first-container">
        <div class="column-left">
            <div class="about_image">
                <img src="{{ asset('/images/section.png') }}" alt="">
            </div>
        </div>
        <div class="column-right">
            <h1 class="section-title" data-aos="fade-left">Lorem <span>ipsum.</span></h1>
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem culpa, deserunt eligendi eveniet molestias mollitia natus nulla odio quam repellat repellendus veritatis. Animi atque beatae eum exercitationem ipsam magni!</p>
            <a href="" class="cta">Lorem ipsum.</a>
        </div>
    </div>
</section>
{{--End About Section--}}

{{--Start Contact Section--}}
<section id="contact">
    <div class="contact first-container">
        <div><h1 class="section-title" data-aos="fade-left">Contact <span>Info</span></h1></div>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="{{ asset('/images/android-50.png') }}" alt=""></div>
                <div class="contact-info">
                    <h1>Phone</h1>
                    <h2>+1 234 123 1234</h2>
                    <h2>+1 234 123 1234</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="{{ asset('/images/email-50.png') }}" alt=""></div>
                <div class="contact-info">
                    <h1>Email</h1>
                    <h2>info@email.com</h2>
                    <h2>info@email.com</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="{{ asset('/images/location-50.png') }}" alt=""></div>
                <div class="contact-info">
                    <h1>Address</h1>
                    <h2>Lorem ipsum dolor.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{--End Contact Section--}}

{{--Footer--}}
{{--<section id="footer">--}}
{{--    <div class="footer first-container">--}}
{{--        <div class="brand"><h1><span>L</span>orem <span>I</span>psum</h1></div>--}}
{{--        <h2>Lorem ipsum dolor sit amet.</h2>--}}
{{--        <div class="social-icon">--}}
{{--            <div class="social-item">--}}
{{--                <a href=""><img src="{{ asset('/images/facebook-24.png') }}" alt=""></a>--}}
{{--            </div>--}}
{{--            <div class="social-item">--}}
{{--                <a href=""><img src="{{ asset('/images/icons8-instagram-26.png') }}" alt=""></a>--}}
{{--            </div>--}}
{{--            <div class="social-item">--}}
{{--                <a href=""><img src="{{ asset('/images/icons8-twitter-24.png') }}" alt=""></a>--}}
{{--            </div>--}}
{{--            <div class="social-item">--}}
{{--                <a href=""><img src="{{ asset('/images/icons8-google-plus-circled-50.png') }}" alt=""></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <p>Copyright<span>&#169;</span><?php echo date("Y"); ?>. All rights reserved</p>--}}
{{--    </div>--}}
{{--</section>--}}
{{--End Footer--}}

{{--<script src="https://unpkg.com/aos@next/dist/aos.js"></script>--}}
@endsection
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
