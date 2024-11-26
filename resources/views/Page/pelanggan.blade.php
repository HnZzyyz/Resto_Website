@extends('Template.index')

@section('konten-utama')
    <div id="konten-utama">
        <div class="container-fluid">
            <div class="header d-flex w-100 py-3">
                <h5 class="h4 fw-bold text-black-50 text-uppercase">Data Pelanggan</h5>
            </div><!-- Akhir header -->

            <!-- Flexibel Konten -->
            <div class="card card-body bg-white border-0 shadow">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12 mb-2">
                            <label for="id_menu" class="form-label text-black-50">ID Pelanggan</label>
                            <input type="text" name="id_menu" id="id_menu" class="form-control bg-body-tertiary"
                                placeholder="Masukkan  ID Menu" readonly value="{{ $edit->id_pelanggan ?? $idplg }}">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="nama_menu" class="form-label text-black-50">Nama Pelanggan</label>
                            <input type="text" name="nama_menu" id="nama_menu" class="form-control"
                                placeholder="Masukkan Nama Menu" value="{{ $edit->nama_pelanggan ?? '' }}">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="harga" class="form-label text-black-50">Jenis Kelamin</label>
                            <input type="text" name="harga" id="harga" class="form-control"
                                placeholder="Masukkan Jenis Kelamin ('L') atau ('P')" value="{{ $edit->jenis_kelamin ?? '' }}">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="alamat" class="form-label text-black-50">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                placeholder="Masukkan alamat" value="{{ $edit->alamat ?? '' }}">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="no_hp" class="form-label text-black-50">No Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control"
                                placeholder="Masukkan No Handphone" value="{{ $edit->no_hp ?? '' }}">
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            @if (request()->routeIs('menu'))
                                <a href="#" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i
                                    class="bi-trash"></i></a>
                            @else
                                <a href="/menu/delete/{{ $edit->id_menu }}" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i
                                    class="bi-trash"></i></a>
                            @endif
                            <a href="{{ route('menu') }}" class="btn btn-sm btn-success bg-gradient px-5">Batal <i
                                    class="bi-x"></i></a>
                            <button class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card card-body bg-white mt-3 border-0 shadow">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>ID Menu</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                            <tr class="align-middle">
                                <td>
                                    {{ $a->id_menu }}
                                </td>
                                <td>
                                    {{ $a->nama_menu }}
                                </td>
                                <td>
                                    {{ 'Rp' . number_format($a->harga, 0, ',', '.') }}
                                </td>
                                <td>
                                    <a href="/menu/edit/{{ $a->id_menu }}" class="btn btn-sm btn-success"><i
                                            class="bi-pencil small"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Akhir Flexibel Konten -->
        </div>
    </div>
@endsection
