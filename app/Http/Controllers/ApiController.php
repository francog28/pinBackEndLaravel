<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Formulario;
use App\Mail\MensajeContacto;
use Validator;

class ApiController extends Controller
{
    public function index()
    {
        $formulario = Formulario::all();
        return $formulario;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name'=>'required | min:2',
            'email'=>'required',
            'phone'=>'required | min:6',
            'message'=>'required',
        ]);

        if ($validator -> fails()){
            return response([
                'error'=> true,
                'data'=> $validator -> errors()
            ],422);
        }

        $form = Formulario::create([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'message' => request()->message,
        ]);

        Mail::to('francogarcia28.fg@gmail.com')->send(new MensajeContacto($form));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
