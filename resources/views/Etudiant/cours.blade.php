<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        EDUNOVA - Mes cours
    </title>

    <link
        rel="stylesheet"
        href="/etudiant/dashboard.css"
    >

    <link
        rel="stylesheet"
        href="/etudiant/cours.css"
    >

</head>


<body>

<div class="student-container">


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>


            <div class="logo-text">

                <h2>
                    EDUNOVA
                </h2>

                <span>
                    Plateforme éducative
                </span>

            </div>

        </div>



        <!-- =================================================
             PROFIL ÉTUDIANT
             ================================================= -->

        <div class="profile-mini">


            <div class="avatar">

                {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

            </div>


            <div>

                <strong>

                    {{ $etudiant->prenom }}
                    {{ $etudiant->nom }}

                </strong>


                <small>
                    Étudiante
                </small>

            </div>

        </div>



        <!-- =================================================
             MENU
             ================================================= -->

        <nav class="menu">


            <a href="/etudiant/dashboard">

                <span>
                    🏠
                </span>

                Tableau de bord

            </a>



            <a href="/etudiant/profil">

                <span>
                    👤
                </span>

                Mon profil

            </a>



            <a href="/etudiant/profil-apprentissage">

                <span>
                    🧠
                </span>

                Profil d'apprentissage

            </a>



            <a
                href="/etudiant/cours"
                class="active"
            >

                <span>
                    📚
                </span>

                Mes cours

            </a>



            <a href="/etudiant/examens">

                <span>
                    📝
                </span>

                Examens

            </a>



            <a href="/etudiant/ia">

                <span>
                    🤖
                </span>

                Mon IA

            </a>



            <a href="/etudiant/statistiques">

                <span>
                    📊
                </span>

                Mes statistiques

            </a>



            <a href="/etudiant/parametres">

                <span>
                    ⚙️
                </span>

                Paramètres

            </a>

        </nav>



        <!-- =================================================
             DÉCONNEXION
             ================================================= -->

        <div class="sidebar-bottom">

            <a
                href="/logout"
                class="logout"
            >

                <span>
                    🚪
                </span>

                Déconnexion

            </a>

        </div>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
         ===================================================== -->

    <main class="main-content">


        <!-- =================================================
             HEADER
             ================================================= -->

        <header class="topbar">


            <div class="page-title">

                <h1>
                    Mes cours 📚
                </h1>


                <p>
                    Consulte les cours disponibles sur EDUNOVA.
                </p>

            </div>



            <div class="top-actions">


                <a
                    href="#"
                    class="notification"
                >

                    🔔

                    <span></span>

                </a>



                <!-- UTILISATEUR RÉEL -->

                <div class="student-user">


                    <div class="user-avatar">

                        {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

                    </div>


                    <div>

                        <strong>

                            {{ $etudiant->prenom }}
                            {{ $etudiant->nom }}

                        </strong>


                        <small>
                            Étudiante
                        </small>

                    </div>

                </div>

            </div>

        </header>



        <!-- =================================================
             STATISTIQUES
             ================================================= -->

        <section class="course-overview">


            <!-- TOTAL COURS -->

            <div class="overview-card">


                <div class="overview-icon blue">

                    📚

                </div>


                <div>

                    <span>
                        Total des cours
                    </span>


                    <strong>

                        {{ $cours->count() }}

                    </strong>

                </div>

            </div>



            <!-- COURS DISPONIBLES -->

            <div class="overview-card">


                <div class="overview-icon green">

                    📖

                </div>


                <div>

                    <span>
                        Cours disponibles
                    </span>


                    <strong>

                        {{ $cours->count() }}

                    </strong>

                </div>

            </div>



            <!-- COURS AVEC DOCUMENT -->

            <div class="overview-card">


                <div class="overview-icon purple">

                    📄

                </div>


                <div>

                    <span>
                        Avec document
                    </span>


                    <strong>

                        {{ $cours->whereNotNull('document')->count() }}

                    </strong>

                </div>

            </div>



            <!-- COURS RÉCENTS -->

            <div class="overview-card">


                <div class="overview-icon orange">

                    🆕

                </div>


                <div>

                    <span>
                        Ajoutés récemment
                    </span>


                    <strong>

                        {{ $cours->take(5)->count() }}

                    </strong>

                </div>

            </div>

        </section>



        <!-- =================================================
             RECHERCHE
             ================================================= -->

        <section class="courses-toolbar">


            <div class="search-box">

                <span>
                    🔎
                </span>


                <input
                    type="text"
                    id="courseSearch"
                    placeholder="Rechercher un cours..."
                >

            </div>



            <!-- FILTRES -->

            <div class="course-filters">


                <button
                    type="button"
                    class="filter-btn active"
                    onclick="filterCourses('all', this)"
                >
                    Tous
                </button>


                <button
                    type="button"
                    class="filter-btn"
                    onclick="filterCourses('scientifique', this)"
                >
                    Scientifique
                </button>


                <button
                    type="button"
                    class="filter-btn"
                    onclick="filterCourses('litteraire', this)"
                >
                    Littéraire
                </button>

            </div>

        </section>



        <!-- =================================================
             TITRE
             ================================================= -->

        <div class="section-heading">


            <div>

                <h2>
                    Cours disponibles
                </h2>


                <p>

                    Les cours affichés ci-dessous proviennent
                    directement de la base de données.

                </p>

            </div>


            <span class="course-count">

                {{ $cours->count() }}

                {{ $cours->count() > 1 ? 'cours' : 'cours' }}

            </span>

        </div>



        <!-- =================================================
             LISTE DES COURS
             ================================================= -->

        <section
            class="courses-grid"
            id="coursesGrid"
        >


            @forelse($cours as $index => $unCours)


                <!-- =================================================
                     CARTE COURS
                     ================================================= -->

                <article
                    class="course-card"
                    data-serie="{{ strtolower($unCours->serie ?? '') }}"
                >


                    <!-- HEADER -->

                    <div
                        class="
                            course-header
                            @if($index % 4 == 0)
                                blue-bg
                            @elseif($index % 4 == 1)
                                purple-bg
                            @elseif($index % 4 == 2)
                                green-bg
                            @else
                                orange-bg
                            @endif
                        "
                    >


                        <div class="course-icon">


                            @if($index % 4 == 0)

                                💻

                            @elseif($index % 4 == 1)

                                📚

                            @elseif($index % 4 == 2)

                                🤖

                            @else

                                📖

                            @endif


                        </div>



                        <span class="course-status new">

                            Disponible

                        </span>

                    </div>



                    <!-- CORPS -->

                    <div class="course-body">


                        <!-- CATÉGORIE / CLASSE -->

                        <span class="course-category">

                            {{ $unCours->classe ?? 'Classe non définie' }}

                        </span>



                        <!-- TITRE -->

                        <h3>

                            {{ $unCours->titre }}

                        </h3>



                        <!-- DESCRIPTION -->

                        <p>

                            {{ $unCours->description ?? 'Aucune description disponible pour ce cours.' }}

                        </p>



                        <!-- INFORMATIONS -->

                        <div class="course-meta">


                            <span>

                                🎓

                                {{ $unCours->classe ?? 'Classe non définie' }}

                            </span>


                            <span>

                                📘

                                {{ $unCours->serie ?? 'Série non définie' }}

                            </span>

                        </div>



                        <!-- DOCUMENT -->

                        <div class="progress-info">


                            <div>

                                <span>
                                    Document
                                </span>


                                <strong>

                                    @if($unCours->document)

                                        Disponible

                                    @else

                                        Non disponible

                                    @endif

                                </strong>

                            </div>


                            <div class="progress-bar">


                                @if($unCours->document)

                                    <span style="width: 100%;"></span>

                                @else

                                    <span style="width: 0%;"></span>

                                @endif


                            </div>

                        </div>



                        <!-- BOUTON -->

                        @if($unCours->document)


                            <a
                                href="{{ asset('storage/' . $unCours->document) }}"
                                target="_blank"
                                class="course-btn"
                            >

                                Consulter le cours →

                            </a>


                        @else


                            <button
                                type="button"
                                class="course-btn"
                            >

                                Cours disponible →

                            </button>


                        @endif

                    </div>

                </article>


            @empty


                <!-- =================================================
                     AUCUN COURS
                     ================================================= -->

                <div class="empty-courses">


                    <div class="course-icon">
                        📚
                    </div>


                    <h3>
                        Aucun cours disponible
                    </h3>


                    <p>

                        Aucun cours n'est actuellement enregistré
                        dans la base de données.

                    </p>

                </div>


            @endforelse


        </section>



        <!-- =================================================
             IA
             ================================================= -->

        <section class="course-ai">


            <div class="ai-icon">
                🤖
            </div>


            <div class="ai-content">


                <span>
                    EDUNOVA IA
                </span>


                <h2>
                    Besoin d'aide avec tes cours ?
                </h2>


                <p>

                    Ton assistant IA pourra t'aider à comprendre
                    les cours disponibles sur EDUNOVA.

                </p>

            </div>


            <a
                href="/etudiant/ia"
                class="ai-btn"
            >

                Demander à mon IA →

            </a>

        </section>


    </main>

</div>



<!-- =====================================================
     JAVASCRIPT
     ===================================================== -->

<script>


/*
|--------------------------------------------------------------------------
| RECHERCHE
|--------------------------------------------------------------------------
*/

const searchInput = document.getElementById('courseSearch');


searchInput.addEventListener('input', function () {


    const search = this.value.toLowerCase();


    const cards = document.querySelectorAll('.course-card');


    cards.forEach(function (card) {


        const text = card.innerText.toLowerCase();


        if (text.includes(search)) {

            card.style.display = '';

        } else {

            card.style.display = 'none';

        }

    });

});



/*
|--------------------------------------------------------------------------
| FILTRE PAR SÉRIE
|--------------------------------------------------------------------------
*/

function filterCourses(filter, button)
{


    const cards = document.querySelectorAll('.course-card');

    const buttons = document.querySelectorAll('.filter-btn');


    buttons.forEach(function (btn) {

        btn.classList.remove('active');

    });


    button.classList.add('active');


    cards.forEach(function (card) {


        const serie = card.dataset.serie;


        if (filter === 'all') {

            card.style.display = '';

        }

        else if (serie.includes(filter)) {

            card.style.display = '';

        }

        else {

            card.style.display = 'none';

        }

    });

}

</script>


</body>

</html>