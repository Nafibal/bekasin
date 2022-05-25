@extends('layouts.main')

@section('container')
<div class="container-fluid pt-5 pb-5 bg-success">
  <div class="container text-center">
    <h3 class = "display-6">BekasIn</h3>
    <h6 class = "display-8">Punya barang yang udah tidak terpakai?</h6>
    <h6 class = "display-8">BekasIn aja!</h6>
  </div>
  <br>
  <br>
  <br>
  <br>
</div>

<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <div class="row pt-4 gx-4 gy-4">
      @foreach ($products as $product)
      <a href="/product/{{ $product->slug }}" class="col-md-3">
        <div class="card crop-img">
          <img
            src="https://2.bp.blogspot.com/-_HZaN36xd4k/XAzd_nDM3rI/AAAAAAAAMoM/DfKYGdhLaMstiszQ2WlI3m5foKM8ch2oACLcBGAs/s1600/Review%2BAsus%2BVivoBook%2BS430UN%2BLaptophia.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
              Rp. {{ $product->price * 1000 }}
            </p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection