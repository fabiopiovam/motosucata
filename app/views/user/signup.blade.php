@extends('layouts.user')

@section('content')
    <h1>Signup</h1>
    <!-- Renderiza o form de cadastro do Confide -->
    {{ Confide::makeSignupForm()->render(); }}
@stop