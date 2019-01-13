<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class FuncionarioModel extends Model
{
    public static function setFuncionario($funcionario){
        DB::table('login')->insert(['usuario'=>$funcionario['usuario'],'senha'=>md5($funcionario['senha']), 'acesso'=>$funcionario['acesso'] ]);
        $usuario=DB::table('login')->where('usuario',$funcionario['usuario'])->first();
        if(isset($funcionario['qtdfilhos'])){
            $sql = [
                'nome'=>$funcionario['nome'],
                'email'=>$funcionario['email'],
                'telefone'=>$funcionario['telefone'],
                'celular'=>$funcionario['celular'],
                'cep'=>$funcionario['cep'],
                'endereco'=>$funcionario['endereco'],
                'cidade'=>$funcionario['cidade'],
                // 'estado'=>$funcionario['estado'],
                'pais'=>$funcionario['pais'],
                'cpf'=>$funcionario['cpf'],
                'rg'=>$funcionario['rg'],
                'ctps'=>$funcionario['ctps'],
                'reservista'=>$funcionario['reservista'],
                'conjuge'=>$funcionario['conjuge'],
                'qtdfilhos'=>$funcionario['qtdfilhos'],
                'id_usuario'=>$usuario->id
            ];
        }else{
            $sql = [
                'nome'=>$funcionario['nome'],
                'email'=>$funcionario['email'],
                'telefone'=>$funcionario['telefone'],
                'celular'=>$funcionario['celular'],
                'cep'=>$funcionario['cep'],
                'endereco'=>$funcionario['endereco'],
                'cidade'=>$funcionario['cidade'],
                // 'estado'=>$funcionario['estado'],
                'pais'=>$funcionario['pais'],
                'cpf'=>$funcionario['cpf'],
                'rg'=>$funcionario['rg'],
                'ctps'=>$funcionario['ctps'],
                'reservista'=>$funcionario['reservista'],
                'conjuge'=>$funcionario['conjuge'],
                'id_usuario'=>$usuario->id
            ];
        }
        DB::table('funcionarios')->insert($sql);
    }

    public static function getFuncionario(){
        return [];
    }
}