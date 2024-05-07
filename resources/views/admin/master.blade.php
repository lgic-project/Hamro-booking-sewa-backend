<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hamro Hotel Sewa - Backpanel</title>

  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/architectui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/fontawesome.min.css" integrity="sha512-ZXZToxNg9/jZSPmzt5qncUAk8pBQa65HSEhhqxPKGztJh5RT/fxE2Tv5xwP3e49WNkt0kMakk2NNXgIlosbBbQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  @include('admin.partials._header')


  @yield('content')
  @include('admin.partials._footer')
  <script src="{{ URL::asset('js/architect.js') }}"></script>

</body>

</html>