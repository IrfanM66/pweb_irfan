@extends('layouts.app')

@section('content')
    <section class="features7 cid-sDHWCVnFfJ" id="features8-q">
        <div class="container">
            <div class="row">
                <div class="card col-12 col-md-12">
                    <div class="card-wrapper">
                        <img src="{{ asset('storage/' . $artikel->photo) }}" alt=""
                            style="max-width: 35vh; margin:auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content4 cid-sDHZgq0195" id="content4-s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>{{ $artikel->title }}</strong><br>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-sDHZheZunT" id="content5-t">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">


                    <p class="mbr-text mbr-fonts-style display-7">{{ $artikel->description }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
