<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail=Mail::all();
        return view('admin/mail',['mail' => $mail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail=new Mail();
        $mail->name=$request->get('name');
        $mail->email=$request->get('email');
        $mail->message=$request->get('message');

        $subject = 'Contact fron Xeon'; 
        $email_from = $mail->email;
        $email_to = '15030094@itcelaya.edu.mx';
    
        $body = 'Name: ' . $mail->name . "\n\n" . 'Email: ' . $mail->email . "\n\n" . 'Message: ' . $mail->message;
    
        if(@mail($email_to, $subject, $body, 'From: <'.$email_from.'>')){
            $mail->save();
            return redirect('/home/#contact')->with('success', 'Correo Enviado Exitosamente');
        }else{
            return redirect('/home/#contact')->with('danger', 'Correo No Enviado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
