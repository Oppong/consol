@extends('master')
@section('title', ' | Blog page')


@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div style=" background-color: black; "><img class="d-block w-100" src="/img/{{ $post->image }}" style="width: 1366px; height: 400px; opacity: 0.3; " ></div>
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 animated fadeInDown delay-1s font-sans font-thin "><strong> {{ $post->title }} </strong></h3>
        <p class="font-sans font-thin text-p text-white text-center animated fadeInUp delay-1s ">{!! substr($post->body, 0, 100 ) !!} ...</p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div> {{-- end of carousel --}}

<div class="container">

	 <div class="w-full " style="margin-top: 70px;">
		   <h5 class="text-grey-dark font-thin font-sans">{{ $post->title }}</h5>
       <div class="px-6 py-4">
         <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"> Posted By Admin</span>
       </div>
	    <div class="px-2 text-justify mt-4"><p class=" font-sans text-sm ">{!! $post->body!!} </p></div> 
   <div class="px-6 py-2">
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{ $post->category->name}}</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"><i class="fa fa-comments text-muted" > </i>  {{ $post->comments->count() }}</span>
     
    </div>
</div>



<button class="flex-no-shrink text-sm text-white py-1 px-4 mt-4 " style="background-color: #8AC03C;">
     LEAVE A COMMENT
</button>

	  {{-- write a comment for a post --}}

<form action="/comments/{{ $post->id}}" method="Post" class="w-full max-w-md mt-8">
  {{ csrf_field() }}

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-your-name">
        Your Name
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="kesse irene" name="name">
    </div>

  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Your Message
      </label>
      <textarea type="text"class=" appearance-noneblock w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="body" name="body" cols="20" rows="5" required></textarea>   
    </div>

    <div class="class="mb-4"">
        <button type="submit" class=" text-white text-sm py-1  px-4 rounded-full mr-3" style="background-color: #8AC03C;">Post Comment</button>
    </div>
  </div>
  </div>
</form>

</div> {{-- end of container --}}



{{-- show comments for a post --}}
<div class="container mx-auto">
     
          ALL COMMENTS
  
      <div class="mt-4 pl-8">
            @foreach($post->comments as $comment)
                <div class="flex">
                    <img class="bg-grey-light rounded-full h-8 w-8 flex-no-shrink mr-4" src="" alt="">
                    <div class="">
                       <p class="font-sans"> <strong style="color: #a4b83b;  ">{{ $comment->name }}</strong> <br> <span class="text-muted small">{{$comment->created_at->diffForHumans() }}</span> </p>
                       <p class="font-sans text-sm w-full">{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach
      </div>
</div><!-- end of container -->

@endsection



@section('footer')

	@include('partials.footer')

@endsection