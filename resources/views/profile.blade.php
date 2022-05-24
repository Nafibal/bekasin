@extends('layouts.main')

@section('container')
<!-- navbarprofil -->
<div class="border border-2 mx-auto" style="width:1000px; height:auto;">
	<div class="container mt-2">
	<h3 class="mb-3">Nama User</h3>
	<ul class="nav nav-tabs">
			<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#biodata">Biodata</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#alamat">Daftar Alamat</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#rekening">Daftar Rekening</a>
			</li>
	</ul>
	<div class="tab-content">
			<div class="tab-pane active" id="biodata">
					<div class="row border g-0 rounded shadow-sm">
							<div class="col p-4">
									<table class="table">
											<thead>
													<th><h3>Biodata</h3></th>
											</thead>
											<tbody>
													<tr>
															<th scope="col">Nama</th>
															<td>Anya</td>
													</tr>
													<!-- <tr>
															<th scope="col">Tanggal Lahir</th>
															<td>10 Januari 2019</td>
													</tr>
													<tr>
															<th scope="col">Jenis Kelamin</th>
															<td>Perempuan</td>
													</tr> -->
													<tr>
															<th scope="col">Email</th>
															<td>anyaanya@gmail.com</td>
													</tr>
													<tr>
															<th scope="col">Nomor HP</th>
															<td>085710481115</td>
													</tr>
													<tr>
															<th scope="col">Alamat</th>
															<td>Anya</td>
													</tr>
											</tbody>
									</table>
							</div>
							<div class="col-auto">
									<img src="../../public/image/anya.jpg" width="200" class="img-thumbnail dimension">
									<form action="upload.php" method="post" enctype="multipart/form-data">
									<input type="file" name="fileToUpload" id="fileToUpload">
									<hr>
									<input type="submit" value="Upload Image" name="submit">
									</form>
							</div>
					</div>
			</div>

			<div class="tab-pane" id="alamat">
					<div class="row border g-0 rounded shadow-sm">
							<div class="col p-4">
									<h3>Alamat</h3>
									<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									</p>
							</div>
					</div>
			</div>

			<div class="tab-pane" id="rekening">
					<div class="row border g-0 rounded shadow-sm">
							<div class="col p-4">
									<h3>Rekening</h3>
									<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									</p>
							</div>
					</div>
			</div>
	</div>    
</ul>
@endsection