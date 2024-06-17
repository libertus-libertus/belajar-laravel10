@extends('components.app')
@section('title', 'Contact Page')
@section('content')

    <div class="contact-us my-5 py-5 jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-6" data-aos="fade-right">
                    <div class="contact-header">
                        <h5>Contact Us</h5>
                        <span>Subheading for description or instructions</span>
                    </div>
                    <div class="form-deskripsi mt-3">
                        <form action="">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Jane">
                                    </div>
                                    <div class="col">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Smitherton">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="emailAddress">Email Address</label>
                                <input type="text" class="form-control" id="emailAddress" placeholder="email@janesfakedomain.net">
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Enter your question or message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-dark w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6" data-aos="fade-left">
                    <div class="contact-img">
                        <img src="{{ asset('assets/img/img7.png') }}" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
