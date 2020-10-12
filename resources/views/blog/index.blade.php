@extends('layouts.bloglayout')
@section('content')
<section id="hero">
    <div class="hero first-container">
        <div>
            <h1>Lorem, <span></span></h1>
            <h1>ipsum dolor <span></span></h1>
            <h1>sit amet <span></span></h1>
            <div class="cta-wrapper">
                <a href="#projects" type="button" class="cta" data-aos="fade-left" data-aos-delay="2700">
                    Prtofolio
                </a>
            </div>
        </div>
    </div>
    <a href="" class="arrow-up-wrapper-section">
        <i class="fa fa-chevron-up" aria-hidden="true" class="arrowup-btn"></i>
    </a>
</section>
<section id="services">
    <div class="services first-container">
        <div class="service-top">
            <h1 class="section-title" data-aos="fade-left">serv<span>i</span>ces</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci atque earum explicabo id illum incidunt maxime mollitia nam necessitatibus quasi, ratione recusandae reprehenderit repudiandae, saepe similique velit voluptatem voluptates?</p>
        </div>
        <div class="service-bottom">
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
@endsection
