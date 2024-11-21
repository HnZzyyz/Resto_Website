@extends('Template.index')

@section('konten-utama')
    <div id="konten-utama">
        <div class="container-fluid">
            <div class="header d-flex w-100 py-3">
                <h5 class="h4 fw-bold text-black-50 text-uppercase">Data Meja</h5>
            </div><!-- Akhir header -->

            <!-- Flexibel Konten -->
            <div class="card card-body bg-white border-0 shadow">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-2">
                            <label for="id_meja" class="form-label text-black-50">ID Meja</label>
                            <input type="text" name="id_meja" id="id_pelanggan"
                                class="form-control bg-body-tertiary" placeholder="Masukkan ID Meja" readonly>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="no_meja" class="form-label text-black-50">No Meja</label>
                            <input type="text" name="no_meja" id="no_meja" class="form-control"
                                placeholder="Masukkan No Meja">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jenis_meja" class="form-label text-black-50">Jenis Meja</label>
                            <input type="text" name="jenis_meja" id="jenis_meja" class="form-control"
                                placeholder="Masukkan Jenis Meja">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jmlh_kursi" class="form-label text-black-50">Jumlah Kursi</label>
                            <input type="text" name="jmlh_kursi" id="jmlh_kursi" class="form-control"
                                placeholder="Masukkan Jumlah Kursi">
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="#" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i
                                    class="bi-trash"></i></a>
                            <button class="btn btn-sm btn-success bg-gradient px-5">Batal <i class="bi-x"></i></button>
                            <button class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card card-body bg-white mt-3 border-0 shadow">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>ID Meja</th>
                            <th>No Meja</th>
                            <th>Jenis Meja</th>
                            <th>Jumlah Kursi</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            
                            <td>
                                <a href="#" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Akhir Flexibel Konten -->
        </div>
    </div>
@endsection
