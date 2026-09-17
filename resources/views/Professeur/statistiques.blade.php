<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Statistiques</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/statistiques.css">

</head>


<body>


    <!-- =====================================================
         SIDEBAR ENSEIGNANT
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">

            <h2>
                EDUNOVA IA
            </h2>

        </div>


        <ul class="menu">

            <li>
                <a href="/prof/dashboard">
                    🏠 Dashboard
                </a>
            </li>


            <li>
                <a href="/prof/cours">
                    📚 Mes cours
                </a>
            </li>


            <li>
                <a href="/prof/examens">
                    📝 Examens
                </a>
            </li>


            <li>
                <a href="/prof/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>


            <li class="active">
                <a href="/prof/statistiques">
                    📊 Statistiques
                </a>
            </li>


            <li>
                <a href="/prof/parametres">
                    ⚙️ Paramètres
                </a>
            </li>


            <li>

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        style="
                            background:none;
                            border:none;
                            color:inherit;
                            font:inherit;
                            cursor:pointer;
                            width:100%;
                            text-align:left;
                            padding:0;
                        "
                    >

                        🚪 Déconnexion

                    </button>

                </form>

            </li>

        </ul>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
         ===================================================== -->

    <main class="main-content">


        <div class="stats-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>
                        📊 Évolution des étudiants
                    </h2>

                    <p>
                        Consultez les données et les analyses
                        pédagogiques générées par EDUNOVA IA.
                    </p>

                </div>

            </div>



            <!-- =================================================
                 CARTES RÉSUMÉ
                 ================================================= -->

            <div class="stats-grid">


                <!-- TOTAL -->

                <div class="stat-card">

                    <h3>
                        👨‍🎓 Étudiants suivis
                    </h3>

                    <span>
                        {{ $totalEtudiants }}
                    </span>

                    <p>
                        Étudiants inscrits
                    </p>

                </div>



                <!-- ACTIFS -->

                <div class="stat-card">

                    <h3>
                        ✅ Étudiants actifs
                    </h3>

                    <span>
                        {{ $etudiantsActifs }}
                    </span>

                    <p>
                        Comptes actifs
                    </p>

                </div>



                <!-- CLASSES -->

                <div class="stat-card">

                    <h3>
                        🏫 Classes
                    </h3>

                    <span>
                        {{ $totalClasses }}
                    </span>

                    <p>
                        Classes représentées
                    </p>

                </div>



                <!-- ANALYSE IA -->

                <div class="stat-card">

                    <h3>
                        🤖 Analyse IA
                    </h3>

                    <span>
                        —
                    </span>

                    <p>
                        En attente d'activation
                    </p>

                </div>


            </div>



            <!-- =================================================
                 RECHERCHE ET FILTRES
                 ================================================= -->

            <div class="filter-section">


                <input
                    type="text"
                    id="searchStudent"
                    placeholder="🔍 Rechercher un étudiant..."
                >


                <select id="filterClasse">

                    <option value="">
                        Toutes les classes
                    </option>


                    @foreach(
                        $etudiants
                            ->pluck('classe')
                            ->filter()
                            ->unique('id')
                            ->sortBy('nom')
                        as $classe
                    )

                        <option value="{{ $classe->id }}">

                            {{ $classe->nom }}

                        </option>

                    @endforeach

                </select>


                <select id="filterStatut">

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="actif">
                        Actif
                    </option>

                    <option value="inactif">
                        Inactif
                    </option>

                </select>


            </div>



            <!-- =================================================
                 PROGRESSION DES ÉTUDIANTS
                 ================================================= -->

            <div class="performance">


                <div class="section-title">

                    <div>

                        <h3>
                            📈 Suivi individuel
                        </h3>

                        <p>
                            Les analyses de progression seront
                            calculées automatiquement par l'IA.
                        </p>

                    </div>

                </div>



                @if($etudiants->isEmpty())


                    <!-- =================================================
                         AUCUN ÉTUDIANT
                         ================================================= -->

                    <div class="empty-state">

                        <div style="font-size:45px;">
                            👨‍🎓
                        </div>

                        <h3>
                            Aucun étudiant
                        </h3>

                        <p>
                            Aucun étudiant n'est actuellement
                            enregistré dans EDUNOVA IA.
                        </p>

                    </div>


                @else


                    <!-- =================================================
                         LISTE DYNAMIQUE
                         ================================================= -->

                    <div id="studentsList">


                        @foreach($etudiants as $etudiant)


                            <div
                                class="student-progress"
                                data-name="{{ strtolower($etudiant->name) }}"
                                data-email="{{ strtolower($etudiant->email) }}"
                                data-classe="{{ $etudiant->idclasse }}"
                                data-statut="{{ $etudiant->actif ? 'actif' : 'inactif' }}"
                            >


                                <!-- INFORMATIONS ÉTUDIANT -->

                                <div class="student-info">


                                    <div class="avatar">

                                        {{ strtoupper(
                                            substr(
                                                $etudiant->name,
                                                0,
                                                2
                                            )
                                        ) }}

                                    </div>


                                    <div>

                                        <strong>

                                            {{ $etudiant->name }}

                                        </strong>


                                        <span>

                                            {{ $etudiant->email }}

                                        </span>


                                        <span>

                                            🏫

                                            @if($etudiant->classe)

                                                {{ $etudiant->classe->nom }}

                                            @else

                                                Classe non renseignée

                                            @endif

                                        </span>

                                    </div>

                                </div>



                                <!-- MOYENNE -->

                                <div class="student-note">

                                    <span>
                                        Moyenne
                                    </span>

                                    <strong>
                                        —
                                    </strong>

                                    <small>
                                        Analyse IA
                                    </small>

                                </div>



                                <!-- PROGRESSION -->

                                <div class="progress-container">


                                    <div class="progress-info">

                                        <span>
                                            Progression
                                        </span>

                                        <strong>
                                            —
                                        </strong>

                                    </div>


                                    <div class="progress-bar">

                                        <div
                                            class="progress"
                                            style="width:0%;"
                                        >
                                        </div>

                                    </div>


                                    <small>
                                        En attente d'analyse IA
                                    </small>

                                </div>



                                <!-- STATUT -->

                                <div
                                    class="
                                        student-level
                                        {{ $etudiant->actif
                                            ? 'success'
                                            : 'warning'
                                        }}
                                    "
                                >

                                    @if($etudiant->actif)

                                        Actif

                                    @else

                                        Inactif

                                    @endif

                                </div>



                                <!-- DÉTAILS -->

                                <a
                                    href="#"
                                    class="btn-details"
                                    onclick="return false;"
                                >

                                    Voir détails

                                </a>


                            </div>


                        @endforeach


                    </div>


                @endif


            </div>



            <!-- =================================================
                 ANALYSE IA
                 ================================================= -->

            <div class="recent-results">


                <div class="section-title">

                    <div>

                        <h3>
                            🤖 Analyse pédagogique par IA
                        </h3>

                        <p>
                            Cette section sera alimentée automatiquement
                            par le moteur d'intelligence artificielle
                            d'EDUNOVA IA.
                        </p>

                    </div>

                </div>



                <div class="report-card">


                    <div class="report-grid">


                        <!-- PROGRESSION -->

                        <div class="report-box">

                            <h4>
                                📈 Progression
                            </h4>

                            <p>
                                L'IA analysera les résultats et
                                l'évolution de chaque étudiant.
                            </p>

                        </div>



                        <!-- MOYENNE -->

                        <div class="report-box">

                            <h4>
                                ⭐ Moyennes
                            </h4>

                            <p>
                                Les moyennes seront calculées à partir
                                des résultats des examens.
                            </p>

                        </div>



                        <!-- RECOMMANDATIONS -->

                        <div class="report-box">

                            <h4>
                                💡 Recommandations
                            </h4>

                            <p>
                                L'IA pourra proposer des recommandations
                                pédagogiques personnalisées.
                            </p>

                        </div>


                    </div>


                </div>


            </div>


        </div>


    </main>



    <!-- =====================================================
         FILTRAGE JAVASCRIPT
         ===================================================== -->

    <script>

        const searchInput =
            document.getElementById('searchStudent');

        const filterClasse =
            document.getElementById('filterClasse');

        const filterStatut =
            document.getElementById('filterStatut');


        function filtrerEtudiants()
        {

            const recherche =
                searchInput.value
                    .toLowerCase()
                    .trim();


            const classe =
                filterClasse.value;


            const statut =
                filterStatut.value;


            const cards =
                document.querySelectorAll(
                    '.student-progress'
                );


            cards.forEach(card =>
            {

                const nom =
                    card.dataset.name;

                const email =
                    card.dataset.email;

                const cardClasse =
                    card.dataset.classe;

                const cardStatut =
                    card.dataset.statut;


                const correspondRecherche =
                    nom.includes(recherche) ||
                    email.includes(recherche);


                const correspondClasse =
                    classe === '' ||
                    cardClasse === classe;


                const correspondStatut =
                    statut === '' ||
                    cardStatut === statut;


                if (
                    correspondRecherche &&
                    correspondClasse &&
                    correspondStatut
                )
                {

                    card.style.display = '';

                }
                else
                {

                    card.style.display = 'none';

                }

            });

        }


        searchInput.addEventListener(
            'input',
            filtrerEtudiants
        );


        filterClasse.addEventListener(
            'change',
            filtrerEtudiants
        );


        filterStatut.addEventListener(
            'change',
            filtrerEtudiants
        );

    </script>


</body>

</html>