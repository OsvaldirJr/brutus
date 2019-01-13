@extends('base')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Novo Funcionário</h4>
                            </div>
                            <div class="content">
                                <form method="post">
                                @csrf   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Empresa</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Brutus Barbearia">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Usuário</label>
                                                <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="text" name="senha" class="form-control" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Acesso</label>
                                                <select  name="acesso" class="form-control">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Caixa</option>
                                                    <option value="0" selected>Bloqueado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">E-mail</label>
                                                <input type="email"  name="email" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text"  name="nome" class="form-control" placeholder="Nome" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="number"  name="cep" class="form-control" placeholder="CEP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text"  name="endereco" class="form-control" placeholder="Endereço" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input type="text"  name="cidade" class="form-control" placeholder="Cidade">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input type="text"  name="pais" class="form-control" placeholder="País">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sobre</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div> -->
                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" name="cpf"  class="form-control" placeholder="CPF">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="text"  name="rg" class="form-control" placeholder="RG">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Carteira de Trabalho</label>
                                                <input type="text"  name="ctps" class="form-control" placeholder="CTPS">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Certificado de reservista</label>
                                                <input type="text"  name="reservista" class="form-control" placeholder="Reservista">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome do Pai</label>
                                                <input type="text"  name="pai" class="form-control" placeholder="Nome do pai" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome da mãe</label>
                                                <input type="text"  name="mae" class="form-control" placeholder="Nome da mãe" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome do cônjuge</label>
                                                <input type="text"  name="conjuge" class="form-control" placeholder="Cônjuge">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Filhos ?</label>
                                                <select class="form-control" >
                                                    <option>Sim</option>
                                                    <option selected>Não</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <input  name="qtdfilhos" type="number" class="form-control" placeholder="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefone Fixo</label>
                                                <input type="text"  name="telefone" class="form-control" placeholder="Telefone" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="text"  name="celular" class="form-control" placeholder="Celular" >
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Atualizar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>

        <script type="text/javascript">
    	$(document).ready(function(){
            changeMenu('funcionario');});
        </script>
@endsection