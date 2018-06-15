<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function index()
    {
        return view('home');
    }

    public function home(){
        return view('homepage.home');
    }

    public function showMail(){
        return view('mail.show');
    }

    public function postMail(Request $request){
//        $this.$this->validate($request,[
//            'email' => 'required|email',
//            'message' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'bodyMessage' => $request->message,
            'survey' => ['Q1' => "hello", 'Q2' => 'YES']
        );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from($data['email']);
            $message->to('remas-c62fe4@inbox.mailtrap.io');
        });

//        Session::flash('success', 'Your Email was sent!');
        session()->flash('notif', 'Your email was sent!');
        return redirect()->to('/sendMail');
    }



}
