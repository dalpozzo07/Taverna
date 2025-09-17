@extends('layouts.app')

@section('title', 'Registrar')

@section('content')
<h2>Registrar na Taverna</h2>

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Senha" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Confirme a senha" required><br><br>
    <button type="submit">Registrar</button>
</form>
@endsection
