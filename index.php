<?php
include("./koneksi.php");
session_start();
$id = $_SESSION['id'];

if ($id == NULL) {
  header('Location: /buku_tamu/pages/auth/login.php');
}

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  
    Document Title
    =============================================
    -->
    <title>Buku Tamu</title>
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link
      href="plugins/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Template specific stylesheets-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Volkhov:400i"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
      rel="stylesheet"
    />
    <link
      href="plugins/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link href="plugins/landing-page/css/simpletextrotator.css" rel="stylesheet" />
    <link href="plugins/landing-page/css/animate.css" rel="stylesheet" />
    <!-- Main stylesheet and color file-->
    <link href="plugins/landing-page/css/style.css" rel="stylesheet" />
    <link
      id="color-scheme"
      href="plugins/landing-page/css/colors/default.css"
      rel="stylesheet"
    />
    <style>
      .disnon {
        display: none
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button
              class="navbar-toggle"
              type="button"
              data-toggle="collapse"
              data-target="#custom-collapse"
            >
              <span class="sr-only">Toggle navigation</span
              ><span class="icon-bar"></span><span class="icon-bar"></span
              ><span class="icon-bar"></span></button>
              <div class="navbar-brand float-right">
                <img
                  src="https://www.sarumpun.com/wp-content/uploads/2017/08/Logo-PLN-Terbaru-736x1024.jpg"
                  alt="AdminLTE Logo"
                  width="20"
                  loading="lazy"
                  style="opacity: .8">
              </div>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#">Home</a>
              </li>
              <li class="dropdown">
                <a href="/buku_tamu/pages/absensi/index.php"
                  >Documentasi</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section
        class="bg-dark-30 showcase-page-header module parallax-bg"
        data-background="dist/img/gedung.jpg"
      >
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">
              UPT PLN (Persero) Salatiga
            </div>
            <div class="font-alt mb-40 titan-title-size-4">Buku Tamu</div>
            <a class="section-scroll btn btn-border-w btn-round" href="#demos"
              >Absensi</a
            >
          </div>
        </div>
      </section>
      <div class="main showcase-page">
        <section class="module-medium" id="demos">
          <div class="container" style="width: 50%;">
            <h1 class="text-center">Absensi</h1>
            <form
              id="form"
              action="http://localhost/backend/absensi/create.php"
              method="POST"
              enctype="multipart/form-data"
            >
              <div class="row">
                <div class="col-xs-12">
                  <label for="identitas">Identitas</label>
                  <input
                    type="text"
                    class="form-control"
                    id="identitas"
                    name="identitas"
                    required
                  />
                </div>
                <div class="col-xs-6">
                  <label for="nama">Nama</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                    required
                  />
                </div>
                <div class="col-xs-6">
                  <label for="alamat">Alamat</label>
                  <textarea
                    name="alamat"
                    id="alamat"
                    class="form-control"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <label for="bertemu">Bertemu</label>
                  <input
                    type="text"
                    class="form-control"
                    id="bertemu"
                    name="bertemu"
                  />
                </div>
                <div class="col-xs-6">
                  <label for="keperluan">Keperluan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="keperluan"
                    name="keperluan"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <label for="jam_masuk">Jam Masuk</label>
                  <input
                    type="time"
                    class="form-control"
                    id="jam_masuk"
                    name="jam_masuk"
                  />
                </div>
                <div class="col-xs-6">
                  <label for="jam_keluar">Jam Keluar</label>
                  <input
                    type="time"
                    class="form-control"
                    id="jam_keluar"
                    name="jam_keluar"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <label for="tlp">Telepon</label>
                  <input
                    type="text"
                    class="form-control"
                    id="tlp"
                    name="tlp"
                  />
                </div>
                <div class="col-xs-6">
                  <label for="status">Status</label>
                  <select name="status" id="status" class="form-control">
                    <option value="pegawai">Pegawai</option>
                    <option value="mitra">Mitra</option>
                    <option value="tamu">Tamu</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <label for="foto">Foto</label>
                <div class="col-12">
                  <div id="camera">
                    <video id="video" autoplay="true" class="mx-auto"></video>
                  </div>
                  <div id="result" class="disnon">
                    <canvas id="canvas"></canvas>
                  </div>
                  <button id="take-video" class="btn btn-primary btn-block">Absen</button>
                </div>
              </div>
            </form>
          </div>
        </section>
        <section class="module-extra-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-9">
                <div class="callout-text font-alt">
                  <h4 style="margin-top: 0px;">2020 PT. PLN PERSERO</h4>
                  <p style="margin-bottom: 0px;">All Right Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      const formAbsensi = document.getElementById('form')
      const camera = document.getElementById('camera')
      const result = document.getElementById('result')

      const vid = document.getElementById('video')
      const btnTake = document.getElementById('take-video')
      const canvas = document.getElementById('canvas')
      const photo = document.getElementById('photo')

      if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "user" } })
          .then(stream => {
            vid.srcObject = stream
          })
          .catch(console.error)
      }

const takePic = () => {
  const context = canvas.getContext('2d')
  const { videoHeight, videoWidth } = vid
  canvas.setAttribute('height', videoHeight)
  canvas.setAttribute('width', videoWidth)
  context.drawImage(video, 0, 0)
  const temp = canvas.toDataURL('image/png')
  let title = '',
    text = '',
    icon = '',
    button = ''
  fetch(temp)
    .then(res => res.blob())
    .then(resp => {

      const formData = new FormData(formAbsensi)
      formData.append('foto', resp, 'random.png')

      fetch('/buku_tamu/backend/absensi/create.php', {
        method: 'POST',
        body: formData
      })
        .then(r => r.json())
        .then(response => {
            title = "Absen Berhasil"  
          if (response.success) {
            text = `ID anda adalah ${response.currentNumber}`
            icon = "success"
          } else {
            title = response.message
            text = "Maaf absensi gagal, mohon absen kembali"
            icon = "error"
          }
          swal({ title, text, icon, button: "Ok!" })
            .then(resp => window.location.reload())
        })
        .catch(err => {
          console.error(err)
          title = "Absen Gagal!"
          text = "Maaf absensi gagal, mohon absen kembali"
          icon = "error"
          swal({ title, text, icon, button: "Ok!" })
            .then(resp => window.location.reload())
        })
    })
    .catch(err => {
      console.error(err)
      title = "Absen Gagal!"
      text = "Maaf absensi gagal, mohon absen kembali"
      icon = "error"
      swal({ title, text, icon, button: "Ok!" })
        .then(resp => window.location.reload())
    })

}

btnTake.addEventListener('click', (e) => {
  e.preventDefault()
  result.classList.remove('disnon')
  camera.classList.add('disnon')
  takePic()
})

    </script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/landing-page/js/wow/dist/wow.js"></script>
    <script src="plugins/landing-page/js/jquery.simple-text-rotator.min.js"></script>
    <script src="plugins/landing-page/js/smoothscroll.js"></script>
    <script src="plugins/landing-page/js/plugins.js"></script>
    <script src="plugins/landing-page/js/main.js"></script>
  </body>
</html>
