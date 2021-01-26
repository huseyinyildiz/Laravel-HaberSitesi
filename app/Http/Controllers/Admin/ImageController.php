<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($news_id)
    {
        $data=News::find($news_id);
        $images=DB::table('images')->where('news_id','=',$news_id)->get();
        return view('admin.image_add',['data'=>$data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $news_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$news_id)
    {
        $data = new Image;

        $data->title=$request->input('title');
        $data->news_id=$news_id;
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();

        return redirect()->route('admin_image_add', ['news_id'=>$news_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$news_id)
    {
        $data=Image::find($id);
        $data->delete();
        return redirect()->route('admin_image_add', ['news_id'=>$news_id]);
    }
}
