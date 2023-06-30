@extends('app')
@section('content')
    <div class="all-title-box modif hafiz se">
        <div class="container text-center">
            <h1>Système d’exploitation<span class="m_1">Maîtrisez les systèmes d'exploitation à l'IFNTI. Devenez un
                    expert des performances informatiques et ouvrez de nouvelles perspectives</span></h1>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Explorez notre formation en Système d'exploitation à l'IFNTI et plongez au cœur du
                        fonctionnement des systèmes informatiques. Maîtrisez les clés pour optimiser les performances et
                        assurer la stabilité des environnements informatiques. Devenez un expert des systèmes
                        d'exploitation et ouvrez de nouvelles perspectives professionnelles.</p>
                </div>
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="{{ asset('vitrine/images/img/computer-screen-linux.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Linux</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Linux est connu pour sa stabilité, sa performance, sa sécurité et sa flexibilité. Il est utilisé sur diverses plateformes, depuis les serveurs, les ordinateurs de bureau jusqu'aux smartphones et aux systèmes embarqués. 
                                    Il existe de nombreuses distributions de Linux, telles que Ubuntu, Fedora et Debian, qui offrent différentes interfaces utilisateur et fonctionnalités pour répondre aux besoins des utilisateurs.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="{{ asset('vitrine/images/img/microsoft.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Windows</a></h2>
                            </div>
                            <div class="blog-desc">
                                <p>Le système d'exploitation Windows est un système d'exploitation développé par Microsoft Corporation. Il est largement utilisé dans le monde entier et est conçu pour offrir une interface conviviale et intuitive aux utilisateurs.
                                     Windows propose une large gamme de fonctionnalités et de programmes préinstallés, tels que le navigateur Internet Explorer, le logiciel de traitement de texte Word, le tableur Excel, le programme de messagerie électronique Outlook, etc.
                                     Il existe différentes versions de Windows, telles que Windows 10, Windows 8, Windows 7, et chaque version apporte des améliorations et des fonctionnalités supplémentaires par rapport à la version précédente. </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
