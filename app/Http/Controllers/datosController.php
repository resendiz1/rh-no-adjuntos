<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\Correo;
use App\Models\Dato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class datosController extends Controller
{

    public function post(){
        

         


        //Moviendo el archivo a la carpeta de laravel para despues mandarlo como adjunto
        //Lo tuve que comentar por que PABSA no me va a autorizar un HOST de pago :( my heart hurts
                    
                //$curriculum = request()->file('curriculum')->store('Public');
        
        
        Dato::create([
           'nombre' => request('nombre'),
           'telefono' => request('telefono'),
           'email' => request('email'),
           'edad' =>request('edad'),
           'escolaridad' => request('escolaridad'),
           'puesto' => request('puesto'),
           'resumen' => request('resumen')
        ]);




        //Declarando las variables quew nos serviran para darle cuerpo al correo
        $datos['nombre'] = request('nombre');
        $datos['telefono'] = request('telefono');
        $datos['email'] = request('email');
        $datos['edad'] = request('edad');
        $datos['escolaridad'] = request('escolaridad');
        $datos['puesto'] = request('puesto');
        $datos['resumen'] = request('resumen');
        



// Lo tuve que comentar por que PABSA no me va a autorizar un HOST de pago :( my heart hurts
        try{

            Mail::to('l.dominguez@grupopabsa.com')
                ->cc('rh.auxiliar@grupopabsa.com')
                ->bcc('arturo.resendiz@grupopabsa.com')
                ->send(new Correo($datos['nombre'], $datos['telefono'], $datos['email'], $datos['edad'], $datos['escolaridad'], $datos['puesto'], $datos['resumen']));    

                return back()->with('enviado', 'Tu candidatura fue enviada');

        }catch(Exception $ex){
            return $ex;
        }

        
        // Configurando las cosas que haran que se mande el correo

    }
} 



