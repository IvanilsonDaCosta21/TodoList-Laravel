@extends('layout.main')
@section('titulo', 'Dashboard Home')
@section('conteudo')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Bem-vindo ao Dashboard</h1>
                <p>Esta é a página inicial do seu dashboard.</p>
            </div>
            <hr>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Seção 1
                    </div>
                    <div class="card-body">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
