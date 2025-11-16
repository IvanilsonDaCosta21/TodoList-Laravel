@extends('layout.main')

@section('titulo', 'Registro')
@section('conteudo')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Registro</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registrar') }}">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrar</button>
                            <hr>
                            <p class="text-center">Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
