@extends('layouts.user')

@section('content')
    <h1>Login</h1>
    <!-- Renderiza o form Esqueci minha senha do Confide -->
    {{ Confide::makeForgotPasswordForm()->render(); }}
@stop