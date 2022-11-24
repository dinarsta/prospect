@extends('layout.main')
@section('content')
<div class="row">
    <div class="content-wrapper">
 <a href="/tambahprospect" class="btn btn-primary mb-4">Add</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Add prospect</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Brith</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Offie</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Potensial value</th>
                                <th scope="col">Remark</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$row->firstname}} {{$row->lastname}}</td>
                                <td>{{$row->tgl_lahir}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->office}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->potenvalue}}</td>
                                <td>{{$row->remark}}</td>
                                <td>
                                    <a href="/tampilpros/{{$row->id}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-email="{{$row->email}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete').click(function(){
    var prosid = $(this).attr ('data-id');
    var email = $(this).attr ('data-email');
 
swal({
  title: "Yakin?",
  text: "kamu akan menghapus data dengan email "+email+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location ="/delete/"+prosid+""
    swal("Data berhasil dihapus", {
    icon: "success",
    });
  } else {
    swal("Data tidak terhapus");
  }
});
});
</script>
@endsection
