@extends('admin.dash')

@section('action')
    <section class="dossiers-container">
        <h2>Rechercher</h2>
        <div class="container-form">
            <form action="{{ route('dossier.search') }}" method="GET">
                <div class="container-select">
                    <label for="etat">Etat: </label>
                    <select name="etat" id="etat" value="{{ $input['etat'] ?? '' }}">
                        <option value=""> Selectionner</option>
                        <option value="en attente"> En attente</option>
                        <option value="complet"> Complet</option>
                        <option value="rejeté"> Réjété</option>
                    </select>
                </div>

                <div class="contianer-recherche">
                    <label for="date">Date Entretien: </label>
                    <input type="date" name="date_entretien" id="date" value="{{ $input['date_entretien'] ?? '' }}">
                </div>
                <div class="contianer-recherche">
                    <label for="session">Session: </label>
                    <input type="number" name="session_id" id="session" value="{{ $input['session_id'] ?? '' }}">
                </div>
                <div class="contianer-recherche">
                    <button type="submit" id="submit_search">Rechercher</button>
                </div>
            </form>
        </div>


        <div class="conatainer-table">
            <table class="dossier-data-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Prenoms</th>
                        <th>Genre</th>
                        <th>Moyenne Bac</th>
                        <th>Moyenne concours</th>
                        <th>Serie</th>

                        <th>Date de soumission</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $lesDossiers = $dossiers;
                    @endphp

                    @forelse ($lesDossiers as $dossier)
                        <tr class="clickable-row" data-href='{{ route('dossier.show', $dossier->id) }}'>
                            <td>
                                {{-- <input type="checkbox" id="" class=""> --}}

                            </td>
                            <td>{{ $dossier->candidat->nom }}</td>
                            <td>{{ $dossier->candidat->prenom }}</td>
                            <td>{{ $dossier->candidat->genre }}</td>
                            <td>{{ $dossier->moyenne_bac }}</td>
                            <td>{{ $dossier->moyenne_concours }}</td>
                            <td>{{ $dossier->serie }}</td>

                            <td>{{ $dossier->date_soumission }}</td>
                            <td>

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

                            </td>
                        </tr>
                        @empty
                            Aucun dossier enregistré pour la session
                        @endforelse

                    </tbody>
                </table>
            </div>

        </section>
    @endsection