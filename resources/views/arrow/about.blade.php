@extends('layouts.app', ['page_title' => 'ARROW - About Us', 'nav_link' => 'about'])

@section('content')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>About us</h1>
                    </div>
                    @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', '0' => 'about us']])
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <section>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading">
                                <h2>About Tom van Nimwegen & Sander Grandia</h2>
                            </div>

                            <p class="lead">Division of Labour</p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel-group accordion" id="accordionThree">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3a">

                                                    Tom van Nimwegen

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3a" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li>ADMIN
                                                            <ul>
                                                                <li>Account aanmaken</li>
                                                                <li>Product aanmaken</li>
                                                                <li>Product aanpassen</li>
                                                                <li>Categorie aanmaken</li>
                                                                <li>Categorie aanpassen</li>
                                                                <li>Tags aanmaken</li>
                                                                <li>Tags aanpassen</li>
                                                            </ul>
                                                        </li>
                                                        <li>USER
                                                            <ul>
                                                                <li>Blog aanmaken/bekijken</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3b">

                                                    Sander Grandia

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3b" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li>ADMIN</li>
                                                        <li>USER
                                                            <ul>
                                                                <li>Homepage</li>
                                                                <li>Product overzicht pagina</li>
                                                                <li>Product detail pagina</li>
                                                                <li>About Us</li>
                                                                <li>Contact</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading">
                                <h2>Our skills</h2>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    Laravel
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    This website
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Webdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
@endsection