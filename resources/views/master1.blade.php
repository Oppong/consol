
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Official Website of Management Control and Research Consult.">
        <meta name="keywords" content="Managment Controls, Research, ">
        <title>MCRC @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/banner.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="icon"  href="/img/favicon.png">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/et-line@1.0.1/style.min.css">

        <style>
      body {
        font-family: 'Open Sans', sans-serif;
      }
    </style>
       
    </head>
    <body class="leading-normal tracking-normal bg-white ">

       @include('flash-message')

<div class="flex items-center justify between  h-16 " style="background-color: #8AC03C;">
  <div class=" flex-1 flex-no-shrink  text-white  font-sans pl-2 text-xs"> <i class="fa fa-envelope" style="color: white;"></i> &nbsp; informcrc20@gmail.com</div>
  <div class=" flex-1 flex-no-shrink text-white font-sans text-right pr-2 text-xs"> <i class="fa fa-phone" style="color: white"></i> &nbsp; +233 026 976 8163</div>
</div>                 

<nav class="navbar navbar-expand-md navbar-dark py-4 ">
        <a  href="" class="text-grey-dark font-semibold font-sans"> MCRC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-reorder" style="color: #8AC03C;"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav ml-auto links flex align-items-center">   
        <a class="pr-16  md:pr-8 text-grey-dark font-sans" href="/">Home</a>
        <a class="pr-16 md:pr-8 text-grey-dark font-sans" href="/about">About Us</a>
        
       <div class="dropdown">
        <a class="pr-16 md:pr-8 text-muted font-sans dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/management">Management Control Systems</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/journal">International Journal Publication</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/academic">Academic Research</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/industrial">Industrial Socio-Politico-Economic Research</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/general">General Business Consult</a>
          </div>
      </div>

        <a class="pr-16 md:pr-8 text-grey-dark font-sans" href="/booking">Book Us</a>
        <a class="pr-16 md:pr-8 text-grey-dark font-sans" href="/contact">Contact Us  </a>
        <a class="pr-16 md:pr-8 text-grey-dark font-sans" href="/posts">Blog </a>
          </ul>
        </div>
 </nav>


 @yield('content')


          <script src="js/app.js"></script>

          <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c6318c26cb1ff3c14cc34de/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>


