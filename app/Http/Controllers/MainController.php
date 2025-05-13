<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use App\Models\Review;
use App\Models\Work;
use App\Models\TextVariable;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $language = session()->get('language') ?? 'en';
        $posts = Post::where('lang', $language)->latest()->take(3)->get();
        $reviews = Review::where('lang', $language)->latest()->take(5)->get();
        $textVariables = TextVariable::all()->keyBy('key');
        return view('index', compact('posts', 'reviews', 'textVariables'));
    }

    public function portfolio()
    {
        $textVariables = TextVariable::all()->keyBy('key');
        $works = Work::latest()->get();
        return view('portfolio', compact('works', 'textVariables'));
    }

    public function price()
    {
        $textVariables = TextVariable::all()->keyBy('key');
        return view('price', compact('textVariables'));
    }

    public function reviews()
    {
        $language = session()->get('language') ?? 'en';
        $reviews = Review::where('lang', $language)->latest()->paginate(2);
        $textVariables = TextVariable::all()->keyBy('key');
        return view('reviews', compact('reviews', 'textVariables'));
    }

    public function contact()
    {
        $textVariables = TextVariable::all()->keyBy('key');
        return view('contact', compact('textVariables'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        Message::firstOrCreate($data);
        return redirect()->route('contact')->with('msg', 'Successfully sent!');
    }
}
