<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Examens - EDUNOVA IA</title>

    <style>

        /* =================================================
           RECHERCHE
        ================================================== */

        .search-box {

            display: flex;

            gap: 15px;

            margin-bottom: 25px;

        }


        .search-box input,
        .search-box select {

            padding: 13px 15px;

            border: 1px solid #dce1ed;

            border-radius: 10px;

            background: #ffffff;

            color: #29385f;

            font-size: 14px;

            outline: none;

        }


        .search-box input {

            flex: 1;

        }


        .search-box select {

            min-width: 210px;

        }


        .search-box input:focus,
        .search-box select:focus {

            border-color: #6257f5;

            box-shadow:
                0 0 0 3px rgba(98, 87, 245, 0.10);

        }


        /* =================================================
           STATUT
        ================================================== */

        .status {

            display: inline-flex;

            align-items: center;

            padding: 6px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;

        }


        .scheduled-status {

            background: #eaf7ee;

            color: #238443;

        }


        .finished-status {

            background: #eef1f5;

            color: #687386;

        }


        .cancelled-status {

            background: #fdecec;

            color: #d14343;

        }


        .unknown-status {

            background: #f1f2f7;

            color: #66718b;

        }


        /* =================================================
           MESSAGE AUCUN EXAMEN
        ================================================== */

        .empty-exams {

            text-align: center;

            padding: 55px 20px;

            color: #7a849d;

        }


        .empty-exams-icon {

            font-size: 50px;

            margin-bottom: 15px;

        }


        .empty-exams h3 {

            color: #26365f;

            margin-bottom: 8px;

        }


        .empty-exams p {

            margin: 0;

        }


        /* =================================================
           RESPONSIVE
        ================================================== */

        @media (max-width: 700px) {

            .search-box {

                flex-direction: column;

            }


            .search-box select {

                width: 100%;

            }

        }

    </style>

</head>


<body>


<div class="admin-container">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <div class="logo">

            <h2>
                EDUNOVA IA
            </h2>

        </div>


        <ul class="menu">


            <li>

                <a href="/admin/dashdoard">
                    🏠 Tableau de bord
                </a>

            </li>


            <li>

                <a href="/admin/users">
                    👥 Utilisateurs
                </a>

            </li>


            <li>

                <a href="/admin/classes">
                    🏫 Classes
                </a>

            </li>


            <li>

                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>

            </li>


            <li>

                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
                </a>

            </li>


            <li>

                <a href="/admin/cours">
                    📚 Cours
                </a>

            </li>


            <li class="active">

                <a href="/admin/examens">
                    📝 Examens
                </a>

            </li>


            <li>

                <a href="/admin/statistiques">
                    📊 Statistiques
                </a>

            </li>


            <li>

                <a href="/admin/parametres">
                    ⚙ Paramètres
                </a>

            </li>


            <li>

                <a href="#">
                    🚪 Déconnexion
                </a>

            </li>


        </ul>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">


        <!-- TOPBAR -->

        <header class="topbar">


            <div>

                <h2>
                    Gestion des examens 📝
                </h2>


                <p>
                    Consultez les examens programmés sur EDUNOVA IA.
                </p>

            </div>


            <div class="profile">


                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Administrateur"
                >


                <span>

                    {{ Auth::user()->prenom ?? '' }}

                    {{ Auth::user()->nom ?? Auth::user()->name ?? 'Administrateur' }}

                </span>


            </div>


        </header>



        <!-- =====================================================
             SECTION EXAMENS
        ====================================================== -->

        <section class="exams-section">


            <!-- EN-TÊTE -->

            <div class="section-header">


                <div>

                    <h3>
                        Examens programmés
                    </h3>


                    <p>
                        Consultez les examens créés et programmés par les enseignants.
                    </p>

                </div>


            </div>



            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="search-box">


                <input
                    type="text"
                    id="rechercheExamen"
                    placeholder="🔍 Rechercher un examen..."
                >


                <select id="filtreStatut">


                    <option value="">
                        Tous les statuts
                    </option>


                    <option value="programme">
                        Programmé
                    </option>


                    <option value="termine">
                        Terminé
                    </option>


                    <option value="annule">
                        Annulé
                    </option>


                </select>


            </div>



            <!-- =================================================
                 TABLEAU
            ================================================== -->

            <div class="table-container">


                <table>


                    <thead>


                        <tr>

                            <th>ID</th>

                            <th>Examen</th>

                            <th>Matière</th>

                            <th>Enseignant</th>

                            <th>Niveau</th>

                            <th>Date</th>

                            <th>Heure</th>

                            <th>Statut</th>

                            <th>Actions</th>

                        </tr>


                    </thead>



                    <tbody id="tableauExamens">


                        @forelse($examens as $examen)


                            <tr class="exam-row">


                                <!-- ID -->

                                <td>

                                    #{{ str_pad($examen->id, 3, '0', STR_PAD_LEFT) }}

                                </td>



                                <!-- NOM EXAMEN -->

                                <td>

                                    <strong>

                                        {{ $examen->titre ?? $examen->nom ?? 'Examen sans titre' }}

                                    </strong>

                                </td>



                                <!-- MATIÈRE -->

                                <td>

                                    {{ $examen->matiere ?? 'Non définie' }}

                                </td>



                                <!-- ENSEIGNANT -->

                                <td>


                                    @if(!empty($examen->idprof))


                                        @php

                                            $professeurExamen = $enseignants
                                                ->firstWhere('id', $examen->idprof);

                                        @endphp


                                        @if($professeurExamen)

                                            {{ $professeurExamen->prenom ?? '' }}

                                            {{ $professeurExamen->nom ?? $professeurExamen->name ?? '' }}

                                        @else

                                            Enseignant #{{ $examen->idprof }}

                                        @endif


                                    @else

                                        Non défini

                                    @endif


                                </td>



                                <!-- NIVEAU -->

                                <td>

                                    {{ $examen->niveau ?? 'Non défini' }}

                                </td>



                                <!-- DATE -->

                                <td>

                                    @if(!empty($examen->date))

                                        {{ \Carbon\Carbon::parse($examen->date)->format('d/m/Y') }}

                                    @elseif(!empty($examen->date_examen))

                                        {{ \Carbon\Carbon::parse($examen->date_examen)->format('d/m/Y') }}

                                    @else

                                        Non définie

                                    @endif

                                </td>



                                <!-- HEURE -->

                                <td>

                                    {{ $examen->heure ?? $examen->heure_examen ?? 'Non définie' }}

                                </td>



                                <!-- STATUT -->

                                <td>


                                    @php

                                        $statut = strtolower(
                                            $examen->statut ?? 'programme'
                                        );

                                    @endphp


                                    @if(
                                        $statut === 'programme' ||
                                        $statut === 'programmé'
                                    )

                                        <span class="status scheduled-status">
                                            Programmé
                                        </span>


                                    @elseif(
                                        $statut === 'termine' ||
                                        $statut === 'terminé'
                                    )

                                        <span class="status finished-status">
                                            Terminé
                                        </span>


                                    @elseif(
                                        $statut === 'annule' ||
                                        $statut === 'annulé'
                                    )

                                        <span class="status cancelled-status">
                                            Annulé
                                        </span>


                                    @else

                                        <span class="status unknown-status">

                                            {{ $examen->statut ?? 'Non défini' }}

                                        </span>

                                    @endif


                                </td>



                                <!-- ACTIONS -->

                                <td class="actions">


                                    <button
                                        type="button"
                                        class="view-btn"
                                        title="Voir l'examen"
                                    >

                                        👁

                                    </button>


                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td colspan="9">


                                    <div class="empty-exams">


                                        <div class="empty-exams-icon">
                                            📝
                                        </div>


                                        <h3>
                                            Aucun examen disponible
                                        </h3>


                                        <p>
                                            Aucun examen n'a encore été créé sur EDUNOVA IA.
                                        </p>


                                    </div>


                                </td>

                            </tr>


                        @endforelse


                    </tbody>


                </table>


            </div>


        </section>


    </main>


</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


    /* =====================================================
       RECHERCHE
    ===================================================== */

    const rechercheExamen =
        document.getElementById("rechercheExamen");


    const filtreStatut =
        document.getElementById("filtreStatut");


    function filtrerExamens() {


        const recherche =
            rechercheExamen.value
                .toLowerCase()
                .trim();


        const statut =
            filtreStatut.value
                .toLowerCase()
                .trim();


        const lignes =
            document.querySelectorAll(
                "#tableauExamens .exam-row"
            );


        lignes.forEach(
            function (ligne) {


                const texte =
                    ligne.textContent
                        .toLowerCase();


                const correspondRecherche =
                    texte.includes(recherche);


                const correspondStatut =
                    statut === "" ||
                    texte.includes(statut);


                if (
                    correspondRecherche &&
                    correspondStatut
                ) {

                    ligne.style.display = "";

                } else {

                    ligne.style.display = "none";

                }

            }
        );

    }


    rechercheExamen.addEventListener(
        "input",
        filtrerExamens
    );


    filtreStatut.addEventListener(
        "change",
        filtrerExamens
    );


</script>


</body>

</html>