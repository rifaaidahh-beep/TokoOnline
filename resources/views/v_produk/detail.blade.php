@extends('v_layouts.app') 
@section('content') 
<!-- template --> 
 
<div class="row">
    <!--  Product Details -->
    <div class="product product-details clearfix">

        <!-- BAGIAN GAMBAR -->
        <div class="col-md-6">
            <div id="product-main-view">
                <div class="product-view">
                    <img src="{{ asset('storage/img-produk/thumb_lg_' . $row->foto) }}" alt="">
                </div>

                @foreach ($fotoProdukTambahan as $item)
                    @if ($item->produk_id == $row->id)
                        <div class="product-view">
                            <img src="{{ asset('storage/img-produk/' . $item->foto) }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- BAGIAN DESKRIPSI -->
        <div class="col-md-6">
            <div class="product-body">
                <div class="product-label">
                    <span>Kategori</span>
                    <span class="sale">{{ $row->kategori->nama_kategori }}</span>
                </div>

                <h2 class="product-name">{{ $row->nama_produk }}</h2>
                <h3 class="product-price">Rp. {{ number_format($row->harga, 0, ',', '.') }}</h3>

                <p>{!! $row->detail !!}</p>

                <div class="product-options">
                    <ul class="size-option">
                        <li><span class="text-uppercase">Berat:</span></li>
                        {{ $row->berat }} Gram
                    </ul>
                    <ul class="size-option">
                        <li><span class="text-uppercase">Stok:</span></li>
                        {{ $row->stok }}
                    </ul>
                </div>

                <div class="product-btns">
                    <form action="#" method="post" style="display: inline-block;">
                        @csrf
                        <button type="submit" class="primary-btn add-to-cart">
                            <i class="fa fa-shopping-cart"></i> Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end template--> 
@endsection 