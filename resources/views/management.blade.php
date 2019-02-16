@extends('master')
@section('title', ' Management Controls Page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/bookus.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" xt-center display-6 animated fadeInDown delay-1s font-sans semibold text-5xl"><strong> Management Control Systems</strong></h3>
        <p class=" font-sans font-thin text-p text-white  animated fadeInUp delay-1s pb-3">Provides  <span style="color: #8AC03C;">consultancy services </span> <br> in management control systems for organizations in the pursuit of their corporate goals and objectives </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container mt-16">
	<div class="flex flex-wrap -mx-4">


{{-- management control systems --}}

	    <div class="w-full md:w-2/3 px-4">

	 	<div class="pb-2 flex">
			<div class="flex-no-shrink">
				<i class="icon-layers text-2xl mr-4" style="color: #8AC03C;"></i>
			</div>
			
			<div>
				<h6 class=" w-full text-muted pb-2 text-2xl font-sans font-medium " style="color: #8AC03C;">Managment Control Systems
					<br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 10%;" align="left" >
				</h6>

				<p class="font-sans" style="color: #7d7d7d;">Provides consultancy services in management control systems for organizations(of all types and sizes) in the pursuit of their corporate goals and objectives: <p>

					<ul style="color: #7d7d7d; line-height: 30px;" >
						<li>Design of organizational structure</li>
						<li>Design of work processes</li>
						<li>Documentation of Control tools/instruments - operational manuals, policies, customized procedures for specific activities, etc.</li>
						<li>Crafting of corporate strategies</li>
						<li>Training in the preparation and management of control tools/instruments, and </li>
						<li>Many more services (solutions) for ensuring effective and efficient utilization of organizational resources through management functions to achieve goals and objectives.</li>
					</ul>

			    <blockquote class=" bg-white shadow pr-4 italic font-sans text-muted flex mb-4 ">
			    	<div class="px-1 py-4 mr-4" style="background-color: #8AC03C;">
			    		
			    	</div>
			    	<div class="py-4">
			    		What is choice that you must be mindful of? it is your life's designer. The one you make is the life you lead. <br> <br>
			    		<em class="font-sans font-normal text-center" style="color: #8AC03C;"> Kofi Amponsah-Kwatiah</em>
			    	</div>
			    </blockquote>

			</div>

		</div><!--end of flex1 -->
 </div><!--end of w-full -->


{{-- section b of managmentt --}}

		<div class="w-full md:w-1/3 px-4">

			{{-- services list section --}}
			<h5 class=" w-full text-muted pb-2 text-2xl font-sans font-medium ">Our <span style="color: #8AC03C;"> Services </span>
				<br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 15%;" align="left" > </h5>

			<div class="mb-4 flex flex-wrap">
				<a class="py-2 text-white text-sm hover:no-underline mb-2 pr-8 pl-2 font-sans w-full" style="background-color: #8AC03C;" href="/management">Management Control Systems</a>

				<a class="py-2 text-white text-sm hover:no-underline mb-2 pr-8 pl-2 font-sans w-full" style="background-color: #8AC03C;" href="/journal">International Journal Publication</a>

				<a class="py-2 text-white text-sm hover:no-underline mb-2 pr-8 pl-2 font-sans w-full" style="background-color: #8AC03C;" href="/academic">Academic Research</a>

				<a class="py-2 text-white text-sm hover:no-underline mb-2 pr-8 pl-2 font-sans w-full" style="background-color: #8AC03C;" href="/industrial">Industrial and Socio-Politico-Economic Research</a>

				<a class="py-2 text-white text-sm hover:no-underline mb-2 pr-8 pl-2 font-sans w-full" style="background-color: #8AC03C;" href="/general">General Business Consult</a>

			</div>
	

 {{-- Make an appointment section --}}

		<h5 class=" w-full text-muted pb-2 text-2xl font-sans font-medium mt-4">Make an <span style="color: #8AC03C;"> Appointment </span>
		<br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 15%;" align="left" >
		</h5>
		
		 <form action="/management" method="POST" class="w-full mt-2 shadow-sm px-4 py-4 mb-4" style="background-color: #F8FAFC;">
	          {{ csrf_field() }}

			    <div class="">
			      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
			        Name
			      </label>
			      <input class="appearance-none block w-full bg-white text-grey-darker border border-red rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-grey-lighter" id="name" type="text" placeholder="irene kesse" name="name">
			    </div>

			    <div class="">
			      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
			        Email
			      </label>
			      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="email" type="email" placeholder="info@example.com" name="email">
			    </div>

			    <div class=" ">
			      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone">
			       Phone
			      </label>
			      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="phone" type="text" placeholder="eg: 020 123 456 7890" name="phone">
               </div>

           <div class="">
			      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="subject">
			       Subject
			      </label>
			        <select name="subject" id="subject" class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
			           <option >Management Control Systems</option>
			        </select>
            </div>

		    <div class="">
		      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="appdate">
		       Appointment Date
		      </label>
		      <input class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="appdate" type="date" placeholder="" name="appdate">
		    </div>

 
     <div class="">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="apptime">
	       Appointment Time
	      </label>
	     <div class="relative">
		      <select name="apptime" id="apptime" class="appearance-none block w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
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

    <div class="">
       <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="body">
        Enter Message
      </label>
      <textarea type="text"class=" appearance-noneblock w-full bg-white text-grey-darker border border-grey-lighter rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="body" name="body" cols="20" rows="5" required></textarea>   
    </div>

    <div class="mb-4">
        <button type="submit" class=" text-white text-sm py-2  px-4 rounded-full mr-3" style="background-color: #8AC03C;">Submit</button>
    </div>
    
   @include('partials.errors')
          

	     </form>


	  {{-- working hours section --}}

			<h5 class=" w-full text-muted pb-2 text-2xl font-sans font-medium ">Working<span style="color: #8AC03C;"> Hours </span>
				 <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 15%;" align="left" >
			</h5>
			<div >
					<p style="color: #7d7d7d;">  Monday - Wednesday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #d2d2d2;">
					<p style="color: #7d7d7d;">  Thursday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #d2d2d2;">
					<p style="color: #7d7d7d;">  Friday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #d2d2d2;">
					<p style="color: #7d7d7d;">  Saturday - Sunday: &nbsp; &nbsp; <span style="color: #8AC03C;">Closed </span> </p> <hr class="" style=" border: none; border-top: 1px dotted #d2d2d2;">	
				</div>	


</div><!-- end of md:w-1/3 -->


	</div><!-- end of flex -->
</div><!-- end of container -->
@endsection
