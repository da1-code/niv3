<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Mes étudiants</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/etudiants.css">

</head>


<body>


    <!-- =====================================================
         SIDEBAR ENSEIGNANT
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
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

            <li class="active">
                <a href="/prof/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>

            <li>
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        style="
                            background: none;
                            border: none;
                            color: inherit;
                            font: inherit;
                            cursor: pointer;
                            width: 100%;
                            text-align: left;
                            padding: 0;
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


        <div class="students-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>
                        👨‍🎓 Mes étudiants
                    </h2>

                    <p>
                        Consultez les étudiants inscrits sur EDUNOVA IA
                        et leur classe.
                    </p>

                </div>

            </div>



            <!-- =================================================
                 STATISTIQUES
                 ================================================= -->

            <div class="student-stats">


                <!-- TOTAL ÉTUDIANTS -->

                <div class="student-stat-card">

                    <div class="stat-icon">
                        👨‍🎓
                    </div>

                    <div>

                        <span>
                            Total étudiants
                        </span>

                        <strong>
                            {{ $etudiants->count() }}
                        </strong>

                    </div>

                </div>


                <!-- ÉTUDIANTS ACTIFS -->

                <div class="student-stat-card">

                    <div class="stat-icon">
                        ✅
                    </div>

                    <div>

                        <span>
                            Étudiants actifs
                        </span>

                        <strong>
                            {{ $etudiants->where('actif', true)->count() }}
                        </strong>

                    </div>

                </div>


                <!-- ÉTUDIANTS INACTIFS -->

                <div class="student-stat-card">

                    <div class="stat-icon">
                        ⏸️
                    </div>

                    <div>

                        <span>
                            Étudiants inactifs
                        </span>

                        <strong>
                            {{ $etudiants->where('actif', false)->count() }}
                        </strong>

                    </div>

                </div>


                <!-- CLASSES -->

                <div class="student-stat-card">

                    <div class="stat-icon">
                        🏫
                    </div>

                    <div>

                        <span>
                            Classes représentées
                        </span>

                        <strong>
                            {{ $etudiants->pluck('idclasse')->filter()->unique()->count() }}
                        </strong>

                    </div>

                </div>


            </div>



            <!-- =================================================
                 RECHERCHE
                 ================================================= -->

            <div class="student-filters">

                <input
                    type="text"
                    id="searchStudent"
                    placeholder="🔍 Rechercher un étudiant..."
                >


                <select id="filterClasse">

                    <option value="">
                        Toutes les classes
                    </option>

                    @foreach($etudiants->pluck('classe')->filter()->unique('id') as $classe)

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
                 LISTE DES ÉTUDIANTS
                 ================================================= -->

            <div class="students-section">


                <div class="section-title">

                    <div>

                        <h3>
                            📋 Liste des étudiants
                        </h3>

                        <p>
                            Les informations ci-dessous sont récupérées
                            directement depuis la base de données.
                        </p>

                    </div>

                </div>



                <!-- =================================================
                     MESSAGE SI AUCUN ÉTUDIANT
                     ================================================= -->

                @if($etudiants->isEmpty())

                    <div class="empty-state">

                        <div style="font-size: 45px;">
                            👨‍🎓
                        </div>

                        <h3>
                            Aucun étudiant
                        </h3>

                        <p>
                            Aucun étudiant n'est actuellement enregistré
                            dans la base de données.
                        </p>

                    </div>

                @else


                    <!-- =================================================
                         BOUCLE DES ÉTUDIANTS
                         ================================================= -->

                    <div id="studentsList">

                        @foreach($etudiants as $etudiant)

                            <div
                                class="student-card"
                                data-name="{{ strtolower($etudiant->name) }}"
                                data-email="{{ strtolower($etudiant->email) }}"
                                data-classe="{{ $etudiant->idclasse }}"
                                data-statut="{{ $etudiant->actif ? 'actif' : 'inactif' }}"
                            >


                                <!-- AVATAR -->

                                <div class="student-avatar">

                                    {{ strtoupper(substr($etudiant->name, 0, 2)) }}

                                </div>



                                <!-- INFORMATIONS PRINCIPALES -->

                                <div class="student-main">

                                    <h3>
                                        {{ $etudiant->name }}
                                    </h3>

                                    <p class="student-email">

                                        {{ $etudiant->email }}

                                    </p>


                                    <div class="student-course">

                                        🏫

                                        @if($etudiant->classe)

                                            {{ $etudiant->classe->nom }}

                                        @else

                                            Classe non renseignée

                                        @endif

                                    </div>

                                </div>



                                <!-- CLASSE -->

                                <div class="student-average">

                                    <span>
                                        Classe
                                    </span>

                                    <strong>

                                        {{ $etudiant->classe->nom ?? 'Non renseignée' }}

                                    </strong>

                                </div>



                                <!-- STATUT -->

                                <div
                                    class="student-level
                                    {{ $etudiant->actif ? 'excellent' : 'warning' }}"
                                >

                                    @if($etudiant->actif)

                                        Actif

                                    @else

                                        Inactif

                                    @endif

                                </div>



                                <!-- ACTION -->

                                <div class="student-actions">

                                    <a
                                        href="#"
                                        class="btn-report"
                                        onclick="return false;"
                                    >
                                        📊 Voir le rapport
                                    </a>

                                </div>


                            </div>

                        @endforeach

                    </div>

                @endif


            </div>



            <!-- =================================================
                 INFORMATIONS PÉDAGOGIQUES
                 ================================================= -->

            <div class="reports-section">


                <div class="section-title">

                    <div>

                        <h3>
                            📊 Suivi pédagogique
                        </h3>

                        <p>
                            Les statistiques de progression, les moyennes
                            et les recommandations seront disponibles lorsque
                            les données pédagogiques seront enregistrées.
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
                                Aucune donnée de progression disponible
                                pour le moment.
                            </p>

                        </div>



                        <!-- MOYENNE -->

                        <div class="report-box">

                            <h4>
                                ⭐ Moyenne générale
                            </h4>

                            <p>
                                Les moyennes seront affichées lorsque
                                les résultats des examens seront enregistrés.
                            </p>

                        </div>



                        <!-- IA -->

                        <div class="report-box">

                            <h4>
                                🤖 Analyse IA
                            </h4>

                            <p>
                                L'analyse personnalisée par l'IA sera
                                affichée lorsque les données d'apprentissage
                                des étudiants seront disponibles.
                            </p>

                        </div>


                    </div>


                </div>

            </div>


        </div>


    </main>



    <!-- =====================================================
         RECHERCHE / FILTRES JAVASCRIPT
         ===================================================== -->

    <script>

        const searchInput = document.getElementById('searchStudent');
        const filterClasse = document.getElementById('filterClasse');
        const filterStatut = document.getElementById('filterStatut');

        function filtrerEtudiants() {

            const recherche =
                searchInput.value.toLowerCase().trim();

            const classe =
                filterClasse.value;

            const statut =
                filterStatut.value;

            const cards =
                document.querySelectorAll('.student-card');


            cards.forEach(card => {

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
                ) {

                    card.style.display = '';

                } else {

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