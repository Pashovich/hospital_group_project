@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <div class="container">

        <!-- banner starts -->
        <section id="banner">
            <div class="banner-slider">
                <div class="banner-item bg5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content text-center">
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
            </div>
        </section>
        <!-- banner ends -->

        <!--  login part starts -->

        <section id="loginpart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 loginpart">
                        <div class="loginpart-content">
                            <div class="loginpart-item">
                                <h2 class="mb-0 text-center text-uppercase oswald-reg fs-30">Patients Login</h2>
                                <p class="mb-0 open-reg fs-16 text-center text-capitalize">Register & Book Appointment</p>
                                <div class="loginpart-btn text-center">
                                    <a class="cta-btn text-white oswald-med fs-16 text-uppercase b-radius"
                                        href="#">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 loginpart">
                        <div class="loginpart-content">
                            <div class="loginpart-item">
                                <h2 class="mb-0 text-center text-uppercase oswald-reg fs-30">Doctors Login</h2>
                                <p class="mb-0 open-reg fs-16 text-center text-capitalize">Get Details</p>
                                <div class="loginpart-btn text-center">
                                    <a class="cta-btn text-white oswald-med fs-16 text-uppercase b-radius"
                                        href="#">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 loginpart">
                        <div class="loginpart-content">
                            <div class="loginpart-item">
                                <h2 class="mb-0 text-center text-uppercase oswald-reg fs-30">Admin Login</h2>
                                <p class="mb-0 open-reg fs-16 text-center text-capitalize">Update details</p>
                                <div class="loginpart-btn text-center">
                                    <a class="cta-btn text-white oswald-med fs-16 text-uppercase b-radius"
                                        href="#">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- login part ends -->

    </div>
@endsection
