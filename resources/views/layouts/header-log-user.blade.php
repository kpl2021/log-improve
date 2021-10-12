<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('assets/img/kemendikbud.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/css/profil.css') }}" rel="stylesheet">

  <!-- framework bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="{{ asset ('assets/datepicker/css/bootstrap-datepicker.min.css') }}">
  <script src="{{ asset ('assets/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset ('assets/datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script>

  <!-- jquery date -->
  <script>
  $( function() {
    $( "#date" ).datepicker({
      autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
  </script>

  <!-- jquery numbering -->
  <script src="./src/bootstrap-input-spinner.js"></script>
  <script>
    $("input[type='number']").inputSpinner()
  </script>

  

</head>

<body>