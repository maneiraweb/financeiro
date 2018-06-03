@extends('Admin.layouts.app')
@section('content_page')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form role="form" action="{{ route('cadastrar') }}" method="post">
           @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
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
                    <option value="1">Administrador</option>
                    <option value="2">Gerente de Vendas</option>
                    <option value="3">Financeiro</option>
                    <option value="4">Usuário</option>
                  </select>
                </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
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