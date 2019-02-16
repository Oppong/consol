@extends('master1')
@section('title', ' About Page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about1.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
          <h3 class=" text-center display-6 animated fadeInDown delay-1s font-sans semibold text-5xl"><strong> Who we <span style="color: #8AC03C;">Are</span> </strong></h3>
          <p class=" font-sans font-thin text-p text-white  animated fadeInUp delay-1s pb-3">A Consultancy firm that provides advice for various organisation</p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container mx-auto mt-16">

      <h5 class=" w-full text-muted pb-2 text-2xl font-sans text-center mb-16 font-medium text-3xl">About Our Company  <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" ></h5>

		  <div class="flex flex-wrap -mx-4  ">
    			<div class="w-full md:w-1/3 px-4 pb-8">
    				<div class="text-center pb-4 font-sans"><i class=" icon-layers text-2xl " style="color: #8AC03C; "></i></div>
	          <h5 class="text-center pb-2 font-sans font-medium">WHO WE ARE</h5>
	          <p class="text-center text-sm text-muted font-sans">Managment Control & Research Consult provide consultancy services in the areas of Management Control systems for organizations and provides a platform for Academic, Industrial and Socio-Politico-Economic research </p>
			   </div>
			<div class="w-full md:w-1/3 px-4 pb-8">
				<div class="text-center pb-4 font-sans"><i class=" icon-lightbulb text-2xl " style="color: #8AC03C; "></i></div>
	            <h5 class="text-center pb-2 font-sans font-medium">WHY WE EXIST</h5>
	            <p class="text-center text-muted text-sm font-sans"> We exist to provide Consultancy Services in Management Control Systems for organizations (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
			</div>
			<div class="w-full md:w-1/3 px-4 pb-8">
				<div class="text-center pb-4 font-sans"><i class=" icon-telescope text-2xl " style="color: #8AC03C; "></i></div>
	            <h5 class="text-center pb-2 font-sans font-medium">WHAT WE OFFER</h5>
	            <p class="text-center text-muted text-sm font-sans">We offer consultancy services in management control systems, research for academic industrial, and socio-politico-economic organizations and International Journal Publication facility</p>
			 </div>
		</div>
</div><!-- end of container -->

<div class="bg-grey-lightest py-16">
   <div class="container mx-auto">
    	<h5 class="text-muted text-center pb-2 font-sans font-medium text-3xl ">Awesome Quotes  <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" ></h5>

      <div id="carouselExampleIndicators" class="carousel slide mt-8" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
               <p class="text-center text-sm  font-sans ">"If Life is War indeed, then the battlefield is the mind, and choice declares the winner"</p>
               <p class="italic font-sans text-sm text-center " style="color: #8AC03C; "> Kofi Amponsah-Kwatiah</p>
              </div>
            <div class="carousel-item">
               <p class="text-center text-sm  font-sans ">"The architect of tomorrow's image in life is the choice made today."</p>
               <p class="italic font-sans text-sm text-center " style="color: #8AC03C; "> Kofi Amponsah-Kwatiah</p>
            </div>
          </div><!-- end of carousel inner -->
      </div><!-- end of carousel -->

</div>
</div>
</div>
  
   <div class=" pt-4 pb-4" style="background-color: #111111;">  
  <div class="container mx-auto">
    <div class=" flex flex-wrap mt-5 -mx-4 leading-normal">

      <div class="w-full md:w-1/4 px-4 font-sans pb-4">
        <img src="/img/logosmall.png" alt="">
        <p class="text-justify text-sm mt-2" style="color: #7d7d7d;">Mcrc Company 453 High Street, Accra Ghana.</p>
        <div class="text-white">
          <p style="color: #7d7d7d;"><i class="fa fa-phone" style="color: #8AC03C;"></i> &nbsp; +233 026 976 8163 </p>
          <p style="color: #7d7d7d;"><i class="fa fa-envelope" style="color: #8AC03C;"></i> &nbsp; infomcrc@gmail.com </p>
          <p style="color: #7d7d7d;"><i class="fa fa-globe" style="color: #8AC03C;"></i> &nbsp; +233 026 976 8163 </p>
        </div>
      </div>

      <div class="w-full md:w-1/4 px-4 font-sans pb-4">
        <h6 class="font-thin text-white text-xl"> Opening Hours</h6>
        <div ><!-- useful links -->
          <p style="color: #7d7d7d;">  Monday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p style="color: #7d7d7d;">  Tuesday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p style="color: #7d7d7d;">  Wednesday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p style="color: #7d7d7d;">  Thursday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p style="color: #7d7d7d;">  Friday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p style="color: #7d7d7d;">  Weekends: &nbsp; &nbsp; <span style="color: #8AC03C;">Closed </span> </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;"> 
        </div>  
      </div>

      <div class="w-full md:w-1/4 px-4 font-sans pb-4 ">
        <h6 class="font-thin text-white text-xl"> Latest News</h6>
          @foreach($posts as $post)
             <div class="pb-2 flex">
              <div class="flex-no-shrink">
                <img src="/img/{{ $post->image }}" class="w-24 h-16 mr-4" alt="{{ $post->title }}">
              </div>
              <div>
                <p class="font-sans font-medium" style="color: #7d7d7d;">{{ $post->title }} <br> <span class="font-normal" style="color: #8AC03C;"> {{ $post->created_at->toFormattedDateString()}}</span> <p>
              </div>
            </div>
          @endforeach
      </div>

      <div class="w-full md:w-1/4 px-4 font-sans pb-4 ">
        <h6 class="font-thin text-white text-xl"> Useful Links </h6>
        <div ><!-- useful links -->
          <p class="clearfix"><a href="/" style="color: #7d7d7d;"> Home</a></p>
          <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p><a href="about" style="color: #7d7d7d;"> About Us</a></p>
          <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p><a href="posts" style="color: #7d7d7d;"> Blog</a></p>
          <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p><a href="book" style="color: #7d7d7d;"> Book Us</a></p>
          <hr class="" style=" border: none; border-top: 1px dotted #333333;">
          <p><a href="/contact" style="color: #7d7d7d;"> Contact Us</a></p>
          <hr class="" style=" border: none; border-top: 1px dotted #333333;">
        </div>
      </div>

      
        </div> <!-- end of flex -->
   </div><!-- container-->
</div><!-- container-->

<footer class=" flex items-center justify-between py-2" style="background-color: #222222;">
    <div class="w-full md:w-1/2 ">
        <p class="text-sm px-4 font-sans text-sm" style="color: #7d7d7d;"> Copyright &copy; 2019 <span style="color: #8AC03C;">MCRC</span>, All Rights Reserved. </p>
    </div>
    <div class="w-full md:w-1/2 text-right px-4 ">
        <i class="fa fa-twitter pr-2" style="color: #8AC03C;"></i>
        <i class="fa fa-linkedin pr-2" style="color: #8AC03C;"></i>
        <i class="fa fa-instagram pr-2" style="color: #8AC03C;"></i>
        <i class="fa fa-facebook pr-2" style="color: #8AC03C;"></i>
    </div>
</footer>




@endsection
