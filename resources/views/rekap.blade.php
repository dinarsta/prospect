@extends('layout.main')
@section('content')

<div style="margin: auto;" class="col-8">
    <div class="card">
        <div class="card-body">
           <h4 class="card-title">Filter absensi</h4>

            <form class="forms-sample ">
                <div class="form-group">
                    <label for="exampleInputUsername1">Tanggal awal</label>
                    <input type="date" name="tglawal" id="tglawal" class="form-control" placeholder="tanggal awal" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal akhir</label>
                    <input type="date" name="tglakhir" id="tglakhir" class="form-control" placeholder="tanggal akhir" />
                </div>
                <div class="form-group">
                    <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                        Lihat <i class="fas fa-print"></i>
                    </a>
                </div>
            </form>
    <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Jumlah Jam Kerja</th>
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
            </div>
        </div>
</div>

</div>

@endsection