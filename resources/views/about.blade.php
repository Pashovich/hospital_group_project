@extends('layouts.app')

@section('title', 'About Us')
@section('content')
    <div class="container">

        <!-- banner starts -->
        <section id="banner">
            <div class="banner-slider">
                <div class="banner-item bg4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content text-center">
                                    <div class="banner-text">
                                        <h1 class="mb-0 oswald-bold fs-40 text-uppercase text-white">Your health is</h1>
                                        <h2 class="mb-0 oswald-bold fs-60 text-uppercase text-white">Our priority</h2>
                                        <p class="mb-0 open-reg fs-13 text-white">We ensure patient safety and quality of care as per international standard. 
                                        We always try to adhere with legal compliance and give priority on employee health safety.</p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="{{ route('schedule') }}" class="cta-btn text-white oswald-med fs-16 text-uppercase">Make an
                                            appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner ends -->

        <!-- about starts -->
        <section id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-text text-center wow animate__animated animate__zoomIn animate__repeat-2">
                            <h4 class="mb-0 text-uppercase oswald-reg fs-30">Welcom to know us</h4>
                            <p class="mb-0 open-reg fs-16">we are dedicated to a singular mission that providing exceptional 
                                healthcare with compassion, expertise, and innovation. We are serving our community  with 
                                standard for excellence in healthcare.

                                Our mission is simple yet profound to enhance the well-being of our patients and community by 
                                delivering comprehensive, patient-centered care. We are guided by a set of core values that include:</p>
                            <p class="mb-0 open-reg fs-16">We treat each patient with empathy and respect, understanding 
                                the unique challenges they face. 

                                We are committed to achieving the highest standards in medical care, continuously 
                                improving our services, and staying at the forefront of medical advancements.

                                We actively engage with and support our community, promoting health and well-being beyond 
                                our hospital walls.

                                Patient safety is our top priority. We adhere to rigorous safety protocols and industry best 
                                practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about ends -->

    </div>
@endsection
