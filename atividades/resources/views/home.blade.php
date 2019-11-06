@extends('layout.app')

@section('conteudo')
   <div>
       @include('layout.nav')
   </div>


   <div class="">
   <form method="post" action="">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Funcionario</label>
          <div class="col-sm-10">
                <select class="custom-select col-md-3" id="name">
                        <option selected>responsável pela atividade</option>
    
                        @foreach ($usuario as $usuario)
                        <option value="1">{{$usuario->name}}</option>
                        @endforeach
    
                </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="atividade" class="col-sm-2 col-form-label">Atividade</label>
          <div class="col-sm-10">
                <select class="custom-select col-md-3" id="atividade">
                        <option selected>responsável pela atividade</option>
    
                        @foreach ($atividade as $atividade)
                        <option value="1">{{$atividade->atividade}}</option>
                        @endforeach
    
             </select>
          </div>
        </div>

        <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                      <select class="custom-select col-md-3" id="atividade">
                              <option selected>Status</option>
          
                              @foreach ($chamado as $chamado)
                              <option value="1">{{$chamado->status}}</option>
                              @endforeach
          
                   </select>
                </div>
              </div>

              <input type="submit" class="btn btn-outline-primary" value="Salvar">
    </form>
    </div>

@endsection