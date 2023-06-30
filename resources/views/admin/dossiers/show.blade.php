@extends('admin.dash')
@section('action')
    <section class="show">
        <div class="dossier-vue">
            <h1 class="leDossier">Dossier No {{ $dossier->id }}</h1>


            @switch($dossier->etat)
                @case('complet')
                    <div class="etat est_complet">
                        @include('admin.composants.dash.accepte')
                        Conplet
                    </div>
                @break

                @case('rejeté')
                    <div class="etat est_rejete">
                        @include('admin.composants.dash.rejete')
                        Rejeté
                    </div>
                @break

                @default
                    <div class="etat en_attente">
                        @include('admin.composants.dash.attente')
                        En attente
                    </div>
            @endswitch
            <h2 class="title-dossier">Informations candidat</h2>
            <div class="info-candidat-container">
                <div class="info-candidat">
                    <span>Nom:</span>
                    <span>{{ $dossier->candidat->nom }}</span>
                </div>
                <div class="info-candidat">
                    <span>Prenom:</span>
                    <span>{{ $dossier->candidat->prenom }}</span>
                </div>
                <div class="info-candidat">
                    <span>Genre:</span>
                    <span>{{ $dossier->candidat->genre }}</span>
                </div>
                <div class="info-candidat">
                    <span>Nationnalité:</span>
                    <span>{{ $dossier->candidat->nationalite }}</span>
                </div>
                <div class="info-candidat">
                    <span>Date de naissance:</span>
                    <span>{{ $dossier->candidat->dateNaissance }}</span>
                </div>
                <div class="info-candidat">
                    <span>Etablisseent de provenance:</span>
                    <span>{{ $dossier->candidat->etablissement }}</span>
                </div>
                <div class="info-candidat">
                    <span>Adresse:</span>
                    <span>{{ $dossier->candidat->adresse }}</span>
                </div>
                <div class="info-candidat">
                    <span>Contact:</span>
                    <span>{{ $dossier->candidat->telephone }}</span>
                </div>
                <div class="info-candidat">
                    <span>Email:</span>
                    <span>{{ $dossier->candidat->email }}</span>
                </div>
                <div class="info-candidat">
                    <span>Tuteur:</span>
                    <span>{{ $dossier->candidat->tel_tuteur }}</span>
                </div>
            </div>
            <h2 class="title-dossier">Notes</h2>
            <div class="info-candidat-container">
                <div class="info-candidat">
                    <span>Moyenne bac:</span>
                    <span>{{ $dossier->moyenne_bac }}</span>
                </div>
                <div class="info-candidat">
                    <span>Moyenne concours:</span>
                    <span>{{ $dossier->moyenne_concours }}</span>
                </div>

            </div>
            @php
                $niveaux = $dossier->niveau;
            @endphp
            @foreach ($niveaux as $niveau)
                <h2 class="title-dossier">{{ $niveau->nom }} ({{ $niveau->annee }})</h2>
                <div class="conatainer-table">
                    <table class="dossier-data-table">
                        <thead>
                            <tr>
                                <th>Decoupage</th>
                                <th>MAth</th>
                                <th>Français</th>
                                <th>Anglais</th>
                                <th>Bulltein</th>
                            </tr>
                        </thead>
                        @php
                            $decoupages = $niveau->decoupage;
                        @endphp
                        @foreach ($decoupages as $decoupage)
                            <tbody>
                                <tr>
                                    <td>{{ $decoupage->nom }}</td>
                                    @php
                                        $matieres = $decoupage->matieres


                                    @endphp
                                    @foreach ($matieres as $matiere)
                                        @if ($matiere->nom == 'math')
                                            <td>
                                                {{ $matiere->note }}</td>
                                        @endif

                                        @if ($matiere->nom == 'fr')
                                            <td>
                                                {{ $matiere->note }}</td>
                                        @endif

                                        @if ($matiere->nom == 'ang')
                                            <td>
                                                {{ $matiere->note }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $decoupage->bulletin->fichier }}</td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endforeach
            <h2 class="title-dossier">Informations Concours</h2>

            <div class="info-candidat-container">
                <div class="info-candidat">
                    <span>MAth:</span>
                    <span>{{ $dossier->note->math }}</span>
                </div>
                <div class="info-candidat">
                    <span>Anglais:</span>
                    <span>{{ $dossier->note->ang }}</span>
                </div>
                <div class="info-candidat">
                    <span>Français:</span>
                    <span>{{ $dossier->note->fr }}</span>
                </div>
                <a href="#edit" id="show-dossier-editer-link">Editer</a>

            </div>


        </div>
    </section>
    <div class="tout">
        <div class="dossier-modal" id='edit'>
            <div class="adder-notes">
                <a href="#" id="close">
                    <hr id="trait1">
                    <hr id="trait2">
                </a>
                <h1>Dossier
                </h1>
                <form action="" class="dossier-form">
                    <section>
                        <fieldset>
                            <legend>Notes concours</legend>
                            <div class="form-dossier-ligne">
                                <label for="math">Math</label>
                                <input type="number" name="" id="math">
                            </div>
                            <div class="form-dossier-ligne">
                                <label for="anglais">Anglais</label>
                                <input type="number" name="" id="anglais">
                            </div>
                            <div class="form-dossier-ligne">
                                <label for="francais">Français</label>
                                <input type="number" name="" id="francais">
                            </div>
                        </fieldset>
                        <fieldset class="etat-dossier">
                            <legend>Admission du candidat</legend>
                            <div class="form-dossier-ligne">
                                <label for="attente">En attente</label><input type="radio" name="etat" id="attente"
                                    value="en attente">
                                <label for="attente" class="rad"></label>

                            </div>
                            <div class="form-dossier-ligne">
                                <label for="rejete">Rejeté</label>
                                <input type="radio" name="atat" id="rejete" value="rejete">
                                <label for="rejete" class="rad"></label>

                            </div>
                            <div class="form-dossier-ligne">
                                <label for="admis">Admis</label>
                                <input type="radio" name="estValide" id="admis" value="true">
                                <label for="admis" class="rad"></label>

                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Appreciation</legend>
                            <div class="dossier-appreciation">
                                <textarea name="appreciation" id="appreciation" cols="30" rows="10"></textarea>
                            </div>
                        </fieldset>
                    </section>
                    <button type="submit" id='saver-doss'>Save</button>
                </form>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script>
            $(function() {
                $("#close").click(function() {
                    $(".tout").toggle();
                    $(".show").toggleClass('blur');
                })
                $(".tout").hide();
                $("#show-dossier-editer-link").click(function(e) {
                    $(".tout").toggle();
                    $(".show").toggleClass('blur');
                })
            })
        </script>
    @endpush
@endsection
