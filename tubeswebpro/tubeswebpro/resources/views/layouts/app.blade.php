<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
        /* Custom Page Styles */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        /* Header and Footer Customization */
        .custom-header, 
        .custom-footer {
            background-color: #800000;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-header .navbar-light .navbar-nav .nav-link:hover {
            color: #000;
        }

        /* Content Sections */
        #text-intro-section {
            height: 90vh;
        }

        .container.custom-container {
            height: 80%;
        }

        .caption {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding-left: 20px;
            color: #fff;
        }

        #about, #service, #contact {
            padding-top: 100px;
            padding: 20px;
            text-align: center;
            display: flex;
        }

        /* About Section Styling */
        #content-about {
            background-color: #e97e7e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Service Section Styling */
        .card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        /* Contact Section Styling */
        #contact {
            background-color: #cb0505;
            color: #fff;
        }

        /* Form Styles */
        .form-container form {
            background-color: rgba(0, 0, 0, 0);
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: 0 auto;
            color: #fff;
        }

        .form-container form h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        .form-container form input[type="text"],
        .form-container form input[type="email"],
        .form-container form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 3px;
            background-color: rgb(196, 80, 80);
            color: #fff;
        }

        .form-container form input::placeholder,
        .form-container form textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-container form button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #ef5959;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }

        .form-container form button[type="submit"]:hover {
            background-color: #ea2a2a;
        }

        /* Map Styles */
        #map {
            border-radius: 15px;
            overflow: hidden;
            height: 70vh;
        }

        iframe {
            width: 70%;
            height: 70%;
            border: 0;
        }
    </style>

</head>
<body>
  <header id="header" class="custom-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('assets/img/LOGOKU.png') }}" alt="HealthyCare Logo" width="50" height="50">
          <span class="ms-2">HealthyCare</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Fasilitas & Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('patients.index')}}">Daftar</a></li>
                <li><a class="dropdown-item" href="{{ route('doctors.index') }}">Jadwal Dokter</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="{{ route('masuk.index')}}">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    {{-- Menampilkan pesan sukses dari session --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')

    <br>
    <br>

    <footer class="custom-footer text-center py-4">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
