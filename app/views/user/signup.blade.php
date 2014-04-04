@extends('layouts.user')

@section('content')
    <h1>Registre-se</h1>
    <!-- Renderiza o form de cadastro do Confide -->
    {{ Confide::makeSignupForm()->render(); }}
@stop