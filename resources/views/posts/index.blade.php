@extends('master')
@section('title', ' Blog Page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/blog1.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" xt-center display-6 animated fadeInDown delay-1s font-sans semibold text-5xl"><strong> Today Business </strong></h3>
        <p class=" font-sans font-thin text-p text-white  animated fadeInUp delay-1s pb-3">Latest news about <span style="color: #8AC03C;">today businesses,</span> <br> their strength,weaknesses and achievements </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>



<div class="container">
    <div class="flex flex-wrap mt-32 -mx-4">

      <div class="w-full md:w-2/3 mb-4">
         <div class="flex flex-wrap ">
           @foreach($blogs as $blog)
			             <div class="  w-full md:w-1/2 pb-16 px-4">	
							<div class="max-w-sm rounded overflow-hidden shadow ">
							  <img class="w-full" src="/img/{{ $blog->image }}" alt="{{ $blog->title }}">
							  <div class="px-6 py-4">
							    <a href="/posts/{{ $blog->id }}" class="text-grey-dark font-thin"><div class=" text-base mb-2">{{ $blog->title }}</div></a>
							    <p class="text-grey-darker text-sm">
							      {!! substr($blog->body, 0, 200 ) !!} ...
							    </p>
							    <p class="text-grey-dark"> {{ $blog->created_at->diffForHumans()}} </p>
							  </div>
							  <div class="px-6 py-4">
							    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{ $blog->category->name}}</span>
							    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"><i class="fa fa-comments text-muted" > </i>  {{ $blog->comments->count() }}</span>
							  </div>
							</div>
						 </div>
			         @endforeach 
        </div> {{-- end of inner flex --}}

      </div> {{-- end of w-2/3 --}}

    <div class=" w-full md:w-1/3 px-4 ">    
          <h5 class=" w-full mb-1 font-sans text-muted ">Latest Post</h5>
          @foreach($recent as $recent)
              <div class="w-full ">
                 <div class="flex items-center">
                     <img src="/img/{{ $recent->image }}" alt="" class="w-16 h-16">
                     <div class="ml-2">
                        <a href="/posts/{{ $recent->id }}"><h6 class="font-sans text-grey-dark font-thin pt-3 pb-1 pl-2 ">{{ $recent->title }}</h6></a>
                         <div class="px-2 text-justify text-sm pb-2"><p class=" font-sans text-sm">{!! substr($recent->body, 0, 80 ) !!} ...</p></div>
                     </div>
                  </div>
              </div>
              <hr class="" style=" border: none; border-top: 1px dotted #d2d2d2;">
          @endforeach

         <h5 class=" w-full mb-1 font-sans text-muted mt-8 mb-2 ">Categories</h5> 
         @foreach($category as $category) 
              <a href="/cats/{{$category->id}}" class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2 mb-3">#{{ $category->name}}</a>
         @endforeach
    </div> {{-- end of w-1/3 --}}

  </div> {{-- end of flex --}}


  <div class="mt-4">
     {{ $blogs->links() }}
  </div> 

</div>





@endsection