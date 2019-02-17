<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Slider;

use App\Post;

use App\Category;

use App\Booking;

class PagesController extends Controller
{
    //

    public function index() {

        $sliders = Slider::all(); 

        $posts = Post::latest()->take(3)->get();

        $blogs = Post::latest()->take(3)->get();

    	return view('index', compact('sliders', 'posts', 'blogs'));
    }


    public function contact() {

        $posts = Post::latest()->take(3)->get();

    	return view('contact', compact('posts'));
    }

    public function management() {

         $posts = Post::latest()->take(3)->get();
        return view('management', compact('posts'));
    }

    public function journal() {

         $posts = Post::latest()->take(3)->get();
        return view('journal', compact('posts'));
    }

    public function general() {

         $posts = Post::latest()->take(3)->get();
        return view('general', compact('posts'));
    }

    public function academic() {

         $posts = Post::latest()->take(3)->get();
        return view('academic', compact('posts'));
    }

      public function industrial() {

         $posts = Post::latest()->take(3)->get();
        return view('industrial', compact('posts'));
    }


     public function about() {

         $posts = Post::latest()->take(3)->get();

        return view('about', compact('posts'));
    }

     public function booking() {

         $posts = Post::latest()->take(3)->get();

        return view('booking', compact('posts'));
    }


//booking store for services

    public function generalstore(Request $request) {


    $request->validate([

        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'appdate' => 'required',
        'apptime' => 'required',
        'body' => 'required',
        'subject' => 'required',
    ]);

   //info into database


    $bookings = Booking::create ([

         'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'appdate' => request('appdate'),
            'apptime' => request('apptime'),
            'body' => request('body'),
            'subject' => request('subject'),
    ]);



   //pass in an array for mail

    $data = array(

            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'appdate' => request('appdate'),
            'apptime' => request('apptime'),
            'body' => request('body'),
            'subject' => request('subject'),

    );


    //send to mail

    \Mail::send('emails.booking', $data, function($message) use($data) {

            $message->from($data['email']);
            $message->to('informcrc20@gmail.com');
            $message->subject($data['subject']);
    });

return redirect('/booking')->with('success','Message Sent Successfully!');
    }




//booking store

    public function bookingstore(Request $request) {


    $request->validate([

        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'appdate' => 'required',
        'apptime' => 'required',
        'body' => 'required',
        'subject' => 'required',
    ]);

   //info into database


    $bookings = Booking::create ([

         'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'appdate' => request('appdate'),
            'apptime' => request('apptime'),
            'body' => request('body'),
            'subject' => request('subject'),
    ]);



   //pass in an array for mail

    $data = array(

            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'appdate' => request('appdate'),
            'apptime' => request('apptime'),
            'body' => request('body'),
            'subject' => request('subject'),

    );


    //send to mail

    \Mail::send('emails.booking', $data, function($message) use($data) {

            $message->from($data['email']);
            $message->to('informcrc20@gmail.com');
            $message->subject($data['subject']);
    });

return redirect('/booking')->with('success','Message Sent Successfully!');
    }


     //emails here 
     public function store(Request $request) {

    	//valdiate

     	$request->validate([

     		'name' => 'required',
     		'email' => 'required|email',
     		'subject' => 'required',
     		'message' => 'required'

     	]);

     // pass in an array 
     	$data = array(

     		'name' => request('name'),
     		'email' => request('email'),
     		'subject' => request('subject'),
     		'bodymessage' => request('message'),

     	);

     // send to mail

     	\Mail::send('emails.contact', $data, function($message) use($data) {

     		$message->from($data['email']);
     		$message->to('informcrc20@gmail.com');
    		$message->subject($data['subject']);

     	});

    	return redirect('/contact')->with('success','Message Sent Successfully!');

    }
}
