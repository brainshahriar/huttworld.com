@extends('backend.index')
@section('content')
    
<div class="page-wrapper">
    <div class="page-content">

              <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">All Packages</h5>
                        </div>
                        <button style="margin-left: 5%"  class="btn btn-sm btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add</button>
                    @include('backend.pages.package.packageaddmodal')
                    </div>
                    <hr>
                    <div class="table-responsive">
                        @foreach ($package as $key=>$item)
  
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>Place</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="{{ $item->image }}" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->location }}</td>
                                     <td>{{ $item->place }}</td>
                                    <td>{{ $item->title }}</td>
                                  <td>{{ $item->duration }} Days</td>
                                  <td>
                                    <a href="" class="btn btn-primary btn-sm" title="Edit Data">Edit</a>
                                    <a href="{{ url('/package/delete/'.$item->id) }}" class="btn btn-danger btn-sm" title="delete data" id="delete">Delete</a>
                                </td>   
                                </tr>
                            </tbody>
                        </table>
                                                  
                        @endforeach
                    </div>
                </div>
            </div>

    </div>
</div>


@endsection