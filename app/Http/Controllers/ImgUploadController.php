<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ImgUploadController extends Controller
{
    //
    public function imgUploadPost(Request $request)
    {
        $request->validate([
            'img'=> 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $randomInt = rand(20000,100000);
        $imgName = $randomInt.time().'.'.$request->img->extension();
        //image {{ asset('images/'.$imgname)}}
        //$request->img->move('images',$imgName);

        $request->img->storeAs('images',$imgName);


        Session::flash('success','Image Uploaded Successfully');
        return redirect()->back();
    }
}
