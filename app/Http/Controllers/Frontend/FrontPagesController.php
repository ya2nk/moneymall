<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Article\Entities\Page;

class FrontPagesController extends Controller
{
    /**
     * homePage
     *
     * HomePage of Application
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function articles()
    {
        return view('frontend.articles');
    }

    public function tradingSupport()
    {
        return view('frontend.trading-support');
    }

    public function tradingSupportCalendar()
    {
        return view('frontend.trading-support-calendar');
    }

    public function download()
    {
        return view('frontend.download');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getPageBySlug($slug)
    {
        return response(Page::where('slug',$slug)->first());
    }

    public function policy($type)
    {
        return view('frontend.policy',compact('type'));
    }
}
