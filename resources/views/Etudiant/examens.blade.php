<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Examens - EDUNOVA IA
    </title>

    <link
        rel="stylesheet"
        href="/etudiant/dashboard.css"
    >

    <link
        rel="stylesheet"
        href="/etudiant/examens.css"
    >

</head>


<body>

<div class="student-layout">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="logo-area">

            <div class="logo-icon">
                E
            </div>


            <div class="logo-text">

                <h2>
                    EDUNOVA
                </h2>

                <span>
                    IA Éducative
                </span>

            </div>

        </div>



        <!-- =================================================
             MENU
        ================================================== -->

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



            <a href="/etudiant/cours">

                <span>
                    📚
                </span>

                Mes cours

            </a>



            <a
                href="/etudiant/examens"
                class="active"
            >

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
             UTILISATEUR
        ================================================== -->

        <div class="sidebar-footer">


            <div class="user-mini">


                <div class="user-avatar">

                    {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

                </div>


                <div class="user-info">

                    <strong>

                        {{ $etudiant->prenom }}
                        {{ $etudiant->nom }}

                    </strong>


                    <span>
                        Étudiante
                    </span>

                </div>


            </div>


        </div>


    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             TOPBAR
        ================================================== -->

        <header class="topbar">


            <div class="topbar-title">

                <h1>
                    Mes examens
                </h1>


                <p>
                    Consulte les examens disponibles sur EDUNOVA.
                </p>

            </div>



            <div class="topbar-actions">


                <button
                    type="button"
                    class="notification-btn"
                >

                    🔔

                    <span class="notification-dot"></span>

                </button>



                <!-- PROFIL RÉEL -->

                <div class="profile-mini">


                    <div class="profile-avatar">

                        {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

                    </div>


                    <div>

                        <strong>

                            {{ $etudiant->prenom }}
                            {{ $etudiant->nom }}

                        </strong>


                        <span>
                            Étudiante
                        </span>

                    </div>


                </div>


            </div>


        </header>



        <!-- =================================================
             PAGE EXAMENS
        ================================================== -->

        <section class="examens-page">


            <!-- =================================================
                 INTRODUCTION
            ================================================== -->

            <div class="examens-intro">


                <div>


                    <span class="section-badge">

                        📝 ÉVALUATIONS

                    </span>


                    <h2>
                        Prépare-toi pour tes examens
                    </h2>


                    <p>

                        Consulte les évaluations actuellement
                        enregistrées sur EDUNOVA.

                    </p>


                </div>



                <div class="examens-intro-icon">

                    📝

                </div>


            </div>



            <!-- =================================================
                 STATISTIQUES RÉELLES
            ================================================== -->

            <div class="examens-stats">


                <!-- EXAMENS DISPONIBLES -->

                <div class="exam-stat-card">


                    <div class="exam-stat-icon available">

                        📝

                    </div>


                    <div>

                        <span>
                            Examens disponibles
                        </span>


                        <strong>

                            {{ $examens->count() }}

                        </strong>

                    </div>


                </div>



                <!-- EXAMENS ENREGISTRÉS -->

                <div class="exam-stat-card">


                    <div class="exam-stat-icon completed">

                        📋

                    </div>


                    <div>

                        <span>
                            Examens enregistrés
                        </span>


                        <strong>

                            {{ $examens->count() }}

                        </strong>

                    </div>


                </div>



                <!-- DERNIER EXAMEN -->

                <div class="exam-stat-card">


                    <div class="exam-stat-icon score">

                        🆕

                    </div>


                    <div>

                        <span>
                            Derniers examens
                        </span>


                        <strong>

                            {{ $examens->take(5)->count() }}

                        </strong>

                    </div>


                </div>



                <!-- TOTAL -->

                <div class="exam-stat-card">


                    <div class="exam-stat-icon progress">

                        📊

                    </div>


                    <div>

                        <span>
                            Total en base
                        </span>


                        <strong>

                            {{ $examens->count() }}

                        </strong>

                    </div>


                </div>


            </div>



            <!-- =================================================
                 TITRE EXAMENS
            ================================================== -->

            <div class="section-header">


                <div>

                    <h2>
                        Examens disponibles
                    </h2>


                    <p>

                        Voici les examens actuellement
                        enregistrés dans la base de données.

                    </p>


                </div>


                <span class="exam-count">

                    {{ $examens->count() }}

                    {{ $examens->count() > 1 ? 'examens' : 'examen' }}

                </span>


            </div>



            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="exam-search">


                <span>
                    🔎
                </span>


                <input
                    type="text"
                    id="examSearch"
                    placeholder="Rechercher un examen..."
                >


            </div>



            <!-- =================================================
                 LISTE DES EXAMENS
            ================================================== -->

            <div
                class="exam-grid"
                id="examGrid"
            >


                @forelse($examens as $index => $examen)


                    <!-- =================================================
                         CARTE EXAMEN
                    ================================================== -->

                    <article
                        class="exam-card"
                        data-search="{{ strtolower(
                            ($examen->titre ?? '') . ' ' .
                            ($examen->description ?? '') . ' ' .
                            ($examen->matiere ?? '') . ' ' .
                            ($examen->classe ?? '')
                        ) }}"
                    >


                        <!-- TOP -->

                        <div class="exam-card-top">


                            <span class="subject-badge">

                                {{ $examen->matiere
                                    ?? $examen->classe
                                    ?? 'Évaluation' }}

                            </span>


                            <span class="status available-status">

                                Disponible

                            </span>


                        </div>



                        <!-- ICÔNE -->

                        <div class="exam-icon">


                            @if($index % 4 == 0)

                                📝

                            @elseif($index % 4 == 1)

                                🤖

                            @elseif($index % 4 == 2)

                                💻

                            @else

                                📐

                            @endif


                        </div>



                        <!-- TITRE -->

                        <h3>

                            {{ $examen->titre
                                ?? 'Examen sans titre' }}

                        </h3>



                        <!-- DESCRIPTION -->

                        <p>

                            {{ $examen->description
                                ?? 'Aucune description disponible pour cet examen.' }}

                        </p>



                        <!-- INFORMATIONS -->

                        <div class="exam-details">


                            <!-- CLASSE -->

                            @if(!empty($examen->classe))

                                <div>

                                    <span>
                                        🎓
                                    </span>

                                    <strong>

                                        {{ $examen->classe }}

                                    </strong>

                                </div>

                            @endif



                            <!-- SÉRIE -->

                            @if(!empty($examen->serie))

                                <div>

                                    <span>
                                        📘
                                    </span>

                                    <strong>

                                        {{ $examen->serie }}

                                    </strong>

                                </div>

                            @endif



                            <!-- DATE -->

                            @if(!empty($examen->created_at))

                                <div>

                                    <span>
                                        📅
                                    </span>

                                    <strong>

                                        {{ $examen->created_at->format('d/m/Y') }}

                                    </strong>

                                </div>

                            @endif


                        </div>



                        <!-- BOUTON -->

                        <a
                            href="#"
                            class="btn-start"
                        >

                            Consulter l'examen

                            <span>
                                →
                            </span>

                        </a>


                    </article>


                @empty


                    <!-- =================================================
                         AUCUN EXAMEN
                    ================================================== -->

                    <div class="empty-exams">


                        <div class="empty-icon">
                            📝
                        </div>


                        <h3>
                            Aucun examen disponible
                        </h3>


                        <p>

                            Aucun examen n'est actuellement
                            enregistré dans la base de données.

                        </p>


                    </div>


                @endforelse


            </div>



            <!-- =================================================
                 EXAMENS RÉCENTS
            ================================================== -->

            <div class="section-header completed-header">


                <div>

                    <h2>
                        Examens récemment ajoutés
                    </h2>


                    <p>

                        Les dernières évaluations enregistrées
                        dans EDUNOVA.

                    </p>

                </div>


                <span class="exam-count">

                    {{ $examens->take(5)->count() }}

                </span>


            </div>



            <!-- =================================================
                 TABLEAU
            ================================================== -->

            <div class="results-table-container">


                <table class="results-table">


                    <thead>

                        <tr>

                            <th>
                                Examen
                            </th>

                            <th>
                                Classe
                            </th>

                            <th>
                                Série
                            </th>

                            <th>
                                Date
                            </th>

                            <th>
                                Statut
                            </th>

                        </tr>

                    </thead>



                    <tbody>


                        @forelse($examens->take(5) as $index => $examen)


                            <tr>


                                <!-- EXAMEN -->

                                <td>


                                    <div class="exam-name">


                                        <div class="table-icon">


                                            @if($index % 4 == 0)
                                                📝
                                            @elseif($index % 4 == 1)
                                                🤖
                                            @elseif($index % 4 == 2)
                                                💻
                                            @else
                                                📐
                                            @endif


                                        </div>


                                        <strong>

                                            {{ $examen->titre
                                                ?? 'Examen sans titre' }}

                                        </strong>


                                    </div>


                                </td>



                                <!-- CLASSE -->

                                <td>

                                    {{ $examen->classe
                                        ?? 'Non définie' }}

                                </td>



                                <!-- SÉRIE -->

                                <td>

                                    {{ $examen->serie
                                        ?? 'Non définie' }}

                                </td>



                                <!-- DATE -->

                                <td>

                                    @if($examen->created_at)

                                        {{ $examen->created_at->format('d/m/Y') }}

                                    @else

                                        —

                                    @endif

                                </td>



                                <!-- STATUT -->

                                <td>

                                    <span class="result-success">

                                        Disponible

                                    </span>

                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td
                                    colspan="5"
                                    style="text-align:center;"
                                >

                                    Aucun examen enregistré.

                                </td>

                            </tr>


                        @endforelse


                    </tbody>


                </table>


            </div>



            <!-- =================================================
                 BLOC IA
            ================================================== -->

            <div class="ai-recommendation">


                <div class="ai-icon">

                    🤖

                </div>



                <div class="ai-content">


                    <span class="ai-label">

                        EDUNOVA IA

                    </span>


                    <h3>

                        Prépare ton prochain examen avec ton IA

                    </h3>


                    <p>

                        Ton assistant IA peut t'aider à comprendre
                        tes cours, réviser les notions importantes
                        et t'entraîner avec des questions adaptées.

                    </p>


                </div>



                <a
                    href="/etudiant/ia"
                    class="btn-ai"
                >

                    Discuter avec mon IA

                    <span>
                        →
                    </span>

                </a>


            </div>


        </section>


    </main>


</div>



<!-- =====================================================
     RECHERCHE JAVASCRIPT
====================================================== -->

<script>

const examSearch = document.getElementById('examSearch');

const examCards = document.querySelectorAll('.exam-card');


if (examSearch) {

    examSearch.addEventListener('input', function () {

        const search = this.value.toLowerCase().trim();


        examCards.forEach(function (card) {

            const text = card.dataset.search || '';


            if (text.includes(search)) {

                card.style.display = '';

            } else {

                card.style.display = 'none';

            }

        });

    });

}

</script>


</body>

</html>