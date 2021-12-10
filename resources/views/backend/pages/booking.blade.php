@extends('backend.index')
@section('content')
    
<div class="page-wrapper">
    <div class="page-content">

              <div class="card radius-10">
                <div class="card-body">
                    <hr>
                    <div class="table-responsive">
                    
  
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Adults</th>
                                    <th>Kids</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($booking as $key=>$item)
                            <tbody>
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->email }}</td>
                                     <td>{{ $item->phone }}</td>
                                    <td>{{ $item->date }}</td>
                                  <td>{{ $item->adult }}</td>
                                  <td>{{ $item->kids }}</td>
                                  <td>
                                    <a href="" class="btn btn-primary btn-sm" title="Edit Data">Edit</a>
                                    <a href="{{ url('/booking/delete/'.$item->id) }}" class="btn btn-danger btn-sm" title="delete data" id="delete">Delete</a>
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