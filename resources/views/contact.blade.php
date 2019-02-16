@extends('master1')
@section('title', ' Contact Page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/contact1.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
       <h3 class=" text-center display-6 animated fadeInDown delay-1s font-sans semibold text-5xl"><strong> Get  <span style="color: #8AC03C;">In Touch</span> </strong></h3>
        <p class=" font-sans font-thin text-p text-white  animated fadeInUp delay-1s pb-3">Our team will be with you shortly</p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container ">
     <div class="mt-16">

        <div class="flex flex-wrap -mx-4">
            <h5 class=" w-full text-muted pb-2 font-sans font-medium text-3xl text-center">Have any Question? <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" ></h5>

            <div class="w-full md:w-1/3 px-4">
                <div class="text-center text-3xl"><i class=" fa fa-envelope " style="color: #8AC03C;"></i></div>
                <p class="text-center">Mail us Today <br> <span class="text-muted">informcrc20@gmail.com</span></p>
            </div>

            <div class="w-full md:w-1/3 px-4">
                <div class="text-center text-3xl"><i class=" fa fa-phone " style="color: #8AC03C;"></i></div>
                <p class="text-center">Call us  <br> <span class="text-muted">+233 026 976 8163</span></p>
            </div>

            <div class="w-full md:w-1/3 px-4">
                <div class="text-center text-3xl"><i class=" fa fa-location-arrow " style="color: #8AC03C;"></i></div>
                <p class="text-center">Address <br> <span class="text-muted">453 High Street, Accra Ghana</span></p>
            </div>
        </div> <!-- end of flex -->
   </div><!-- end of mt-16 -->
</div><!-- end of container -->




<div class="mt-16 py-16" style="background-color: #fbfbfb;">


<div class="container mx-auto">
  <h5 class=" w-full text-left pb-4 font-sans font-medium text-3xl text-center text-muted"  style="color: #8AC03C;">Please Message Us <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" ></h5>
              
<form action="/contact" method="POST" class="w-full max-w-md mx-auto">
	{{ csrf_field() }}

  <div class="flex flex-wrap mb-6">
    <div class="w-full md:w-1/2 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
        Name
      </label>
      <input class="appearance-none block w-full bg-white text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-grey-lighter" id="name" type="text" placeholder="irene kesse" name="name">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
        Email
      </label>
      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="email" type="email" placeholder="info@example.com" name="email">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="subject">
        Subject
      </label>
        <div class="relative">
        <select name="subject" id="subject" class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
           <option value="">Choose Subject</option>
           <option >Management Control Systems</option>
           <option >International Journal Publication</option>
           <option >Academic Research</option>
           <option >Industrial and Socio-Politico-Economic Research</option>
           <option >General Business Consult</option>
           <option >Other</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>

    </div>{{--  end of relative --}}
     
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
       <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Your Message
      </label>
      <textarea type="text"class=" appearance-noneblock w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="body" name="message" cols="20" rows="5" required></textarea>   
    </div>
  </div>

   <div class="class="mb-4"">
        <button type="submit" class=" text-white text-sm py-2  px-4 rounded-full mr-3" style="background-color: #8AC03C;">Send your message</button>
    </div>

</form>


 @include('partials.errors')

</div><!-- end of container -->

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