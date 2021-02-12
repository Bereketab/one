<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_Event as a;
use App\Models\Subscribers;
use Response;

class News_Event extends Controller
{

    public function news_get()
    {
        return view('news_events.add_news_events');
        
    }

    
    public function news_post(Request $request)
    {
        $data=$request->validate([
            'type' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'title' => 'required',
        ]);  
        $news_object = new a;
        $news_object -> type =  $request->get('type');
        $news_object -> image = $request->get('image');
        $news_object -> description = $request->get('description');
        $news_object -> title =  $request->get('title');
        if($request->hasFile('image')){
            $imagename = $request->image->getClientOriginalName();
            $location = public_path('image/news');
            $request ->image->move($location,$imagename);
            $news_object->image = $imagename;
        }
        $news_object->save();
        return   Response::json($data);
        
    }
    public function news_list()
    {
        $data = a::get();
        return Response::json($data);
        
    }
    public function index()
    {
        
        return view('pages.index');
        
    }
    public function about()
    {
        return view('pages.about');
        
    }
    public function news()
    {
        return view('pages.news');
        
    }
    public function news_detail()
    {
        return view('pages.news_detail');
        
    }
    public function product()
    {
        return view('pages.product');
        
    }

    public function subscriber_store_post(Request $request)
    {
       
        $data = $request->validate([

            'email' => 'required|email',
            

        ]);
        $subscriber_obj = new Subscribers;
        // $current_email = $request->get('email');
        $checker = Subscribers::select('email')->where('email',$request->email)->exists();
        if(! $checker){
            $subscriber_obj -> email = $request->get('email');
            $subscriber_obj->save();
            $message = 'Subscribed Sucessfully';
        }
        if($checker){
            $message = 'You already subscribed!';
        }
        
        
        
        
        return   Response::json($message);

        
    
    } 
    
}
