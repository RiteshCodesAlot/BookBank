@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-3">
        <div class="container py-5">
            <div class="py-lg-2">&nbsp;</div>
            <div class="col-lg-12">
                @include('front.message')
                <form action="" method="POST" name="donationForm" id="donationForm">
                    <div class="card border-0 shadow mb-4 ">
                    <div class="card-body card-form p-4">
                        <h1 class="fs-4 mb-1">Book Donation</h1>
                            {{-- <h3 class="fs-4 mb-1 mt-5 border-top pt-5">Book Donation</h3> --}}
                            <div class="row">
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Book Name<span class="req">*</span></label>
                                    <input type="text" placeholder="Enter Book Name" id="donated_book_name" name="donated_book_name"
                                        class="form-control">
                                        <p></p>
                                </div>
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Donor Name<span class="req">*</span></label>
                                    <input type="text" placeholder="Enter Donor Name" id="donor_name" name="donor_name"
                                        class="form-control">
                                        <p></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Author<span class="req">*</span></label>
                                    <input type="text" placeholder="Enter Author Name" id="donated_author" name="donated_author"
                                        class="form-control">
                                        <p></p>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Category<span class="req">*</span></label>
                                    @if ($categories->isNotEmpty())
                                    <select name="donated_category" id="donated_category" class="form-control">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                    <p></p>
                                </div>  
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Select Center<span class="req">*</span></label>
                                    @if ($centers->isNotEmpty())
                                    <select name="donated_center" id="donated_center" class="form-control">
                                        @foreach ($centers as $center)
                                        <option value="{{ $center->id }}">{{ $center->center_name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                    <p></p>
                                </div>

                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Date</label>
                                    <input type="date" placeholder="Select Date" id="donated_date" name="donated_date"
                                        class="form-control">
                                        <p></p>
                                </div>
                            </div>
                            
                            <div class="card-footer  p-4">
                                <button type="submit" class="btn btn-primary">Donate</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
<script type="text/javascript">

$("#donationForm").submit(function(e){
        e.preventDefault();

        $.ajax({
            url: '{{ route('account.donationProcess') }}',
            method: 'POST',
            data: $("#registrationForm").serializeArray(),
            dataType: 'json',
            success: function(response){
                if(response.status == false){
                    var errors = response.errors;
                    if(errors.donated_book_name){
                        $('#donated_book_name').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donated_book_name)
                    } else{
                        $('#donated_book_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                    if(errors.donor_name){
                        $('#donor_name').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donor_name)
                    } else{
                        $('#donor_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                    if(errors.donated_author){
                        $('#donated_author').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donated_author)
                    } else{
                        $('#donated_author').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                    if(errors.donated_category){
                        $('#donated_category').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donated_category)
                    } else{
                        $('#donated_category').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                    if(errors.donated_center){
                        $('#donated_center').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donated_center)
                    } else{
                        $('#donated_center').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                    if(errors.donated_date){
                        $('#donated_date').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.donated_date)
                    } else{
                        $('#donated_date').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }

                } else {
                    $('#donated_book_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    $('#donor_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    $('#donated_author').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    $('#donated_category').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    $('#donated_center').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    $('#donated_date').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    window.location.href = "{{ route('account.login') }}";
                }
            }
        });
    });



// $("#donationForm").submit(function(e){
//     e.preventDefault();
//     $("button[type='submit']").prop('disabled', true)
//     $.ajax({
//         url: '{{ route("account.donationProcess") }}',
//         type: 'POST',
//         dataType: 'json',
//         data: $("#createJobForm").serializeArray(),
//         success: function(response) {
//             $("button[type='submit']").prop('disabled', false)

//             if (response.status == true) {

//                 $('#donated_book_name').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 $('#donor_name').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 $('#donated_author').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 $('#donated_category').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 $('#donated_center').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 $('#donated_date').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html('')

//                 window.location.href = "{{ route('account.donationProcess') }}";

                
//             } else {
//                 var errors = response.errors;

//                 if(errors.donated_book_name){
//                     $('#donated_book_name').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donated_book_name)
//                 } else{
//                     $('#donated_book_name').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }

//                 if(errors.donor_name){
//                     $('#donor_name').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donor_name)
//                 } else{
//                     $('#donor_name').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }

//                 if(errors.donated_author){
//                     $('#donated_author').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donated_author)
//                 } else{
//                     $('#donated_author').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }

//                 if(errors.donated_category){
//                     $('#donated_category').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donated_category)
//                 } else{
//                     $('#donated_category').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }
                
//                 if(errors.donated_center){
//                     $('#donated_center').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donated_center)
//                 } else{
//                     $('#donated_center').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }

//                 if(errors.donated_date){
//                     $('#donated_date').addClass('is-invalid')
//                     .siblings('p')
//                     .addClass('invalid-feedback')
//                     .html(errors.donated_date)
//                 } else{
//                     $('#donated_date').removeClass('is-invalid')
//                     .siblings('p')
//                     .removeClass('invalid-feedback')
//                     .html()
//                 }
//             }
//         }
//     });
// });
</script>
@endsection