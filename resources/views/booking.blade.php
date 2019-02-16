@extends('master')
@section('title', ' Booking Page')


@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/bookus.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" xt-center display-6 animated fadeInDown delay-1s font-sans semibold text-5xl"><strong> Book Us Now</strong></h3>
        <p class=" font-sans font-thin text-p text-white  animated fadeInUp delay-1s pb-3">Let's get   <span style="color: #8AC03C;">in touch</span> to talk more about your business </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container mx-auto mt-16">
	
	<div class="flex flex-wrap">
		 <h5 class=" w-full text-muted pb-2 text-2xl font-sans font-thin text-center">Make an Appointment With Us <br> <span class="text-sm">Closed on Weekends</span></h5>
		 

		 <form action="/booking" method="POST" class="w-full max-w-md mx-auto mt-8">
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
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone">
       Phone
      </label>
      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="phone" type="text" placeholder="eg: 020 123 456 7890" name="phone">
    </div>

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

    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="appdate">
       Appointment Date
      </label>
      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="appdate" type="date" placeholder="" name="appdate">
    </div>

 
     <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="apptime">
       Appointment Time
      </label>
     <div class="relative">
	      <select name="apptime" id="apptime" class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
	      	 <option value="">Choose Time</option>
	      	 <option >12:00pm - 2:00pm</option>
	      	 <option >3:00pm - 5:00pm</option>
	      	 <option >6:00pm - 8:00pm</option>
	      </select>
	      <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>

    </div>{{--  end of relative --}}
    </div>

 </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
       <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="body">
        Enter Message
      </label>
      <textarea type="text"class=" appearance-noneblock w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="body" name="body" cols="20" rows="5" required></textarea>   
    </div>
  </div>

   <div class="mb-4">
        <button type="submit" class=" text-white text-sm py-2  px-4 rounded-full mr-3" style="background-color: #8AC03C;">Submit</button>
    </div>
   @include('partials.errors')
</form>

 

		
	</div>
</div>


@endsection