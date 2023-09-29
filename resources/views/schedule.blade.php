@extends('layouts.app')

@section('title', 'Doctor\'s Schedule')
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
                                        <p class="mb-0 open-reg fs-13 text-white">We ensure patient safety and quality of care as per international standard. 
                                        We always try to adhere with legal compliance and give priority on employee health safety.</p>
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
                                        <p class="mb-0 open-reg fs-13 text-white">We ensure patient safety and quality of care as per international standard. 
                                        We always try to adhere with legal compliance and give priority on employee health safety.</p>
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
                                        <p class="mb-0 open-reg fs-13 text-white">We ensure patient safety and quality of care as per international standard. 
                                        We always try to adhere with legal compliance and give priority on employee health safety.</p>
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
                            <p class="mb-0 open-reg fs-16">Excellence through innovation is the central concept of our vision. 
                                Together with the concept customer satisfaction with persistent relationship is the DNA of our 
                                corporate culture. This vision helps us to find the driving way. In a competitive and fast changing 
                                world, the business dynamics are constantly changing. Today only innovation can bring excellence 
                                and add value to products and services that can satisfy our customers.</p>
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
