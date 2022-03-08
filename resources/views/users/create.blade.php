@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1>Novo Usuário</h1>
@if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
 
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label for="name">Nome:</label>
    <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}"><br />

    <label for="email">E-mail:</label>
    <input type="text" name="email" placeholder="E-mail:" value="{{ old('email') }}"><br />

    <label for="password">Senha:</label>
    <input type="password" name="password" placeholder="Senha:"><br />

    <button type="submit">Cadastrar</button>
</form>

@endsection