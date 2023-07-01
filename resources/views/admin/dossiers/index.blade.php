@extends('admin.dash')

@section('action')
    <section class="dossiers-container">
        <h2>Rechercher</h2>
        <div class="container-form">
            <form action="">
                <div class="container-select">
                    <label for="etat">Etat: </label>
                    <select name="etat" id="etat">
                        <option value=""> Selectionner</option>
                        <option value="en attente"> En attente</option>
                        <option value="complet"> Complet</option>
                        <option value="réjété"> Réjété</option>
                    </select>
                </div>

                <div class="contianer-recherche">
                    <label for="date">Date Entretien: </label>
                    <input type="date" name="date_entretien" id="date">
                </div>
                <div class="contianer-recherche">
                    <label for="session">Session: </label>
                    <input type="number" name="session_id" id="session">
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

                    <tr class="clickable-row" data-href='http://127.0.0.1:8000/dossier/15'>
                        <td>


                        </td>
                        <td>Oberbrunner</td>
                        <td>Julie</td>
                        <td>Féminin</td>
                        <td>16.5</td>
                        <td>19.27</td>
                        <td></td>

                        <td>1979-10-17</td>
                        <td>

                            <div class="etat est_complet">
                                <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                                Conplet
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
@endsection
