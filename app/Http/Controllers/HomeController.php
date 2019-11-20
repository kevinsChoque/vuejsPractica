<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function actionIngresar(Request $request,SessionManager $sessionManager)
    {
        if($request->input('dni')=='111')
        {$template='docente';}
        if($request->input('dni')=='222')
        {$template='director';}
        if($request->input('dni')=='333')
        {$template='especialista';}

        $sessionManager->put('dnii', $request->input('dni'));
        $sessionManager->put('template', $template);

        return redirect('welcome');
    }
}
