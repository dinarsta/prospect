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
}

th, td {
  padding: 15px;
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

             <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Jam Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp

                        @foreach ($presensi as $item)
                        <tr>
                           
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->jamasuk }}</td>
                            <td>{{ $item->jamkeluar }}</td>
                            <td>{{ $item->jamkerja }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

</body>
</html>


