<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\News;
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
    public function categorynews($id,$slug)
    {

       // $data=News::find($id);
        //print_r($data);
        //exit();

        $datalist=News::where('category_id',$id)->get();
        $data=Category::find($id);
        return view('home.category_news',['data'=>$data,'datalist'=>$datalist]);
    }


    public function index()
    {
        $setting = Setting::first();
        $slider = News::select('id','title','image','description','slug')->limit(4)->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about');
    }
    public function faq()
    {
        $setting = Setting::first();
        return view('home.about');
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact');
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
