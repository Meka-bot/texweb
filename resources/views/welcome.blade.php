<!DOCTYPE html>
<html lang="en">
<head>

<!--Iconos-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"/>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos Propios-->
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!--Fancybox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>Proyecto Blog</title>
</head>
<body style="background-color: white;">
     <!-- Nav -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px">
  <a class="navbar-brand" href="{{ route('welcome') }}">Horse</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.index') }}"> Thoughts </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('juan') }}">Juan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/watch?v=nKITkHxTxD4" target="_blank">Salvación</a>
      </li>
    </ul>
</nav>
    <!-- Fin Nav -->

    <section>
      <div style="background-image: url('https://images.alphacoders.com/976/thumb-1920-976234.png'); height: 500px; background-repeat:no-repeat; background-position: center top; background-attachment: fixed;"><a></a></div>
    </sections>

<br>
<br>
<br>
    <div>
      <h1 style="text-align: center;">Howdy</h1>
    </div>

<br>
<br>



@foreach ($posts as $post)
<div style="padding-top: 5%; padding-right: 20%; padding-left: 20%; padding-bottom: 5%;" class="card row">
  <div class="card-header">
    <h6>{{ $post->author }}<h6>
  </div>
  <div class="card-body">
    <h2 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->body }}</p>
  </div>
  <div class="card-footer text-muted col">
  {{ $post->date }} 
  <hr>
  </div>
</div>
@endforeach



<br>
<br>

<footer style=" background-color:rgb(217, 217, 217);">
  <div class="text-center p-4">
    <p>© 2021 Copyright</p>
  </div>
</footer>


<!--Java-->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>