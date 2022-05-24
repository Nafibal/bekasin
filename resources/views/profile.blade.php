<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="resources/css/profile.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
    <body>
        <!-- navbaratas -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2C6E4A;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../../public/image/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <form class="d-flex" role="search" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-light" type="submit" >Search</button>
                </form>
                
                <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
                </li>    
            </ul>     
            </div>
        </div>
        </nav>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    </ul>
    </body>
</html>