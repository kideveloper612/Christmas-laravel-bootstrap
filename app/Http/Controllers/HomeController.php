<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Session;
use Illuminate\Routing\UrlGenerator;
use App\Customers;

class HomeController extends Controller
{
    protected $url;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UrlGenerator $url)
    {
        // $this->middleware('auth');
        $this->url = $url;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form1()
    {
        return view('Form1');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form2(Request $req)
    {
        $gender = $req->gender;
        session()->put('gender', $gender);
        return view('Form2');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form3(Request $req)
    {
        $upload_name = $req->upload_photo->getClientOriginalName();
        $download_name = $req->download_photo->getClientOriginalName();
        $req->upload_photo->move(public_path('upload/upload-image/'), $upload_name);
        $req->download_photo->move(public_path('upload/download-image/'), $download_name);
        $upload_image_path = $this->url->to('/').'/upload/upload-image/'.$upload_name;
        $download_image_path = $this->url->to('/').'/upload/download-image/'.$download_name;
        session()->put('name', $req->name);
        session()->put('age', $req->age);
        session()->put('photo1', $upload_image_path);
        session()->put('photo2', $download_image_path);
        session()->put('comment', $req->comment);
        session()->put('advice', $req->advice);
        return view('Form3');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form4(Request $req)
    {
        $Family_Photo_name = $req->Family_Photo->getClientOriginalName();
        $Room_Photo_name = $req->Room_Photo->getClientOriginalName();
        $Letter_Photo_name = $req->Letter_Photo->getClientOriginalName();

        $req->Family_Photo->move(public_path('upload/Family_Photo/'), $Family_Photo_name);
        $req->Room_Photo->move(public_path('upload/Room_Photo/'), $Room_Photo_name);
        $req->Letter_Photo->move(public_path('upload/Letter_Photo/'), $Letter_Photo_name);

        $Family_Photo_Path = $this->url->to('/').'upload/Family_Photo/'.$Family_Photo_name;
        $Room_Photo_Path = $this->url->to('/').'upload/Family_Photo/'.$Room_Photo_name;
        $Letter_Photo_Path = $this->url->to('/').'upload/Family_Photo/'.$Letter_Photo_name;
        session()->put('Family_Photo', $Family_Photo_Path);
        session()->put('Room_Photo', $Room_Photo_Path);
        session()->put('Letter_Photo', $Letter_Photo_Path);

        return view('Form4');
    }

    public function mail(Request $req)
    {
        $customer = new Customers;
        $customer->Kid_Gender = session()->get('gender');
        $customer->Kid_Name = session()->get('name');
        $customer->Kid_Age = session()->get('age');
        $customer->Kid_Photo1 = session()->get('photo1');
        $customer->Kid_Photo2 = session()->get('photo2');
        $customer->Kid_Family_Photo = session()->get('Family_Photo');
        $customer->Kid_Room_Photo = session()->get('Room_Photo');
        $customer->Kid_Letter_Photo = session()->get('Letter_Photo');
        $customer->Kid_Comment = session()->get('comment');
        $customer->Kid_Advice = session()->get('advice');
        $customer->Customer_Name = $req->customer_name;
        $customer->Customer_Email = $req->customer_email;
        $customer->save();

        Session::forget('gender');
        Session::forget('name');
        Session::forget('age');
        Session::forget('photo1');
        Session::forget('photo2');
        Session::forget('Family_Photo');
        Session::forget('Room_Photo');
        Session::forget('Letter_Photo');
        Session::forget('comment');
        Session::forget('advice');

       
        return redirect()->route('Form1')->with('success', 'Successfully email was sent!');
    }

}
