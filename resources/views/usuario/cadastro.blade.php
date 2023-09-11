@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')
    <form action="{{ route('salvar') }}" method="post" class="form" >
        {{ csrf_field() }}

        <div class="field">
            <label for="iNome">Nome: </label>
            <input type="text" name="nome" id="iNome">

            @if ($errors->has('nome'))
                @foreach ($errors->get('nome') as $erro)
                    <strong class="erro"> {{ $erro }} </strong>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label for="iEmail">Email: </label>
            <input type="text" name="email" id="iEmail">
            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $erro)
                    <strong class="erro"> {{ $erro }} </strong>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label for="iSenha">Senha: </label>
            <input type="password" name="senha" id="iSenha">
            @if ($errors->has('senha'))
                @foreach ($errors->get('senha') as $erro)
                    <strong class="erro"> {{ $erro }} </strong>
                @endforeach
            @endif
        </div>

        <div class="submit">
            <input type="submit" value="Salvar">
        </div>
    </form>
@endsection