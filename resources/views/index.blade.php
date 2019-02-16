@extends('welcome')

@section('title', ' Home Page')


@section('content')


	<div class="container mt-32">
		<div class="flex flex-wrap -mx-4">
			
			<div class="w-full md:w-1/3 mb-5 px-4">
				<i class="icon-presentation text-4xl mb-4 text-center" style="color: #8AC03C; "></i>
				<h5 class="font-sans font-semibold text-muted "> Professional Support for Your Business</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<i class="icon-briefcase text-4xl mb-4 text-center" style="color: #8AC03C; "></i>
				<h5 class="font-sans font-semibold text-muted "> Smart and Excellent Business Solutions</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<i class="icon-bargraph text-4xl mb-4 text-center" style="color: #8AC03C; "></i>
				<h5 class="font-sans font-semibold text-muted "> Crafting of Strategies for Your Business</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
			</div>

		</div><!-- end of flex -->
	</div><!-- end of container -->

<div class="bg-grey-lightest py-32 mt-16">
   <div class="container mx-auto">
    	<h5 class="text-muted text-center pb-2 text-2xl font-sans font-medium text-3xl ">What we do <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" > </h5>
		 

		<div class="flex flex-wrap -mx-4">
			
			<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/business.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold "> Professional Support for Your Business</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/team.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold ">Academic Research</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/business.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold ">General Business Consult</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>

				<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/team.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold "> Management Control Systems</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/business.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold ">Industrial Research</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>

			<div class="w-full md:w-1/3 mb-5 px-4">
				<img src="/img/team.jpg" alt="" class="mb-4">
				<h5 class="font-sans font-semibold ">International Journal Publication</h5>
				<p class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quaerat aperiam quibusdam suscipit accusantium</p>
				<p class="font-sans font-semibold" style="color: #8AC03C; ">Read More &raquo;</p>
			</div>	

		</div><!-- end of flex -->
    </div> {{-- container --}}
</div>







<div class="container mt-32">
	<div class="flex flex-wrap">
		 
		<h5 class=" w-full text-muted text-center pb-2 text-2xl font-sans font-medium text-3xl ">Send a Request <br> <hr style=" border: none; height: 2px; background-color: #8AC03C; width: 5%;" align="center" > </h5>





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

     <div class="w-full md:w-1/2 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone">
        Phone
      </label>
      <input class="appearance-none block w-full bg-white text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-grey-lighter" id="phone" type="text" placeholder="eg: 020 123 456 7890"" name="phone">
    </div>

<div class="w-full md:w-1/2 px-3">
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


<div class="w-full mt-4">
       <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="body">
        Enter Message
      </label>
      <textarea type="text"class=" appearance-noneblock w-full bg-white text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="body" name="body" cols="20" rows="5" required></textarea>   
</div>

 <div class="mb-4">
        <button type="submit" class=" text-white text-sm py-2  px-4 rounded-full mr-3" style="background-color: #8AC03C;">Submit</button>
        <a class=" text-muted text-sm mr-3" href="/booking" > Book an Appointment <span style="color: #8AC03C;"> &raquo; </span></a>
    </div>

         @include('partials.errors')
     </form>	 
</div><!-- end of first section -->



  
   
		
	</div>
</div> 

@endsection