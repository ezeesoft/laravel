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
  <link rel="stylesheet" href="css/admin-panel.css">
  <!-- Font Awesone -->
   <link rel="stylesheet" href="fa/css/svg-with-js.css">
   <link rel="stylesheet" href="css/dataTables.bootstrap5.css">

   
</head>
<body>
    
   <!-- Header Section -->
   <header>
        <div class="container-fluid">
          <div class="header-content">
            <!-- Sider place of header -->
            <div class="side-head">
                <span class="text-white font-weight-bolder" style="font-size:20px;">Admin Panel</span>&nbsp;
                <i class="fas fa-bars menu-btn text-white"></i>
               
            </div>

            <!-- header navigation bar -->
            <div class="header-nav">
              <ul>
             
                <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
   </header>

      <!-- End Header -->
      
           <!-- Side Bar -->
           <div class="wrapper">

<!-- This is Side bar -->

      <section class="sidebar">
                    <ul class="nav-bar">
                      <li><a href="Admin"><i class="fa fa-dashboard"></i> <span class="text-link">Dashboard</span></a></li>
                      
                      <li><a href="Genre"><i class="fa fa-music" aria-hidden="true"></i><span class="text-link"> Genre</span></a></li>

                      <li><a href="Artist"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> <span class="text-link"> Artist</span></a></li>

                      <li><a href="Venue"><i class="fa fa-venus-mars" aria-hidden="true"></i><span class="text-link"> Venue</span></a></li>

                      <li><a href="Events"><i class="fa fa-calendar" aria-hidden="true"></i> <span class="text-link"> Events
</span></a></li>

                      
                    </ul>
                </section>