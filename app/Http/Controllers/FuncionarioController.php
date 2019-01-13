<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FuncionarioModel;
class FuncionarioController extends Controller
{
    public function setFuncionario(){
        // dd(Input::get());
        FuncionarioModel::setFuncionario(Input::get()); 
        $funcionario=FuncionarioModel::getFuncionario();
        return view('dashboard.funcionario', ['funcionario'=>$funcionario]);
    }
}
