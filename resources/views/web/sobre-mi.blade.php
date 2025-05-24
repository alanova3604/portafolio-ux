@extends('web.layout.base')

@section('titulo', 'Sobre Mí')



@section('contenido')

    <div class="container">
        <div class="titulo">
            <h1>
                <div>Sobre</div>
                <div>Mí</div>
            </h1>
        </div>
    </div>

    <div class="sobre-mi-section">
        <div class="container">
            <div class="info-header">
                <div class="row">
                    <div class="col-5">
                        <div class="imagen">
                            <img src="/assets/imagenes/about-me-photo.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="text-about-me">
                            <div class="name">
                                Alan Valdez
                            </div>
                            <div class="title">
                                Diseñador enfocado en producto digital con visión estratégica y amor por los detalles.
                            </div>
                            <div class="subtitle">
                                <span>Soy diseñador UX/UI con enfoque en diseño de producto digital.</span> Me especializo en crear
                                experiencias centradas en el usuario que combinan estética y funcionalidad. En Nubir he
                                liderado el diseño de múltiples soluciones tecnológicas, mejorando la usabilidad y
                                conversión de los productos en los que he colaborado.
                            </div>
                            <div class="cv-button">
                                <a href="/assets/documentos/Alan_Valdez_2025_CV.pdf" download><iconify-icon class="icono" icon="solar:file-download-broken"></iconify-icon>Descargar CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenido-sobre-mi">
                <div class="row">
                    <div class="col-6">
                        <div class="item time">
                            <img src="/assets/imagenes/nubir.png" alt="">
                            <div class="title">Product Design Lead</div>
                            <div class="time">2023 - Actualidad</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item time">
                            <img src="/assets/imagenes/unitec.png" alt="">
                            <div class="title">Lic. Diseño Animacion y Arte Digital</div>
                            <div class="time">2020 - 2024</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item goals">
                            <div class="title">Logros</div>
                            <ul>
                                <li>Plataforma de reservacion y administracion de terrazas, identidad, web, y app</li>
                                <li>Mejorar al 90% plataforma de Rastreo Vehicular GPS, Creacion de ecommerce</li>
                                <li>Creacion de Grua en modelado 3D para visualizacion de refacciones en Ecommerce</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item goals">
                            <div class="title">Design Skills</div>
                            <ul>
                                <li>Branding</li>
                                <li>Desing Thinking</li>
                                <li>UI/UX</li>
                                <li>Diseño de Interacciones</li>
                                <li>Modelado 3D</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="item goals">
                            <div class="title">Technical Skills</div>
                            <div class="tecnologias">
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="devicon:figma"></iconify-icon>
                                </div>
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="devicon:html5"></iconify-icon>
                                </div>
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="skill-icons:css"></iconify-icon>
                                </div>
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="vscode-icons:file-type-js-official"></iconify-icon>
                                </div>
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="skill-icons:photoshop"></iconify-icon>
                                </div>
                                <div class="tecnologia">
                                    <iconify-icon class="icono" icon="logos:adobe-illustrator"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
