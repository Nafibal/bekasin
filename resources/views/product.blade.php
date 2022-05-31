@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="./css/main.css">
@endsection

@section('container')
<div style="text-align:justify;width:75%; background-color:#FFFFFF; padding:8px;"><img src="https://2.bp.blogspot.com/-_HZaN36xd4k/XAzd_nDM3rI/AAAAAAAAMoM/DfKYGdhLaMstiszQ2WlI3m5foKM8ch2oACLcBGAs/s1600/Review%2BAsus%2BVivoBook%2BS430UN%2BLaptophia.jpg" style="float:left; margin:0 8px 4px 0; width:250px" /><h2>{{ $product->name }}</h2>
  <h2>Rp. {{ $product->price * 1000 }}</h2>
  <h5>Deskripsi</h5>
  <p>
    Laptop Asus VivoBook S14 S430UN digunakan hanya 5 bulan tanpa adanya cacat. penyimpanan sebesar 1TB HDD 256 GB SSD dengan prosesor Core i7 8550U. Jadi, anda wajib membeli laptop ini jika anda membutuhkan laptop.
  </p>
  <h5>Kategori</h5>
  <p>{{ $product->category->name }}</p>
  </div>
    <br>
  <br>
  <div class="row cols-2">
    <div style="text-align:justify;width:20%; background-color:#A9A9A9; padding:10px;">
      <img src="https://images.unsplash.com/photo-1615899486509-84e2c782b0da?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Z3V5fGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=600" style="float:left; margin:0 8px 4px 0;  width:25px" />Profil Penjual <br>
      <a href = "#" class = "" ><button >Kunjungi</button> </a>
    </div>
    <div class="col-6 "><a href = "#" class = "" ><button >Masukkan Keranjang</button> </a></div>
  </div>  
@endsection
  

