<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
  <!-- Theme CSS Files (EKLEYİN) -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  {{-- Eğer varsa --}}
 
  {{-- Diğer özel CSS dosyalarınız varsa buraya ekleyin --}}
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/your-template.css') }}"> --}}
</head>

<body class="d-flex flex-column min-vh-100">
  <div id="app" class="flex-fill d-flex flex-column container-fluid py-4">
<div class="main-wrapper">
    @include('admin.layouts.sidebar')
     

      <!-- Main Content -->
      <div class="main-content">

  @yield('content')
   </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <footer class="footer mt-auto py-3 bg-light border-top">
    <div class="container text-center">
      <span class="text-muted">&copy; {{ date('Y') }} Gülsoft</span>
    </div>
  </footer>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <!-- JS Libraries -->
  <script src="{{ asset('assets/js/plugins/summernote-bs4.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js" integrity="sha512-+b8QwF4w3Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('assets/js/plugins/select2.full.min.js') }}"></script>

  <!-- Template JS File -->
  {{-- Diğer özel JS dosyalarınız varsa buraya ekleyin --}}
  {{-- <script src="{{ asset('assets/js/your-template.js') }}"></script> --}}

  <!-- Page Specific JS File -->
  {{-- Sayfaya özel JS dosyalarını buraya ekleyin --}}
</body>
</html>

