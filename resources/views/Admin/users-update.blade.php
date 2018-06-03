@extends('Admin.layouts.app')
@section('content_page')
<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
       
        <form role="form" action="#" method="post">
         @foreach ($users as $user)
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="desperson" name="name" placeholder="Digite o nome" value="{{ $user->name }}">
            </div>
            <div class="form-group">
              <label for="deslogin">Login</label>
              <input type="text" class="form-control" id="deslogin" name="login" placeholder="Digite o login"  value="{{ $user->name }}">
            </div>
            <div class="form-group">
              <label for="desemail">E-mail</label>
              <input type="email" class="form-control" id="desemail" name="email" placeholder="Digite o e-mail" value="{{ $user->email }}">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha">
            </div>
            <!-- select -->
                <div class="form-group">
                  <label>Nivel de Acesso</label>
                  <select name="condicao" class="form-control">
                     <option>Selecione</option>
                    <option value="{{ $user->rulesid }}">Administrador</option>
	                    <option value="2">Gerente de Vendas</option>
	                    <option value="3">Financeiro</option>
	                    <option value="4">Usuário</option>
                  </select>
                </div>
          </div>
           @endforeach
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop