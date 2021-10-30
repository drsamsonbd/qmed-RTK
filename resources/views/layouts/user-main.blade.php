<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>  

  <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition no-sidebar">
<div class="wrapper" id="app">
<user-main></user-main>
<bottom-nav></bottom-nav>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
