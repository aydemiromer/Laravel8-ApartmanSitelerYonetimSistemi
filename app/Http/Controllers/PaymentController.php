<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Payment::where('user_id',Auth::id())->get();
        return view('home.user_payment',['datalist'=>$datalist]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $price= $request->input('price');
        return view('home.user_payment_add',['price'=>$price]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Payment();

        $data->user_id=Auth::id();
        $data->year =$request->input('year');
        $data->month = $request->input('month');
        $data->location = $request->input('location');
        $data->flatnumber = $request->input('flatnumber');
        $data->adminnote = $request->input('adminnote');
        $data->payment = $request->input('payment');



        $data->save();
        return redirect() -> route('user_payment')->with('success','Mesajınız başarılı bir şekilde iletilmiştir!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit_store(Request $request,$id)
    {
        $data = Payment::find($id);

        $data->year =$request->input('year');
        $data->month = $request->input('month');
        $data->location = $request->input('location');
        $data->flatnumber = $request->input('flatnumber');
        $data->adminnote = $request->input('adminnote');

        $data->save();
        return redirect() -> route('user_payment')->with('success','Mesajınız başarılı bir şekilde iletilmiştir!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment,$id)
    {
        $data = Payment::find($id);
        $data->save();
        return view('home.user_payment_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment,$id)
    {
        $data = Payment::find($id);
        $data->year =$request->input('year');
        $data->month = $request->input('month');
        $data->location = $request->input('location');
        $data->flatnumber = $request->input('flatnumber');
        $data->adminnote = $request->input('adminnote');
        $data->status =$request->input('status');
        $data->save();
        return redirect()->back()->with('success','Payment Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
