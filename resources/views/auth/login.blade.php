@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h2>Login na Taverna</h2>

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Senha" required><br><br>
    <button type="submit">Entrar</button>
</form>

<p>Ainda não tem conta? <a href="{{ route('register.form') }}">Registre-se aqui</a></p>
@endsection
