@extends('front.layouts.app')

@section('main');

<section class="section-5 bg-2">
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
        <div class="row">
            <div class="col-lg-3">
                @include('front.sidebar')
            </div>
            <div class="col-lg-9">
                @include('front.message')
                <div class="card border-0 shadow mb-4 p-3">
                    <div class="card-body card-form">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fs-4 mb-1">Return Books</h3>
                            </div>
                            <div style="margin-top: -10px;">
                                <a href="" class="btn btn-primary">Donate a Book</a>
                            </div>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Center</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th> <!-- New column for action -->

                                    </tr>
                                </thead>
                                <tbody class="border-0">
                                    @if ($books->isNotEmpty())
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->id }}</td>
                                            <td>{{ $book->book_name }}</td>
                                            <td>{{ $book->book_author }}</td>
                                            <td>{{ $book->center->center_name }}</td>
                                            <td>{{ $book->category->category_name }}</td>                                            
                                            <td style="color: {{ $book->status == 1 ? 'green' : 'red' }}">
                                                {{ $book->status == 1 ? 'Available' : 'Not Available' }}
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Return</button> <!-- Issue button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                                
                            </table>
                        </div>
                        <div>
                            {{-- //for paginate(10);  --}}
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>

   
            </div>
        </div>
    </div>
</section>

@endsection

@section('customJs')
{{-- Alert & ajax to delete Jobs --}}
{{-- <script type="text/javascript">
function deleteJob(jobId) {
    if (confirm("Are you sure you want to delete?")) {
        $.ajax({
            url: '{{ route("account.deleteJob") }}',
            type: 'post',
            data: {jobId: jobId},
            dataType: 'json',
            success: function(response) {
                window.location.href='{{ route("account.myJobs") }}';
            }
        });
    }
}
</script> --}}
@endsection