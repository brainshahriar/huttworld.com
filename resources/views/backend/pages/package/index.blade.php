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
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Place</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="assets/images/icons/chair.png" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>$64.00</td>
                                     <td>Brooklyn Zeo</td>
                                    <td>12 Jul 2020</td>
                                  <td>12 Jul 2020</td>
                                  <td>
                                    <a href="" class="btn btn-primary btn-sm" title="Edit Data">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" title="delete data" id="delete">Delete</a>
                                </td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
</div>


@endsection