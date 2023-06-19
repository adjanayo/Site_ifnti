@extends('app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Contact<span class="m_1"></span></h1>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Besoin de nous contacter? Prière remplir ce formulaire</h3>
                <p class="lead"></p>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="Nom">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Prénom">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Votre mail">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Votre numéro">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Votre message"></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="map-box">
                        <div id="custom-places" class="small-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o">
    </script>
    <script src="{{ asset('vitrine/js/mapsed.js') }}"></script>
    <script src="{{ asset('vitrine/js/01-custom-places-example.js') }}"></script>
@endpush
