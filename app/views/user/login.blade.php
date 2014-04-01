@extends('layouts.user')

@section('content')
    <h1>Login</h1>
    <!-- Renderiza o form de login do Confide -->
    {{ Confide::makeLoginForm()->render(); }}
@stop