<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

th, td {
padding: 5px 5px 5px 5px;
}
h2{
    text-align: center;
    margin-bottom: 30px;
}
</style>
</head>
<body>

<h2>Attendance Report</h2>

<p>Nama : {{Auth::user()->name}}</p>
<p>Email : {{Auth::user()->email}}</p>
<p>Date : {{Carbon\Carbon::now()->format('d/m/Y')}}</p>

             <table>
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Brith</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Offie</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Potensial value</th>
                    <th scope="col">Remark</th>
                   
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
                  
                </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>


