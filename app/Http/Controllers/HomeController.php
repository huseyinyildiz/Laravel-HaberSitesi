<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $datalist=News::where('category_id',$id)->get();
        $data=Category::find($id);
        return view('home.category_news',['data'=>$data,'datalist'=>$datalist]);
    }


    public function index()
    {
        $setting = Setting::first();

        return view('home.index');
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
