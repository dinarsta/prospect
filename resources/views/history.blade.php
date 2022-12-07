@extends('layout.main')
@section('content')

<div class="col-lg-11 mt-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">History absensi</h4>
          <a style="width:70px;" href="/pdf" class="btn btn-primary text-white me-0 mb-4"><i
                                    class="icon-download"></i></a>
           
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
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
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    h4 {
        text-align: center;
    }
    .col-lg-11{
        margin:  auto;
    }

</style>
@endsection
