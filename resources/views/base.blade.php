<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create By Vikas</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <style>
    table{
      boder-collapse:collapse;
      width:100%;
    }
    td,th{
      padding:5px;
      border:1px solid;
    }
    div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
      </style>
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>