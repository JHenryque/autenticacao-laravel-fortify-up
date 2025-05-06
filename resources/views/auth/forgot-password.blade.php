@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{route('password.email')}}" method="post">
                    @csrf
                    <p class="display-6 text-center">RECUPERAR A SENHA</p>
                    <div class="mb-3">
                        <label for="email">Digite o seu endereço de email para reupera:</label>
                        <input type="email"  name="email" id="email" class="form-control" >
                    </div>
                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{route('login')}}">voltar para o login?</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">RECUPERAR SENHA</button>
                        </div>
                    </div>
                </form>
                {{--         erros       --}}
{{--                @if($errors->any())--}}
{{--                    <div class="alert alert-danger mt-4">--}}
{{--                        <ul class="m-0">--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <li>{{$error}}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}

                @if($errors->any())
                    <div class="text-center mt-5">
                        <p>Um email foi enviado para o seu endereço de email com as instruçoes para recuperar</p>
                        <a href="{{ route('login') }}" class="btn btn-primary px-5">VOLTAR</a>
                    </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul class="m-0">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
