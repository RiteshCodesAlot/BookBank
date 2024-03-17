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
                        <h3 class="fs-4 text-left">DAMAGE/LOST BOOK FORM</h3>
                        {{-- <div class= "mb-10 text-left">
                            <p>We appreciate your introduction to a potential new satisfied User..!</p>
                        </div> --}}
                        <form action="" id="damageForm" name="damageForm">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Book Name<span class="req">*</span></label>
                                    <input type="text" placeholder="Enter Book Name" id="damaged_book_name" name="damaged_book_name" class="form-control">
                                    <p></p>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Date of Issue<span class="req">*</span></label>
                                    <input type="date" id="issue_date" name="issue_date" class="form-control">
                                    <p></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="damage_loss">Check Damage/Lost</label>
                                <div class="col-md-6 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="damage_loss_checkbox" name="damage_loss_checkbox">
                                        <label class="form-check-label" for="damage_loss_checkbox">
                                            Damage
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="damage_loss_checkbox" name="damage_loss_checkbox">
                                        <label class="form-check-label" for="damage_loss_checkbox">
                                            Lost
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6  mb-4">
                                    <label for="" class="mb-2">Contact<span class="req">*</span></label>
                                    <input type="tel" placeholder="Enter Contact No " id="contact_no" name="contact_no" class="form-control">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="mb-2">Date & Time of Damage/Loss</label>
                                <input type="datetime-local" id="damage_loss_datetime" name="damage_loss_datetime" class="form-control">
                                <p></p>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Reason for Damage/Lost</label>
                                <textarea class="form-control" name="damage_loss_reason" id="damage_loss_reason" cols="5" rows="5" placeholder="Reason for Damage/Loss"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Damage/Loss Description</label>
                                <textarea class="form-control" name="damage_loss_description" id="damage_loss_description" cols="5" rows="5" placeholder="Description of Damage/Loss"></textarea>
                            </div>





                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mx-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
