<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
h2{
    text-align: center;
    margin-bottom: 30px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<h2>History Absensi</h2>

<div style="overflow-x: auto;">
 
</div>
  <table>
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