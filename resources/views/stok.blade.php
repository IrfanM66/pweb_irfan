@extends('layouts.app')
@section('content')
    <section class="content4 cid-sDHZgq0195" id="content4-s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Daftar Permohonan Kebutuhan </strong><br><strong>Plasma Konvalesen</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-sDHZheZunT" id="content5-t">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">


                    <p class="mbr-text mbr-fonts-style display-7">Dalam halaman ini ditampilkan permohonan plasma konvalesen
                        yang telah terdaftar pada Teman Donor, permohonan di bawah ini telah terverifikasi dan anda dapat
                        menghubungi pemohon melalui fitur chat yang tersedia pada aplikasi Teman Donor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content14 cid-sDHZm7kLcx" id="content14-u">



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong>Persyaratan Donor Plasma Konvalesen</strong>
                    </h3>
                    <ul class="list mbr-fonts-style display-7">
                        <li><strong>Usia 18-60 tahun</strong></li>
                        <li><strong>Berat badan ≥ 55kg</strong></li>
                        <li><strong>Diutamakan pria, apabila perempuan belum pernah hamil</strong></li>
                        <li><strong>Pernah terkonfirmasi COVID-19 dengan Surat keterangan sembuh dari dokter yang
                                merawat</strong></li>
                        <li><strong>Bebas keluhan minimal 14 hari</strong></li>
                        <li><strong>Tidak menerima transfusi darah selama 6 bulan terakhir</strong></li>
                        <li><strong>Lebih diutamakan yang pernah mendonorkan darah</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stok darah</h1>
        </div>

        <!-- Content Row -->


        {{-- Rincian darah --}}
        <hr>
        <div class="row">

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $A_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">A+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $A_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">A-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $B_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">B+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $B_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">B-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $O_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">O+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $O_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">O-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $AB_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">AB+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $AB_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">AB-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pendapatan end -->
    </div>
@endsection
