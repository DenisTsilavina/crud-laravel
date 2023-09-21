@php
// format date avec heure,munite , seconde
     $date=date('d-m-Y H:i:s');
   // $date = Carbon\Carbon::now();
    //echo $date->toDateTimeString();;
    $nom="Tsilavina Denis";
    
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="http://stage.test/php/crud/assets/bootstrap/css/bootstrap.min.css">
    <title>@yield('title','CRUD')</title>
</head>
<body>
    <p style="text-align:right;">{{"Androany dia:".$date}}</p>
    <h5 style="text-align:center; color: red;"><em><i>{{ $nom}}</i></em></h5>
    
<div class="container">

    <h1 style="text-align:center; color: green;" class="text-center"><em>List students with CRUD</em></h1>

    <div class="row mt-3">
        @yield('content')
    </div>

    </div>
</body>
</html>

