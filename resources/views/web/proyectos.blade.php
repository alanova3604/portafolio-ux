@extends('web.layout.base')

@section('titulo', 'Proyectos')



@section('contenido')

    <div class="container">
        <div class="titulo">
            <div>Diseño</div>
            <div>UX / UI</div>
        </div>
    </div>

    <div class="proyectos-list">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="">
                        <div class="item">
                            <div class="imagen">
                                <img src="/assets/imagenes/nubitrack.jpg" alt="">
                            </div>
                            <div class="title-area">
                                <div class="title">Nubitrack</div>
                                <div class="subtitle">Producto Digital</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="">
                        <div class="item">
                            <div class="imagen">
                                <img src="/assets/imagenes/terravento.jpg" alt="">
                            </div>
                            <div class="title-area">
                                <div class="title">Terravento</div>
                                <div class="subtitle">Producto Digital</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="">
                        <div class="item">
                            <div class="imagen">
                                <img src="/assets/imagenes/ezgif-23972eabf11e19.gif" alt="">
                            </div>
                            <div class="title-area">
                                <div class="title">Pretor</div>
                                <div class="subtitle">Punto de Venta</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
