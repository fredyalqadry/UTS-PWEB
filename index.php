<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>

</head>

<body>
  <!--Jumbotron-->
  <div class="jumbotron"  >
    <div class="container">
      <div class="row">
        <div class="col-sm-2 ">
          <img src="image/LOGO-UPI.jpg" alt="..." style="width:80%; height:100px;">
        </div>
        <div class="col-sm-8 ">
          <h1 class="display-10" style="padding-left:120px" href="#">Sistem Informasi Kelautan</h1>
          <p class="lead" style="padding-left:150px">Kampus Serang, Universitas Pendidikan Indonesia</p> 
        </div>
        <div class="col-sm-2 ">
          <img src="image/logo-sik.jpg" href="index.php" alt="..." style="width:80%; height:100px;">
        </div>
    </div>
  </div>

  <!--Menu Navbar-->
  <nav  class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left:200px">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                  <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="strukturorganisasi.php">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="dosen.php">Dosen</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="kurikulum.php">Kurikulum</a></li>
                  <li><a class="dropdown-item" href="laboratorium.php">Laboratorium</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penelitian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="kompetisi.php">Kompetisi Profesional</a></li>
                  <li><a class="dropdown-item" href="jurnal.php">Jurnal</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fasilitas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="universitas.php">Universitas</a></li>
                  <li><a class="dropdown-item" href="programstudi.php">Program Studi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mahasiswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="beasiswa.php">Beasiswa</a></li>
                  <li><a class="dropdown-item" href="pencapaian.php">Pencapaian</a></li>
                  <li><a class="dropdown-item" href="himataska.php">HIMATASKA</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="faq.php">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!--Carousel-->

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="transition: transform 1s ease;">
            <img src="image/banner1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/banner2.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


        <!--Sambutan-->
        <div class="jumbotron jumbotron-fluid"  > 
          <div class="container">
            <div class="row">
              <div class="col-sm-6 ">
                <br><br>
                <img src="image/ibunovi2.jpg" alt="..." style="width:100%; height:500px; align-content: center; ">
                <br><br><br><br>
              </div>
              <div class="col-sm-6 ">
                <br><br><br><br><br>
                <font size="6" face="Courier New"><b>KATA SAMBUTAN</b></font><br><br>
                <font size="3" face="Arial">Selamat datang di website Program Studi Sistem Informasi Kelautan</font><br>
                <font size="3" face="Arial">Universitas Pendidikan Indonesia Kampus Daerah Serang.</font><br>
                <br>
                <font size="3" face="Arial">Anda akan mendapatkan informasi lengkap dan bermanfaat mengenai </font><br>
                <font size="3" face="Arial">keberadaan Program Studi Sistem Informasi Kelautanbeserta </font><br>
                <font size="3" face="Arial">kegiatan-kegiatan lainnya.</font><br>
                <br><br>
                <font size="3" face="Arial"><b>Novi Sofia Fitriasari,S.Si.,M.T.</b></font><br>
                <font size="3" face="Arial">Ketua prodi Sistem Informasi Kelautan</font><br>
              </div>
            </div>
          </div>
          </div>

          <!--CONTENT-->
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                      
                <section>
                  <div class="card">
                    <div class="card-body" style="color: black; background: burlywood;">
                      <font size="4" style="padding-left: 320px;"><b>TENTANG KAMI</b></font>
                    </div>
                  </div><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim ut sem viverra aliquet eget sit. Nunc consequat interdum varius sit amet mattis vulputate. Amet dictum sit amet justo donec. Pharetra magna ac placerat vestibulum lectus. Aliquam etiam erat velit scelerisque in dictum non. Nec nam aliquam sem et tortor consequat id porta. Sollicitudin aliquam ultrices sagittis orci a scelerisque. Dignissim sodales ut eu sem integer. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Tincidunt tortor aliquam nulla facilisi cras.</p>
                  </section>

                            <section >
                              <div class="card-body" style="color: black; background: burlywood;">
                                <font size="4" style="padding-left: 320px;"><b>BERITA TERBARU</b></font>
                              </div><br>
                              <div class="container" id="update" >
                                <div class="card">
                                </div>
                                <div class="row ">
                                    <div class="col-md-4 mb-3">
                                      <img src="image/seminarinter.png" alt="..." style="width:100%; height:200px; align-content: center; ">
                                      <h4><b>DIA UPI Gelar Webinar Internasional: The Global Opportunity of Adressing Rising Temperature</b></h4>
                                      <a href="berita.php">Selengkapnya...</a>
                                      </div>
                                    <div class="col-md-4 mb-3">
                                      <img src="image/upiaward2021.png" alt="..." style="width:100%; height:200px; align-content: center; ">
                                      <h4><b>UPI Awards 2021: Kenalkan UPI di Kancah Internasional</b></h4>
                                      <a href="berita.php">Selengkapnya...</a>
                                      </div>  
                                    <div class="col-md-4 mb-3">
                                      <img src="image/Mataka_Okt.jpg" alt="..." style="width:100%; height:200px; align-content: center; ">
                                      <h4><b>Program bulanan Prodi SIK "MATAKA" bulan oktober</b></h4>
                                      <a href="berita.php">Selengkapnya...</a>
                                        </div>
                                  </div>
                                </div>
                              </section>

                              <section>
                                <div class="card-body" style="color: black; background: burlywood;">
                                  <font size="4" style="padding-left: 320px;"><b>LOKASI KAMPUS</b></font>
                                </div><br>
                                <div class="peta">
                                  <center>
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63470.682921475265!2d106.228281442205!3d-6.141759507240276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b0dbb534a61%3A0x301e8f1fc28b8d0!2sSerang%2C%20Serang%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1633768896597!5m2!1sen!2sid" width="820px" height="400px" allowfullscreen="" loading="lazy"></iframe>
                                  </center>
                                </div>
                            </section><br><br>

                            <section>
                              <div class="card">
                                <div class="h-100 p-5 border rounded-3" style="background: rgb(139, 133, 133);">
                                  <h2>Penerimaan Mahasisiswa Baru </h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim ut sem viverra aliquet eget sit. Nunc consequat interdum varius sit amet mattis vulputate. Amet dictum sit amet justo donec. Pharetra magna ac placerat vestibulum lectus. Aliquam etiam erat velit scelerisque in dictum non. Nec nam aliquam sem et tortor consequat id porta. Sollicitudin aliquam ultrices sagittis orci a scelerisque. Dignissim sodales ut eu sem integer. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Tincidunt tortor aliquam nulla facilisi cras.
                                  </p>
                                  <a class="btn btn-primary center" href="pendaftaran.php" role="button" >Daftar UPI</a>
                                </div>
                              </div>
                            </section><br><hr>

                            <section>
                              <h3>Leave a Reply</h3>
                              Your email address will not be published.
                              <br>
                              <form action="forms/contact.php" method="post" role="form" class="php-email-form"></form>
                                <div>
                                  <label for="comment">Comments:</label>
                                  <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                  <br>
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                                  <br>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="my-3">
                                  <div class="loading">Loading</div>
                                  <div class="error-message"></div>
                                  <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <a class="btn btn-primary" href="#" role="button">Kirim</a>
                              </form>
                            </section>

                            </div>
                              
      
              <div class="col-md-3">
                  <div class="container">
                      <div class="row">

                        <section>
                              <h3>Youtube SIK</h3><br>
                              <div class="col"><iframe width="200" height="150" src="https://www.youtube.com/embed/uSpL9GR0QaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br><br>
                        </section>

                        <section>
                          <div class="card">
                            <div class="card-body">
                              <h3>Arsip Berita</h3><hr>
                            <ul>
                              <li><a href="">September 2021</a></li><hr>
                              <li><a href="">August 2021</a></li><hr>
                              <li><a href="">July 2021</a></li><hr>
                              <li><a href="">June 2021</a></li><hr>
                              <li><a href="">May 2021</a></li><hr>
                              <li><a href="">April 2021</a></li><hr>
                              <li><a href="">March 2021</a></li><hr>
                              <li><a href="">February 2021</a></li><hr>
                              <li><a href="">January 2021</a></li><hr>
                              <li><a href="">December 2020</a></li><hr>
                              <li><a href="">November 2020</a></li><hr>
                              <li><a href="">October 2020</a></li><hr>
                              <li><a href="">September 2020</a></li><hr>
                              <li><a href="">August 2020</a></li><hr>
                              <li><a href="">July 2020</a></li><hr>
                              <li><a href="">June 2020</a></li><hr>
                              <li><a href="">May 2020</a></li><hr>
                              <li><a href="">April 2020</a></li><hr>
                              <li><a href="">March 2020</a></li><hr>
                              <li><a href="">February 2020</a></li><hr>
                              <li><a href="">January 2020</a></li><hr>
                              <li><a href="">December 2019</a></li><hr>
                              <li><a href="">November 2019</a></li><hr>
                              <li><a href="">October 2019</a></li><hr>
                              <li><a href="">September 2019</a></li><hr>
                              <li><a href="">July 2019</a></li><hr>
                              <li><a href="">June 2019</a></li><hr>
                              <li><a href="">May 2019</a></li><hr>
                              <li><a href="">March 2019</a></li>
                            </div>
                          </div>
                            </section>
                             </ul>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
      
      <hr>

      <!--Hubungi-->
      <section>
        
        <div style="background: rgb(43, 41, 41); color: white;">
          <div class="container">
          <div class="row ">
            <div class="col-md-3">
              <br><br>
              <h3>Hubungi Kami</h3><hr>
                Universitas Pendidikan Indonesia<br>
                Kampus Serang<br>
                Jl. Ciracas No.38, Serang, Kec. Serang, Kota Serang, Banten 42116<br>
                Telp: (0254) 200277<br>
                Email: sik_kdserang@upi.edu
                </div>
            <div class="col-md-9">
              <br><br>
              <h3>Galeri</h3><hr>
              <img src="image/akreditasi.jpg" class="rounded" alt="..." width="250" height="250">
              <img src="image/diving.png" class="rounded" alt="..." width="250" height="250">
              <img src="image/upiserang.jpeg" class="rounded" alt="..." width="250" height="250">
              <br><br><br>
              </div>  
          </div>
        </div>
      </div>
      </section>

      <!--Footer-->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2021, Fredy Al Qadry (2009733)</span>
          </div>
        </footer>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>