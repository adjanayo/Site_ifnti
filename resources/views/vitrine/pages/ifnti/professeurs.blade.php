@extends('app')
@section('content')
    <div class="all-title-box modif audrey banner-mod">
        <div class="container text-center">
            <h1>
                Notre équipe<span class="m_1"> Découvrez notre équipe enseignante dévouée et passionnée à l'IFNTI.</span>
            </h1>
        </div>
    </div>

    <div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="{{ asset('vitrine/images/img/jcc.png') }}" />
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Jean-Christophe CARRE</h3>
                            <span class="post">Enseignant de programmation</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="{{ asset('vitrine/images/img/willy.png') }}" />
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Willy Aubry</h3>
                            <span class="post">Enseignant en réseaux et programmation</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="{{ asset('vitrine/images/img/hegra.png') }}" />
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Bekoumouda HEGRA</h3>
                            <span class="post">Responsable administratif</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="{{ asset('vitrine/images/img/muriel.png') }}" />
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Muriel MILHAU</h3>
                            <span class="post">Responsable projets et relations extérieurs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="{{ asset('vitrine/images/img/vincent.jpg') }}" />
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Vincent Clément</h3>
                            <span class="post">Enseignant réseaux et programmation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
