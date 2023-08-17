@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6> -->
                <button type="button" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                    style="margin-left: 70vw;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Artikel
                </button>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <!-- isi -->
                        <tbody>
                            @foreach ($artikels as $artikel)
                                <tr>
                                    <td>{{ $artikel->id }}</td>
                                    <td><img src="{{ asset('storage/' . $artikel->photo) }}" alt="" height="120"
                                            width="120">
                                    </td>
                                    <td>{{ $artikel->title }}</td>
                                    <td>{{ $artikel->description }}</td>

                                    <td class="d-flex justify-content-center">
                                        <a class="btn-sm btn btn-success shadow-sm mr-2" data-toggle="modal"
                                            data-target="#update{{ $artikel->id }}">
                                            <i class="fa-sm text-white-50"></i> Edit
                                        </a>
                                        <a href="{{ route('artikel.destroy', $artikel->id) }}"
                                            class="btn-sm btn btn-danger shadow-sm">
                                            <i class="fa-sm text-white-50"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="update{{ $artikel->id }}" tabindex="-1"
                                    aria-labelledby="update{{ $artikel->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="update{{ $artikel->id }}">Tambah Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('artikel.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <label for="tittle">Judul</label>
                                                        <input type="tittle" class="form-control" name="tittle"
                                                            value="{{ $artikel->title }}">
                                                    </div>
                                                    <div class="row">
                                                        <label for="description">Deskripsi</label>
                                                        <textarea name="description" id="description" cols="30" rows="10">{{ $artikel->description }}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <label for="photo">Photo</label>
                                                        <input type="file" class="form-control" name="photo">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="row">
                                    <label for="tittle">Judul</label>
                                    <input type="tittle" class="form-control" name="tittle">
                                </div>
                                <div class="row">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                </div>
                                <div class="row">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
