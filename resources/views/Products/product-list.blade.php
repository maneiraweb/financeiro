@extends('Admin.layouts.app')
@section('content_page')
  <h1>Produtos em Estoque</h1>

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Produto</th>
                    <th>Qtde Total</th>
                    <th>Qtde Disponível</th>
                    <th>PU Médio Ent.</th>
                    <th>PU Saída</th>
                    <th>IPI</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($products as $product)
               
                  <tr>
                    <td> {{$product->codigo}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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