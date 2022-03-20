@extends('layouts.app')

@section('title', 'detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário #{{ $user->name }}</h1>

    <ul>
        <li><b>Nome:</b> {{ $user->name }}</li>
        <li><b>E-mail:</b> {{ $user->email }}</li>
        <li><b>Data de criação:</b> {{ date('d/m/Y H:i', strtotime($user->created_at)) }}</li>
    </ul>
@endsection

