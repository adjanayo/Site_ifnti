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
            <div class="container-tous">
                <div class="container-candidat">
                    <h3>Informations candidat</h3>
                    <div class="infos-personnelles">
                        <div class="infos">
                            <p>Nom</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->nom }}</p>
                        </div>
                        <div class="infos">
                            <p>Prenom</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->prenom }}</p>
                        </div>
                        <div class="infos">
                            <p>Genre</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->genre }}</p>
                        </div>
                        <div class="infos">
                            <p>Nationnalité</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->nationalite }}</p>
                        </div>
                        <div class="infos">
                            <p>Date de naissance</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->dateNaissance }}</p>
                        </div>
                        <div class="infos">
                            <p>Etbls de provenance</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->etablissement }}</p>
                        </div>
                        <div class="infos">
                            <p>Adresse</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->adresse }}</p>
                        </div>
                        <div class="infos">
                            <p>Contact</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->telephone }}</p>
                        </div>
                        <div class="infos">
                            <p>Email</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->email }}</p>
                        </div>
                        <div class="infos">
                            <p>Tuteur</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->tel_tuteur }}</p>
                        </div>
                    </div>
                </div>

                <div class="divers">
                    <h3>Notes</h3>
                    <div class="container-notes">

                        <div class="notes">
                            <p>Moyenne bac</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->moyenne_bac }}</p>
                        </div>
                        <div class="notes">
                            <p>Moyenne concours</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->moyenne_concours }}</p>
                        </div>
                    </div>
                    <h3>Informations Concours</h3>
                    <div class="container-notes">
                        <div class="notes">
                            <p>MATH</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->math }}</p>
                        </div>
                        <div class="notes">
                            <p>Anglais</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->ang }}</p>
                        </div>
                        <div class="notes">
                            <p>Français</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->fr }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $niveaux = $dossier->niveau;
            @endphp
           
                                                @if ($matiere->nom == 'ang')
                                                    <td>
                                                        {{ $matiere->note }}</td>
                                                @endif
                                            @endforeach

                                            <td><button id="dowload" >dowload</button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="next">

                    <button id="a2"><img src="{{ asset('admin/images/next.png') }}" alt=""
                            id="next"></button>

                </div>


            </div>

            <a href="#edit" id="show-dossier-editer-link">Editer</a>


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
        <script>
            const lienA1 = document.getElementById('a1');
            const lienA2 = document.getElementById('a2');

            const tableauImg = [
                '../admin/images/next-white.png',
                '../admin/images/prev-white.png',
                '../admin/images/prev.png',
                '../admin/images/next.png'
            ]
            const next = document.getElementById('next')
            const prev = document.getElementById('prev')
            const lien1 = document.getElementById('a1')
            const lien2 = document.getElementById('a2')

            lienA1.addEventListener('mouseenter', e => {
                e.preventDefault
                prev.setAttribute('src', tableauImg[1])
            })

            lienA1.addEventListener('mouseleave', e => {
                e.preventDefault
                prev.setAttribute('src', tableauImg[2])
            })

            lienA2.addEventListener('mouseenter', e => {
                e.preventDefault

                next.setAttribute('src', tableauImg[0])
            })

            lienA2.addEventListener('mouseleave', e => {
                e.preventDefault
                next.setAttribute('src', tableauImg[3])
            })




            $(document).ready(function() {
                let currentChild = 0;
                let totalChildren = $('#container-tables').children().length;

                $('#a1').click(function() {
                    if (currentChild > 0) {
                        currentChild--;
                    }
                    updateChild();
                });

                $('#a2').click(function() {
                    if (currentChild < totalChildren - 1) {
                        currentChild++;
                    }
                    updateChild();
                });

                function updateChild() {
                    let $children = $('#container-tables').children();
                    $children.removeClass('active');
                    let startIndex = currentChild * 2;
                    let endIndex = startIndex + 1;
                    $($children.slice(startIndex, endIndex + 1)).addClass('active');

                    if ($('.conatainer-table1:last-child').hasClass('active')) {
                        $('#a2').attr('style', 'visibility:hidden')
                    } else {
                        $('#a2').attr('style', 'visibility:visible')
                    }

                    if ($(".conatainer-table1:first-child").hasClass('active')) {
                        $('#a1').attr('style', 'visibility:hidden')
                    } else {
                        $('#a1').attr('style', 'visibility:visible')

                    }

                }
            });
        </script>
    @endpush
@endsection
