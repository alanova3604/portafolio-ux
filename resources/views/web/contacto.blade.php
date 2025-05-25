@extends('web.layout.base')

@section('titulo', 'Contacto')



@section('contenido')

    <div class="container">
        <div class="titulo">
            <div>Enviame</div>
            <div>Un Mensaje</div>
        </div>
    </div>

    <div class="contacto-section">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-5">
                    <div class="imagen">
                        <img src="/assets/imagenes/placeholder.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="form">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-6 pe-md-2">
                                    <div class="form-control">
                                        <input placeholder="Nombre" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ps-md-2">
                                    <div class="form-control">
                                        <input placeholder="Correo" type="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-control">
                                        <input placeholder="Asunto" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-control">
                                        <textarea placeholder="Mensaje" name="" id=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-end">
                                    <button>
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
