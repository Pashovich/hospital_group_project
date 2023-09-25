@extends('layouts.app')

@section('title', 'Medical Record')
@section('content')
    <div class="container">
        <!-- banner starts -->

        <section id="banner">
            <div class="banner-slider">
                <div class="banner-item bg1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <h1 class="mb-0 oswald-bold fs-40 text-uppercase text-white">Your health is</h1>
                                        <h2 class="mb-0 oswald-bold fs-60 text-uppercase text-white">Our priority</h2>
                                        <p class="mb-0 open-reg fs-13 text-white">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s</p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="#" class="cta-btn text-white oswald-med fs-16 text-uppercase">Make an
                                            appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="banner-item bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <h1 class="mb-0 oswald-bold fs-40 text-uppercase text-white">Your health is</h1>
                                        <h2 class="mb-0 oswald-bold fs-60 text-uppercase text-white">Our priority</h2>
                                        <p class="mb-0 open-reg fs-13 text-white">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s</p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="#" class="cta-btn text-white oswald-med fs-16 text-uppercase">Make an
                                            appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-item bg3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <h1 class="mb-0 oswald-bold fs-40 text-uppercase text-white">Your health is</h1>
                                        <h2 class="mb-0 oswald-bold fs-60 text-uppercase text-white">Our priority</h2>
                                        <p class="mb-0 open-reg fs-13 text-white">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s</p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="#" class="cta-btn text-white oswald-med fs-16 text-uppercase">Make an
                                            appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </section>

        <!-- banner ends -->

        <!-- about starts -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-img wow animate__animated animate__backInLeft">
                            <img src="images/about-img.png" class="img-fluid w-100" alt="about-image">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-text text-center wow animate__animated animate__backInRight">
                            <h3 class="mb-0 text-uppercase oswald-reg fs-30">About us</h3>
                            <p class="mb-0 open-reg fs-16">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptates consequatur
                                ratione pariatur! Minus eligendi aperiam rem esse nam cumque hic atque non nostrum
                                voluptatum repellendus
                                facilis eum, quo, mollitia, quos corporis veritatis assumenda deserunt. Est, aut iste unde
                                similique vel
                                ratione animi labore minus rerum voluptatum vitae ut sequi, ex dolores earum, asperiores
                                optio eius? Eligendi,
                                illo. Cupiditate repellat sed ea beatae sit nesciunt. Nulla at iusto repellat non odit
                                adipisci enim molestias
                                aliquid suscipit cum debitis dolore ipsa placeat, nihil consequatur totam facilis ipsam
                                voluptatibus praesentium
                                provident laudantium similique sequi? Illo quae quis molestiae doloremque adipisci,
                                cupiditate autem dolore.</p>
                            <div class="about-btn text-center">
                                <a class="cta-btn text-white oswald-med fs-16 text-uppercase"
                                    href="{{ route('about') }}">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about ends -->
    </div>
@endsection
