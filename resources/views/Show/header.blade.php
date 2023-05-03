<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- admin css -->
  <link rel="stylesheet" href="css/show.css">
<link rel="stylesheet" href="css/dataTables.bootstrap5.css">
  <!-- Font Awesone -->



   
</head>
<body>
    

<nav class="navbar navbar-expand-lg  navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    
    <a class="navbar-brand ml-5" href="Homes">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ml-2 mb-2 mb-lg-0">
        <li class="nav-item ml-5">
          <a class="nav-link active " aria-current="page" href="#">Artist</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link active "aria-current="page" href="#">Genre</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link active" aria-current="page" href="#">Date</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link active "aria-current="page" href="#">Venue</a>
        </li>
      
      </ul>
      <form method="GET" action="{{url('search')}}" class="d-flex" role="search">
        <input class="form-control me-2" value="{{ Request::get('search')}}" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>