@extends('front.layouts.app')

@section('main');

{{-- <!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CareerVibe | Find Best Jobs</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">Book Bank System</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html">Home</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="jobs.html">About us</a>
					</li>										
				</ul>				
				<a class="btn btn-outline-primary me-2" href="login.html" type="submit">Login</a>
			
			</div>
		</div>
	</nav>
</header> --}}
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                @include('front.sidebar') 
            </div>
            
                <div class="col-md-8 col-lg-9 ">
                    <div class="job_listing_area">                    
                        <div class="job_lists">
                            <div class="row">

                                @foreach($centers as $center)
                                    <div class="col-md-4">
                                        <div class="card border-0 p-3 shadow mb-4">
                                            <div class="card-body">
                                                <div class="bg-light p-3 border">
                                                    <h3 class="border-0 fs-5 pb-2 mb-0">{{ $center->center_name }}</h3>
                                                    <p>Address: {{ $center->center_address }}</p>
                                                </div>
                                                {{-- <div class="d-grid mt-3">
                                                    <!-- You can add a link to view center details if needed -->
                                                    <a href="" class="btn btn-primary btn-lg">Select Center</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
                            {{-- <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">Kothrud</h3>
                                        <p>Address:Near central garden,Kothrud ,Pune</p>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <a href="job-detail.html" class="btn btn-primary btn-lg">select center</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="card border-0 p-3 shadow mb-4">
                                        <div class="card-body">
                                            <div class="bg-light p-3 border">
                                            <h3 class="border-0 fs-5 pb-2 mb-0">Narayan Peth</h3>
                                            <p>Address:T-2,sector 27,Narayan Peth,Pune</p>
                    
                                            </div>
        
                                            <div class="d-grid mt-3">
                                                <a href="job-detail.html" class="btn btn-primary btn-lg">select center</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                

                                <div class="col-md-4">
                                    <div class="card border-0 p-3 shadow mb-4">
                                        <div class="card-body">
                                            <div class="bg-light p-3 border">
                                            <h3 class="border-0 fs-5 pb-2 mb-0">Karve Nagar</h3>
                                            <p>Address:Opp to cream craver,Karve Nagar,Pune.</p>
                                            
                                               
                                            </div>
        
                                            <div class="d-grid mt-3">
                                                <a href="job-detail.html" class="btn btn-primary btn-lg">select center</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="card border-0 p-3 shadow mb-4">
                                            <div class="card-body">
                                                <div class="bg-light p-3 border">
                                                <h3 class="border-0 fs-5 pb-2 mb-0">Nigdi</h3>
                                                <p>Address:Pradhikaran ,Nigdi ,Pune.</p>        
                                                </div>
            
                                                <div class="d-grid mt-3">
                                                    <a href="job-detail.html" class="btn btn-primary btn-lg">select center</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    
                                    

                                    
                                        <div class="col-md-4">
                                            <div class="card border-0 p-3 shadow mb-4">
                                                <div class="card-body">
                                                    <div class="bg-light p-3 border">
                                                    <h3 class="border-0 fs-5 pb-2 mb-0">Baner</h3>
                                                    <p>Address:Near Birla hospital,Baner,Pune.</p>        
                                                    </div>
                
                                                    <div class="d-grid mt-3">
                                                        <a href="job-detail.html" class="btn btn-primary btn-lg">select center</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>        --}}
</section>
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div> --}}
@endsection
{{-- <footer class="bg-dark py-3 bg-2">
<div class="container">
    <p class="text-center text-white pt-3 fw-bold fs-6">©2024 bookbank ,all right reserved</p>
</div>
</footer> 
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.5.1.3.min.js"></script>
<script src="assets/js/instantpages.5.1.0.min.js"></script>
<script src="assets/js/lazyload.17.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html> --}}