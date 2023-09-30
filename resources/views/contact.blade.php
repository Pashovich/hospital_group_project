@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')
    <div class="container">

        <!-- contact form starts -->
        <section id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="contact-title oswald-bold">
                            <h1>Contact Us</h1>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Your Full Name" value="{{ old('name') }}" required id="uName">
                                    <small id="uNameErr"></small>
                                </div>

                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required id="uEmail">
                                    <small id="uEmailErr"></small>
                                </div>

                                <div class="input-group">
                                    <input type="tel" name="phone" placeholder="Your Phone Number" value="{{ old('phone') }}" required id="utel">
                                    <small id="utelErr"></small>
                                </div>

                                <div class="input-group">
                                    <textarea type="text" name="massage" placeholder="Your Message" required id="uNamemesstextarea">{{ old('message') }}</textarea>
                                    <small id="messErr"></small>
                                </div>

                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- contact form ends -->
    </div>
@endsection
