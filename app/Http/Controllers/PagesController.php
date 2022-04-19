<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use  App\Models\Slider;
use  App\Models\News;
use App\Models\Photo;
use App\Models\Result;
use App\Models\Contact;
use App\Models\NewsView;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function slug()
    {
        $text = 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer';

        return Str::slug($text, '-');
    }
    public  function  home()
    {
        $sliders = Slider::all();
        $newss = News::all();
        $photos = Photo::all();
        $results = Result::all();
        return view('frontend.index', compact('sliders', 'newss', 'photos', 'results'));
    }

    public  function  newsShow(Request $request, $slug)
    {
        $news = News::with('views')->where('slug', '=', $slug)->firstOrFail();
        $view = NewsView::where('news_id', '=', $news->id)->where('ip', '=', $request->ip())->first();
        if (!$view) {
            NewsView::create(['news_id' => $news->id, 'ip' => $request->ip()]);
        }
        $news = News::with('views')->findOrFail($news->id);
        $newss = News::where('slug', '!=', $slug)->inRandomOrder()->limit(4)->get();
        return  view('frontend.news-single', [
            'news' => $news,
            'newss' => $newss
        ]);
    }

    public  function  New()
    {
        $new = News::paginate(3);
        return view('frontend.New', [
            'new' => $new,
        ]);
    }

    public  function  allPhoto()
    {
        $photos = Photo::paginate(6);
        return  view('frontend.allphoto', compact('photos'));
    }

    public  function  aboutShow()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public  function  contact()
    {
        $contacts = Contact::all();
        return  view('frontend.contact', compact('contacts'));
    }

    public  function  flag()
    {
        return  view('frontend.flag');
    }

    public  function  gerb()
    {
        return  view('frontend.gerb');
    }

    public  function  madhiya()
    {
        return  view('frontend.madhiya');
    }
    public function contactSend(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'desc' => 'required',
        ]);

        Contact::create($data);
        session()->flash('message', 'Successfully  sent');
        return back();
    }
}
