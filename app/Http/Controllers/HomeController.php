<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function menulist(){
        return Menu::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index(){
        $setting=Setting::select('title','description','keywords')->get();
        $slider = Content::select('id','title','image','price')->limit(4)->get();
        $latest = Content::select('id','title','image','price')->limit(5)->orderByDesc('id')->get();


        $data = [

            'setting'=>$setting,
            'slider'=>$slider,
            'latest'=>$latest,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }

    public function content($id){
        $data = Content::find($id);
        $images = \App\Models\Image::where('content_id',$id)->limit(6)->get();
        $reviews = \App\Models\Review::where('content_id',$id)->get();
        return view('home.content_detail',['data' => $data,'images' => $images,'reviews'=>$reviews]);
    }

    public function getcontent(Request $request){
        $search = $request->input('search');
        $count = Content::where('title','like','%'.$search.'%')->get()->count();
        if($count==1){
            $data = Content::where('title','like','%'.$search.'%')->first();
            return redirect()->route('content',['id'=>$data->id]);
        }
        else{
            return redirect()->route('contentlist',['search'=>$search]);
        }
    }

    public function contentlist($search){
        $datalist = Content::where('title','like','%'.$search.'%')->get();
        return view('home.search_contents',['search'=>$search,'datalist'=>$datalist]);
    }


    public function menucontents($id){

        $datalist = Content::where('menu_id',$id)->get();
        $data = Menu::find($id);

        return view('home.menu_contents',['data'=>$data,'datalist'=>$datalist]);
    }


    public function aboutus(){
        $setting=Setting::select('title','description','keywords')->get();
        return view('home.aboutus',['setting'=>$setting]);
    }


    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }


    public function faq(){
        $datalist = Faq::select('id','question','answer')->limit(5)->orderByDesc('id')->get();
        return view('home.faq',['datalist'=>$datalist]);
    }


    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }


    public function sendmessage(Request $request){

        $data = new Message();

        $data->name =$request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect() -> route('contact')->with('success','Mesajınız başarılı bir şekilde iletilmiştir!');
    }


    public function login() {
        return view('admin.login');
    }

    public function logincheck(Request $request){

        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()-> withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
