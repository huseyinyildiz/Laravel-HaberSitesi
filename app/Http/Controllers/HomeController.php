<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }

    public static function countreview($id)
    {
        return Review::where('news_id',$id)->count();
    }
    public static function avrgreview($id)
    {
        return Review::where('news_id', $id)->average('rate');
    }




    public function categorynews($id,$slug,$status)
    {

       // $data=News::find($id);
        //print_r($data);
        //exit();

        $datalist=News::where('category_id',$id)->where('status',$status)->get();
        $data=Category::find($id);
        return view('home.category_news',['data'=>$data,'datalist'=>$datalist]);
    }
    public function getnew(Request $request)
    {
        $search=$request->input('search');
        $count = News::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = News::where('title','like','%'.$search.'%')->first();
            return redirect()->route('new',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('newlist',['search'=>$search]);
        }

    }
    public function newlist($search)
    {
        $datalist = News::where('title','like','%'.$search.'%')->get();
        return view('home.search_news',['search'=>$search, 'datalist'=>$datalist]);
    }


    public function index()
    {
        $setting = Setting::first();
        //slidera random haber geliyor
        $slider = News::select('id','title','image','description','slug')->limit(4)->inRandomOrder()->get();
        $daily = News::select('id','title','image','description','slug')->limit(15)->inRandomOrder()->get();
      //  $old = News::select('id','title','image','description','slug')->limit(4)->orderByDesc()->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily' =>$daily,

            'page'=>'home'
        ];

        return view('home.index',$data);
    }
    public function new($id,$slug)
    {
        $data=News::find($id);
        $datalist = Image::where('news_id',$id)->get();
        $reviews = Review::where('news_id',$id)->get();
        return view('home.news_detail',['data'=>$data, 'datalist'=>$datalist,'reviews'=>$reviews]);

    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about');
    }
    public function faq()
    {
        $datalist=Faq::all()->sortBy('position')->where('status','True');
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact');
    }
    public static function titleshow($id)
    {
        $datalist = News::find($id);
        return $datalist->title;
    }
    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Your message saved,Thanks your feedback');
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references');
    }


    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {

        if ($request->isMethod('post'))
        {
            $credentials=$request->only('email','password');
            if (Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records'
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
/*
public function logout()
{
    return view('home.index');
}
*/

}
