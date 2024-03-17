@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-3">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('account.centers') }}">Home</a></li>
                            <li class="breadcrumb-item active">Account Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="py-lg-2">&nbsp;</div>
            <div class="col-lg-12">
                <div class="card border-0 shadow mb-4 ">
                    <div class="card-body card-form p-4">
                        <h3 class="fs-4 text-left">REFERRAL FORM</h3>
                        <div class= "mb-10 text-left">
                            <p>We appreciate your introduction to a potential new satisfied User..!</p>
                        </div>
                        <form action="" id="refferalForm" name="refferalForm">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">First Name<span class="req">*</span></label>
                                <input type="text" placeholder="Enter First Name" id="first_name" name="first_name" class="form-control">
                                <p></p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Last Name<span class="req">*</span></label>
                                <input type="text" placeholder="Enter Last Name" id="last_name" name="last_name" class="form-control">
                                <p></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Email<span class="req">*</span></label>
                                <input type="email" placeholder="Enter Email" id="email" name="email"
                                    class="form-control">
                                <p></p>
                            </div>
                            <div class="col-md-6  mb-4">
                                <label for="" class="mb-2">Contact<span class="req">*</span></label>
                                <input type="tel" placeholder="Enter Contact No " id="contact_no" name="contact_no"
                                    class="form-control">
                                <p></p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="" class="mb-2">Message</label>
                            <textarea class="form-control" name="message" id="message" cols="5"
                                rows="5" placeholder="Your Message"></textarea>
                        </div>

                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mx-3">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection