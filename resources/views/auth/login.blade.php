@extends('layouts.login')

@section('content')
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card login p-0 mb-3 bg-white rounded">
                <div class="card-header text-center bg-white text-dark border-0 mt-2 pb-0">
                    <img src="{{ asset('images/veLogo.png') }}" class="mb-2" width="100" height="120"
                        class="d-inline-block" />
                    <br />
                    <small class="p-0 m-0">¡La seguridad tambien depende de usted!</small>
                    <hr class="mt-0 w-85" />
                </div>
                <div class="card-body text-muted pt-3">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-row mb-4">
                            <div class="form-group col-12 mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-white text-dark"><i class="fas fa-user"></i></span>
                                    <input type="text" name="user" class="form-control" id="user"
                                        placeholder="Usuario" />
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="input-group">
                                    <span class="input-group-text bg-white text-dark"><i class="fas fa-key"></i></span>
                                    <input type="password" name="password" class="form-control" id="pass"
                                        placeholder="Contraseña" />
                                </div>
                            </div>
                        </div>

                        <div class="px-1 d-grid">
                            <button class="btn btn-block btn-outline-dark inicio" id="btn-ingresar">Iniciar
                                sesión</button>
                        </div>
                    </form>
                    @if (session('message'))
                        <div class="col-12 ">
                            <div class="alert alert-{{ session('color') }} alert-dismissible fade show d-flex justify-content-bewteen align-items-center mb-1 mt-3"
                                role="alert">
                                <div class="col-10">
                                    <i class="fa-solid fa-circle-info"></i> <b>{{ session('message') }}</b>
                                </div>
                                <div class="col-2 d-flex align-items-center text-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
