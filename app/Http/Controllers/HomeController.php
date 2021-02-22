<?php

namespace App\Http\Controllers;
use App\Models\News_Event as a;
use Illuminate\Http\Request;
use Datatables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(request()->ajax()) {
            return datatables()->of(a::select('*'))
            ->addColumn('action', 'pages.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('home2');
    }
}
