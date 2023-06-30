<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('aws/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="./css/_main.css"> --}}
    {{-- <script src="./script.js" async></script> --}}
    <title>Processus de création d'un CV</title>
    @vite(
        [
        'resources/css/form.css',
        'resources/js/form.js',
        ]
    )
</head>
<body>
    <section class="formulaire">
        <form action="">
            <div class="identite">
                <h1>Formulaire d'inscription</h1>
                <div class="info_perso">
                    <h2>Identité du candidat</h2>
                    <div class="fields">
                        <div class="col1">
                            <div class="groupe">
                                <label for="">Nom</label><br>
                                <input type="text" id="nom" placeholder="Entrer ton nom">
                            </div>
                            <div class="groupe">
                                <label for="">Prenom</label><br>

                                <input type="text" id="prenom" placeholder="Entrer ton prenom">
                            </div>

                            <div class="groupe">
                                <label for="">E-mail</label><br>
                                <input type="email" id="email" placeholder="Entrer ton email">
                            </div>
                        </div>

                        <div class="col1">
                            <div class="groupe">
                                <label for="">Date Naissance</label><br>
                                <input type="date" id="date" placeholder="Entrer date naissance">
                            </div>

                            <div class="groupe">
                                <label for="">Nationalité</label><br>
                                <input type="text" id="nationalite" placeholder="Entrer ta nationalite">
                            </div>

                            <div class="groupe">
                                <label for="">Contact Personnel</label><br>
                                <input type="text" id="contact" placeholder="Entrer ton contact">
                            </div>
                        </div>

                        <div class="col1">
                            <div class="groupe">
                                <label for="">Contact Tuteur</label><br>
                                <input type="text" id="tutu" placeholder="Entrer contact tuteur">
                            </div>

                            <div class="groupe">
                                <label for="">Situation Mat</label><br>
                                <select name="" id="">
                                    <option value="celibataire">Célibataire</option>
                                    <option value="marie">Marié</option>
                                </select>
                            </div>
                            <div class="groupe">
                                <label for="">Genre</label><br>
                                <select name="" id="">
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sui">
                    <a href="">Suivant <i class="fas fa-hand-point-right"></i></a>
                </div>
            </div>
<!-------------------------Etapes--------------------------------------------->





            <div class="identite2">
                <div class="mac">
                    <div class="bouts">
                        <button class="rad1">1</button>
                    </div>
                    <div class="bouts">
                        <button class="rad2">2</button>
                    </div>
                    <div class="bouts">
                        <button class="rad3">3</button>
                    </div>
                    <div class="bouts">
                        <button class="rad4">4</button>
                    </div>
                </div><hr>
<!-- -----------------------------------------------etape1----------------------------------- -->
                <div class="etape1">
                    <h1>Etape de renseignements des notes 1/4</h1><hr>

                    <div class="infos">
                        <div class="second">
                            <div class="infossec">
                                <h3>Seconde</h3>
                                <select name="" id="">
                                    <option value="cd">choix</option>
                                    <option value="cd">CD</option>
                                    <option value="cd">C</option>
                                    <option value="cd">F</option>
                                    <option value="cd">E</option>
                                </select>
                            </div>
                            <div class="infosets">
                                <h3>Nom Etablissement</h3>
                                <input type="text"  required>
                            </div>

                            <div class="infosemes">
                                <h3>Nombre de Sem/Trim</h3>
                                <div class="check">
                                    <div class="s2">
                                        <label for="">2</label>
                                        <input type="radio" name="" id="deux">
                                    </div>
                                    <div class="s3">
                                        <label for="">3</label>
                                        <input type="radio" name="" id="trois">
                                    </div>
                                </div>
                            </div>
                        </div><hr>

                        <div class="identite3">
                            <div class="trim2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Semestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id="n1"></td>
                                            <td><input type="text" name="" id="n2"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="file" name="" id="n4"></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id="n5"></td>
                                            <td><input type="text" name="" id="n6"></td>
                                            <td><input type="text" name="" id="n7"></td>
                                            <td><input type="file" name="" id="n8"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="trim3">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Trimestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
<!--------------------------------------etape2-------------------------------------------------------->

                <div class="etape2">
                    <h1>Etape de renseignements des notes 2/4</h1><hr>
                    <div class="infos">
                        <div class="second">
                            <div class="infossec">
                                <h3>Première</h3>
                                <select name="" id="">
                                    <option value="cd">choix</option>
                                    <option value="cd">CD</option>
                                    <option value="cd">C</option>
                                    <option value="cd">F</option>
                                    <option value="cd">E</option>
                                </select>
                            </div>
                            <div class="infosets">
                                <h3>Nom Etablissement</h3>
                                <input type="text"  required>
                            </div>

                            <div class="infosemes">
                                <h3>Nombre de Sem/Trim</h3>
                                <div class="check">
                                    <div class="s2">
                                        <label for="">2</label>
                                        <input type="radio" name="" id="deux2">
                                    </div>
                                    <div class="s3">
                                        <label for="">3</label>
                                        <input type="radio" name="" id="trois2">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="identite3">
                            <div class="trim22">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Semestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id="n1"></td>
                                            <td><input type="text" name="" id="n2"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="file" name="" id="n4"></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id="n5"></td>
                                            <td><input type="text" name="" id="n6"></td>
                                            <td><input type="text" name="" id="n7"></td>
                                            <td><input type="file" name="" id="n8"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="trim33">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Trimestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<!-- --------------------------------------etape3 ------------------------------------------------- -->

                <div class="etape3">
                    <h1>Etape de renseignements des notes 3/4</h1><hr>
                    <div class="infos">
                        <div class="second">
                            <div class="infossec">
                                <h3>Terminal</h3>
                                <select name="" id="">
                                    <option value="cd">choix</option>
                                    <option value="cd">CD</option>
                                    <option value="cd">C</option>
                                    <option value="cd">F</option>
                                    <option value="cd">E</option>
                                </select>
                            </div>
                            <div class="infosets">
                                <h3>Nom Etablissement</h3>
                                <input type="text"  required>
                            </div>

                            <div class="infosemes">
                                <h3>Nombre de Sem/Trim</h3>
                                <div class="check">
                                    <div class="s2">
                                        <label for="">2</label>
                                        <input type="radio" name="" id="deux3">
                                    </div>
                                    <div class="s3">
                                        <label for="">3</label>
                                        <input type="radio" name="" id="trois3">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="identite3">
                            <div class="trim222">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Semestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id="n1"></td>
                                            <td><input type="text" name="" id="n2"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="file" name="" id="n4"></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id="n5"></td>
                                            <td><input type="text" name="" id="n6"></td>
                                            <td><input type="text" name="" id="n7"></td>
                                            <td><input type="file" name="" id="n8"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="trim333">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Trimestre</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

<!--------------------------------------------etape4 ------------------------------------------------>

                <div class="etape4">
                    <h1>Etape de renseignements des notes 4/4</h1><hr>
                    <div class="infos">
                        <div class="identite3">
                            <div class="exam">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Niveau</th>
                                            <th>Series</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BAC1</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>

                                        <tr>
                                            <td>BAC2</td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="file" name="" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>













                <!-- <div class="etap">
                    <h1>Etape de renseignements des notes 4/4</h1><hr>
                        <div class="identite3">
                            <div class="exam">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Niveau</th>
                                            <th>Serie</th>
                                            <th>Mathematique</th>
                                            <th>Anglais</th>
                                            <th>Français</th>
                                            <th class="bul">Bulletin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BAC1</td>
                                            <td><input type="text" name="" id="n1"></td>
                                            <td><input type="text" name="" id="n2"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="file" name="" id="n4"></td>
                                        </tr>

                                        <tr>
                                            <td>BAC2</td>
                                            <td><input type="text" name="" id="n1"></td>
                                            <td><input type="text" name="" id="n2"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="text" name="" id="n3"></td>
                                            <td><input type="file" name="" id="n4"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>   -->
            </div>
        </form>
    </section>
</body>
</html>
