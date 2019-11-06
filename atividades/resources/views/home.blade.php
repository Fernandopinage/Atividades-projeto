@extends('layout.app')

@section('conteudo')
   <div>
       @include('layout.nav')
   </div>


   <div class="">
   <form method="post" action="/validar">
      
    {{ csrf_field() }}
        <div class="form-group row">
        
          <label for="name" class="col-sm-2 col-form-label">Funcionario</label>
          <div class="col-sm-10">
          
                <select class="custom-select col-md-3" id="name" name="name"> 
                        @foreach ($usuario as $usuario)
                          <option >{{$usuario->name}}</option>
                        @endforeach
                  
                </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="atividade" class="col-sm-2 col-form-label">Atividade</label>
          <div class="col-sm-10">
                <select class="custom-select col-md-3" id="atividade" name="atividade">
                        @foreach ($atividade as $atividade)
                        <option >{{$atividade->atividade}}</option>
                        @endforeach
    
             </select>
          </div>
        </div>

        <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                      <select class="custom-select col-md-3" id="atividade" name="status">
                            <option value="done">Done</option>
                            <option value="wip">WIP</option>
                            <option value="review">Review </option>
                            <option value="to do">To Do </option>
          
                   </select>
                </div>
        </div>

        <div class="form-group row">
                <label for="data" class="col-sm-2 col-form-label">Data Entrega</label>
                <div class="col-sm-10">
                      <input class="col-sm-3 col-form-label" type="date" name="data" id="data">
                </div>
        </div>

              <input type="submit" class="btn btn-outline-primary" value="Salvar">
    </form>
    </div>

@endsection