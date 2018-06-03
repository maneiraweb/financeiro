@extends('Admin.layouts.app')
@section('content_page')
  <h1>
    Gerenciar Usuários
  </h1>

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th style="width: 60px">Admin</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td/>
                    <td>{{ $user->rulesid }}</td>
                    <td>
                      <a href="{{ route('alterar', $user->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="{{ route('deletar', $user->id) }}" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  	</div>
  </div>

</section>

<!-- /.content-wrapper -->
@stop