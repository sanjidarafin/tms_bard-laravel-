<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use \Input as Input;


class SliderController extends Controller
{

    public function slider_index()
    {
        $all_slider = Slider::all();
        return view('slider_admin/index')->with('all_slider', $all_slider);
    }

    public function upload_slider_image()
    {
        return view('slider_admin/upload_slider_image');
    }


    public function slider_image_store(Request $request)
    {
        $all_slider = Slider::all();
        if($all_slider->isEmpty()){
            $position = 1;            
        }else {
            $position = Slider::all() -> last()->position + 1;               
        }
        $slug = uniqid();
        $file = $request->file('slider_image');        
        $file->move('uploads/', $slug . '__' .$file->getClientOriginalName());
        $file_text = $slug . '__' .$file->getClientOriginalName();
        
        $data = [
            'heading_text' => $request->get('heading_text'),
            'paragraph_text' => $request->get('paragraph_text'),
            'button_text' => $request->get('button_text'),
            'slider_image' => $file_text,
            'position' => $position
        ];
        $slider = new Slider($data);
        $slider->save();
        return redirect('/slider/all');
    }

    public function destroy($id)
    {
        $slider = Slider::whereId($id)->first();
        unlink('uploads/'.$slider->slider_image);
        $slider->delete();

        return redirect('/slider/all');
    }

}
