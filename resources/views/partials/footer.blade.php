<div class=" pt-4 pb-4 mt-16" style="background-color: #111111;">	
	<div class="container mx-auto">
		<div class=" flex flex-wrap mt-5 -mx-4 leading-normal">

			<div class="w-full md:w-1/4 px-4 font-sans pb-4">
				<img src="/img/logosmall.png" alt="">
				<p class="text-justify text-sm mt-2" style="color: #7d7d7d;">Mcrc Company 453 High Street, Accra Ghana.</p>
				<div class="text-white">
					<p style="color: #7d7d7d;"><i class="fa fa-phone" style="color: #8AC03C;"></i> &nbsp; +233 026 976 8163 </p>
					<p style="color: #7d7d7d;"><i class="fa fa-envelope" style="color: #8AC03C;"></i> &nbsp; informcrc20@gmail.com </p>
					<p style="color: #7d7d7d;"><i class="fa fa-globe" style="color: #8AC03C;"></i> &nbsp; +233 026 976 8163 </p>
				</div>
			</div>

			<div class="w-full md:w-1/4 px-4 font-sans pb-4">
				<h6 class="font-thin text-white text-xl"> Opening Hours</h6>

				<div >
					<p style="color: #7d7d7d;">  Monday - Wednesday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
					<p style="color: #7d7d7d;">  Thursday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
					<p style="color: #7d7d7d;">  Friday: &nbsp; &nbsp; 9:00am - 4:00pm </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">
					<p style="color: #7d7d7d;">  Saturday - Sunday: &nbsp; &nbsp; <span style="color: #8AC03C;">Closed </span> </p> <hr class="" style=" border: none; border-top: 1px dotted #333333;">	
				</div>	
			</div>

			<div class="w-full md:w-1/4 px-4 font-sans pb-4 ">
				<h6 class="font-thin text-white text-xl"> Latest News</h6>
					@foreach($posts as $post)
				     <div class="pb-2 flex">
							<div class="flex-no-shrink">
								<img src="/img/{{ $post->image }}" class="w-16 h-16 mr-4" alt="{{ $post->title }}">
							</div>
							<div>
								<p class="font-sans font-medium" style="color: #7d7d7d;">{{ $post->title }} <br> <span class="font-normal text-sm" style="color: #d2d2d2;"> {{ $post->created_at->toFormattedDateString()}}</span> <p>
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

