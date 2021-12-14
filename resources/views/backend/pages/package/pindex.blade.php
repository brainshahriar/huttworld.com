@extends('backend.index')
@section('content')
    
<div class="page-wrapper">
    <div class="page-content">

              <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Popular Packages</h5>
                        </div>
                        <button style="margin-left: 5%"  class="btn btn-sm btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#pexampleVerticallycenteredModal">Add</button>
                    @include('backend.pages.package.pppackageaddmodal')
                    </div>
                    <hr>
                    <div class="table-responsive">
                
  
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($package as $key=>$item)
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
                                    <td>{{ $item->location }}</td>
                                  <td>
                                    <a href="" class="btn btn-primary btn-sm" title="Edit Data">Edit</a>
                                    <a href="{{ url('/ppackage/delete/'.$item->id) }}" class="btn btn-danger btn-sm" title="delete data" id="delete">Delete</a>
                                </td>   
                                </tr>
                            </tbody>
                                                                
                        @endforeach
                        </table>
              
                    </div>
                </div>
            </div>

    </div>
</div>


@endsection