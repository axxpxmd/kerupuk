@extends('layouts.app')
@section('title', '| Home')
@section('content')
<section id="hero" class="d-flex align-items-center bg-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center-m" data-aos="fade-up" data-aos-delay="800">
                    <img src="{{ asset('images/leaf.png') }}" width="50" class="mb-4" alt="">
                    <p class="font-weight-bold fs-20 Merriweather">Produk Kualitas Terbaik</p>
                    <p class="fs-40 text-black Merriweather" style="font-weight: 900">KERUPUK DUA KURMA!</p>
                    <p class="fs-16 m-0">
                        Kerupuk adalah makanan ringan khas yang secara turun-menurun dikonsumsi dan melengkapi setiap menu makanan masyarakat
                    </p>
                    <p class="fs-16 m-0">
                        Indonesia. Sebagai camilan yang populer, kerupuk juga ideal untuk dijadikan makanan pembuka. Dalam kesederhanaannya, kerupuk
                    </p>
                    <p class="fs-16 m-0">
                        dapat disajikan dengan saus ataupun sambal guna meningkatkan cita rasanya yang gurih dan nikmat.
                    </p>
                    <a href="#" class="btn btn-success btn-lg fs-16 font-weight-bold mt-4"><i class="bi bi-shop-window mr-2"></i> Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-flex align-items-center bg-black">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-bg-bolor mb-5-m">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="bi bi-box-seam fs-35 icon-color"></i>
                                <p class="text-white mt-2 mb-1 fs-20 font-weight-bold Merriweather">Gratis Pengiriman</p>
                                <p class="text-white m-0 fs-16">Diatas Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-bg-bolor mb-5-m">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="bi bi-globe fs-35 icon-color"></i>
                                <p class="text-white mt-2 mb-1 fs-20 font-weight-bold Merriweather">Gratis Pengiriman</p>
                                <p class="text-white m-0 fs-16">Diatas Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-bg-bolor mb-5-m">
                        <div class="card-body">
                             <div class="text-center">
                                <i class="bi bi-shop fs-35 icon-color"></i>
                                <p class="text-white mt-2 mb-1 fs-20 font-weight-bold Merriweather">Gratis Pengiriman</p>
                                <p class="text-white m-0 fs-16">Diatas Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-bg-bolor mb-5-m">
                        <div class="card-body">
                             <div class="text-center">
                                <i class="bi bi-shop fs-35 icon-color"></i>
                                <p class="text-white mt-2 mb-1 fs-20 font-weight-bold Merriweather">Gratis Pengiriman</p>
                                <p class="text-white m-0 fs-16">Diatas Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="align-items-center">
    <div class="text-center">
        <p class="fs-25 font-weight-bold Merriweather">Produk Terlaris</p>
        <img src="{{ asset('images/leaf.png') }}" alt="">
    </div>
    <div class="container mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="">
                        <div class="">
                            <img src="https://duakurma.com/wp-content/uploads/2022/03/3b-150x150.jpeg" class="rounded" width="285" alt="">
                            <p class="fs-16 m-0 font-weight-bold Merriweather mt-3">Mawar MINI</p>
                            <p class="mt-2">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="">
                        <div class="">
                            <img src="https://duakurma.com/wp-content/uploads/2022/03/2b-150x150.jpeg" class="rounded" width="285" alt="">
                            <p class="fs-16 m-0 font-weight-bold Merriweather mt-3">Mawar TIGA RODA</p>
                            <p class="mt-2">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="">
                        <div class="">
                            <img src="https://duakurma.com/wp-content/uploads/2022/03/4b-150x150.jpeg" class="rounded" width="285" alt="">
                            <p class="fs-16 m-0 font-weight-bold Merriweather mt-3">JENGKOL</p>
                            <p class="mt-2">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="align-items-center bg-home"> 
    <div class="container">
        <div class="col-md-12 row">
            <div class="col-md-6 px-5 text-right text-center-m ">
                <p class="font-weight-bold text-black fs-25 Merriweather">Kualitas</p>
                <p class="fs-16 text-black">Kami selalu menjaga kualitas rasa dan menjamin proses yang higienis dalam produksi kerupuk DUA KURMA</p>
            </div>
            <div class="col-md-6 px-5 text-left">
                <img src="https://duakurma.com/wp-content/uploads/2022/03/1b.jpeg" width="300" class="img-fluid rounded" alt="">
            </div>
        </div>
        <div class="col-md-12 row mt-5">
            <div class="col-md-6 px-5 text-right mb-5-m">
                <img src="https://duakurma.com/wp-content/uploads/2022/03/1b.jpeg" width="300" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 px-5 text-left text-center-m">
                <p class="font-weight-bold text-black fs-25 Merriweather">Inovasi</p>
                <p class="fs-16 text-black">Kami selalu berinovasi untuk menciptakan rasa yang lezat sehingga cocok untuk semua usia dan kalangan.</p>
            </div>
        </div>
    </div>
</section>
<section class="align-items-center">
    <div class="text-center">
        <p class="fs-25 font-weight-bold Merriweather">Testimoni</p>
        <img src="{{ asset('images/leaf.png') }}" alt="">
    </div>
    <div class="container mt-4">
        <div class="col-md-12 text-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow bg-light mb-5-m">
                        <div class="card-body">
                            <img src="{{ asset('images/man.png') }}" width="100" alt="">
                            <p class="font-weight-bold fs-16 text-black mt-2">Asip Hamdi</p>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow bg-light mb-5-m">
                        <div class="card-body">
                            <img src="{{ asset('images/man.png') }}" width="100" alt="">
                            <p class="font-weight-bold fs-16 text-black mt-2">Asip Hamdi</p>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow bg-light mb-5-m">
                        <div class="card-body">
                            <img src="{{ asset('images/man.png') }}" width="100" alt="">
                            <p class="font-weight-bold fs-16 text-black mt-2">Asip Hamdi</p>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow bg-light mb-5-m">
                        <div class="card-body">
                            <img src="{{ asset('images/man.png') }}" width="100" alt="">
                            <p class="font-weight-bold fs-16 text-black mt-2">Asip Hamdi</p>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
