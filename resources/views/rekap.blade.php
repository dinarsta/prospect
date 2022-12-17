@extends('layout.main')
@section('content')

<div class="col-11">
    <div class="card">
        <div class="card-body">
            <form class="forms-sample ">
                <div class="form-group col-3 mx-3">
                    <label for="exampleInputUsername1">Tanggal awal</label>
                    <input type="date" name="tglawal" id="tglawal" class="form-control" placeholder="tanggal awal" />
                </div>
                <div class="form-group col-3">
                    <label for="exampleInputEmail1">Tanggal akhir</label>
                    <input type="date" name="tglakhir" id="tglakhir" class="form-control" placeholder="tanggal akhir" />
                </div>
                <div class="btn-group mt-4" role="group" aria-label="Button group with nested dropdown">
                    <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn">
                        <i class="mdi mdi-filter-outline"></i>
                    </a>
                    <a href="/pdf" class="btn text-black me-0 mb-4"><i class="mdi mdi-cloud-download"></i></a>
                </div>
            </form>
            <div  style="margin-left: 14px;" class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    urutkan
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="#">Week</a></li>
                    <li><a class="dropdown-item" href="#">Mounth</a></li>
                    <li><a class="dropdown-item" href="#">Year</a></li>
                </ul>
            </div>
            <div class="table-responsive">
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
            </div>
        </div>
    </div>
</div>

<style>
    .col-11 {
        margin: auto;
    }

    .forms-sample {
        display: flex;
    }

    .col-2 {
        height: 20px;
    }

</style>
@endsection
