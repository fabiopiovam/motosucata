@extends('layouts.user')

@section('content')
    <h1>Esqueci minha senha :'(</h1>
    <!-- Renderiza o form Esqueci minha senha do Confide -->
    {{ Confide::makeForgotPasswordForm()->render(); }}
@stop