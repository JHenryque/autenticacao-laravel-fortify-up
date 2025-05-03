@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <p class="display-6 text-center">LOGIN</p>
                    <div class="mb-3">
                        <label for="email">Usuário</label>
                        <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control" autocomplete="email" >
                    </div>
                    <div class="mb-3">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="current-password" value="{{ old('password') }}">
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{route('register')}}">Ainda não tem conta?</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">LOGIN</button>
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
