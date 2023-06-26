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

            @include('vitrine.composants.professeurs.administration')
            @include('vitrine.composants.professeurs.permanents')
            @include('vitrine.composants.professeurs.vacataires')

        </div>
    </div>
@endsection
