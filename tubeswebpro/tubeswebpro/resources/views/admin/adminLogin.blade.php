<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
 
  <section id="text-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset('assets/img/admin.png') }}');">
    <div class="container h-100">
      <div class="caption">
        <h1>Selamat Datang Admin</h1>
        <div class="form-container">
          <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label text-white">Username:</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-white">Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-light">Login</button>
            <a href="{{route('masuk.index')}}" class="btn btn-danger">Cancel</a>
          </form>
          @if ($errors->has('loginError'))
            <div class="alert alert-danger mt-3">
              {{ $errors->first('loginError') }}
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>