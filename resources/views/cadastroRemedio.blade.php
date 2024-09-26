@extends('layout')
@section('content')

<section class ="container m-5">
    <h1>Cadastrar Contatos</h1>
    <section>
    <div style="display: flex; justify-content:center; align-items:center;height:50vh">
            <form class="row g-3" method="POST" action="{{route('cadastrar-formulario')}}">
            @csrf 
        <form class="row g-3">
        <div class="col-md-6">
        <label for="inputNome" class="form-label">Nome do Paciente</label>
        <input type="text" name="nome" value="{{old('nome')}}" class="form-control" id="inputNome" placeholder="Jonas">
        @error('nome')
         <div class="text-sm-start text-light">*Preencher o campo Nome.</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="inputconvenio" class="form-label">convenio</label>
        <input type="text" name="convenio" value="{{old('convenio')}}" class="form-control" id="inputconvenio" placeholder="">
        @error('convenio')
         <div class="text-sm-start text-light">*Preencher o campo convenio.</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">medicamento</label>
        <input type="text" name="medicamento" value="{{old('medicamento')}}" class="form-control" id="inputmedicamento" placeholder="">
        @error('medicamento')
         <div class="text-sm-start text-light">*Preencher o campo medicamento.</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="inputDosagem" class="form-label">dosagem</label>
        <input type="text" name="dosagem" value="{{old('dosagem')}}" class="form-control" id="inputdosagem" placeholder="">   
        @error('dosagem')
         <div class="text-sm-start text-light">*Preencher o campo dosagem.</div>
        @enderror 
    </div>
        <div class="col-md-6">
        <label for="inputPreco" class="form-label">Preco</label>
        <input type="text" name="preco" value="{{old('preco')}}" class="form-control" id="inputpreco" placeholder="">
    </div>
    @error('preco')
         <div class="text-sm-start text-light">*Preencher o campo Preco.</div>
        @enderror
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
    </form>
    </sction>
</section>
@endsection 