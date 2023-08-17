@extends('layouts.app')

@section('content')
    <section class="features3 cid-sE69LnEqSZ" id="features3-w">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Berita &amp; Artikel</strong>
                </h4>

            </div>
            <div class="row mt-4">

                @if ($artikels->count() > 3)
                    @for ($i = 0; $i <= 3; $i++)
                        <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $artikels[$i]->photo) }}" alt=""
                                        data-slide-to="3">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-7">
                                        <strong>{{ $artikels[$i]->title }}</strong>
                                    </h5>

                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">{{ $artikels[$i]->description }}</p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href=""
                                        class="btn btn-danger item-btn display-7" target="_blank">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                @else
                    @foreach ($artikels as $artikel)
                        <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $artikel->photo) }}" alt="" data-slide-to="3">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-7">
                                        <strong>{{ $artikel->title }}</strong>
                                    </h5>

                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">{{ $artikel->description }}
                                    </p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a
                                        href="{{ route('artikel.view', $artikel->id) }}"
                                        class="btn btn-danger item-btn display-7" target="_blank">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
        </div>
    </section>
@endsection
