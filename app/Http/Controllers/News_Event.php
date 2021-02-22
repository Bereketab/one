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
            'id'=>'nullable',
            'type' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'title' => 'required',
        ]);  
        if($request->hasFile('image')){
            $imagename = $request->image->getClientOriginalName();
            $location = public_path('image/news');
            $request ->image->move($location,$imagename);
        }
        $data2=a::updateOrCreate(['id' => $request->id],
                    ['title' => $request->title, 'description' => $request->description, 'type' => $request->type, 'image' => $imagename]);
                    return Response::json($data2);
        
    
        
    }
    public function news_list()
    {
        $data = a::get();
        return Response::json($data,$imagename);
        
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
        $data = a::latest()->limit(10)->get();
        return view('pages.news',['data'=>$data]);
        
    }
    public function news_detail($id)
    {
        $data = a::find($id);
        return view('pages.news_detail', ['data' => $data]);
        
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
    public function filter_news()
    {
        $data = a::where('type','news')->get();
        return view('pages.news_filter', ['data' => $data]);
        
    }
    public function filter_event()
    {
        $data = a::where('type','Event')->get();
        return view('pages.news_filter', ['data' => $data]);
        
    }
   
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $data  = a::where($where)->first();
      
        return Response()->json($data);
    }
    public function destroy(Request $request)
    {
        $data = a::where('id',$request->id)->delete();
      
        return Response()->json($data);
    }

    
}
