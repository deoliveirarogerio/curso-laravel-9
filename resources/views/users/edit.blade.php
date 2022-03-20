@extends('layouts.app')

@section('title', "Editar 0 Usuário {$user->name}")

@section('content')
<h1>Editar o Usuário {{ $user->name }}</h1>
@if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
 
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Nome:</label>
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}"><br />

    <label for="email">E-mail:</label>
    <input type="text" name="email" placeholder="E-mail:" value="{{ $user->email }}"><br />

    <label for="password">Senha:</label>
    <input type="password" name="password" placeholder="Senha:"><br />

    <button type="submit">Atualizar</button>
</form>

@endsection