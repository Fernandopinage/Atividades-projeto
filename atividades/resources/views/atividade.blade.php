@extends('layout.app')

@section('conteudo')
   <div>
       @include('layout.nav')
   </div>

   <div>
        <form method="post" action="">
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="ativodade">Ativodade</label>
                    <input type="text" class="form-control" name="ativodade" id="ativodade" placeholder="Ativodade">
                </div>
                <div class="form-group col-md-8">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
      
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Salvar">
        </form>    
    </div>
@endsection