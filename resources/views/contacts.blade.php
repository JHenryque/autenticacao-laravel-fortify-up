@extends('layouts.main_layout')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="display-6 text-info
                ">Esta página está acessivel a usuários logado e não logados</p>

                <hr>
                @auth
                    <p class="display-6 text-success">Este texto só vai ser apresentado a usuários logado</p>
                @endauth

                @guest
                    <p class="display-6 text-success">Este texto só vai ser apresentado a usuários Visitante</p>
                @endguest

                <p>OU DE OUTRA FORMA</p>

                @auth
                    <p class="display-6 text-success">Este texto só vai ser apresentado a usuários logado</p>
                @else
                    <p class="display-6 text-success">Este texto só vai ser apresentado a usuários Visitante</p>
                @endauth
            </div>
        </div>
    </div>

@endsection
