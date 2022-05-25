@extends('layouts.main')

@section('container')
<div class="row">
  <div class="col-lg-8 col-md-8 col-12">
      <div class="product-detail">
          <br /><br />
          <h2 class="page-name">Checkout</h2>
          <div class="action-name">
              <h5 class="price">Alamat Pengiriman</h5>
          </div>
          <div class="product-short-desc">
              <h6>Nama User</h6>
              <p>
                  Jl. Lorem Ipsum no.1, Kec. Lorem Ipsum, Kota Lorem Ipsum
              </p>
              <!-- <div class="d-grid col-6 mx-auto"> -->
              <button type="button" class="btn btn-success">
                  Pilih Alamat Lain
              </button>
              <!-- </div> -->
              <!-- <p>
                  <br /> Compact sport shoe for running, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat. Duis aute irure dolor. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
              </p> -->
              <h6><br />Nama Penjual</h6>
              <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path
                          d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                  </svg> Jakarta Barat
              </div>
              <br />
              <div>
                  <div class="row">
                      <div class="col">
                          <img src="../bekasin/public/images/gambar.png" alt="" />
                      </div>
                      <div class="col">
                          <h4>Baju Bekas Kyuti</h4>
                          <h4>Rp100.000</h4>
                      </div>
                      <div class="col">
                          <h5>Pilih Durasi</h5>
                          <div class="btn-group">
                              <button type="button" class="btn btn-success">
                                  Pengiriman
                              </button>
                              <button type="button"
                                  class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="visually-hidden">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                  <li>
                                      <a class="dropdown-item" href="#">Pengiriman</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">Another action</a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                  </li>
                                  <li>
                                      <hr class="dropdown-divider" />
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <br />
          <div class="subtotal">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <h4>Subtotal</h4>
                      </div>
                      <div class="col" style="padding-left: 380px">
                          <h5>Rp100.000</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4" style="padding-top: 150px">
      <div class="ringkasan-belanja">
          <h3>Ringkasan Belanja</h3>
          <div class="container">
              <div class="row">
                  <div class="col">
                      <p>Total Harga</p>
                  </div>
                  <div class="col" style="text-align: right">
                      <p>Rp100.000</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <h3>Total Tagihan</h3>
              </div>
              <div class="col" style="text-align: right">
                  <h3>-</h3>
              </div>
          </div>
          <div class="d-grid gap-2 mx-auto">
              <button class="btn btn-success" type="button">
                  Pilih Pembayaran
              </button>
          </div>
      </div>
  </div>
</div>

@endsection
