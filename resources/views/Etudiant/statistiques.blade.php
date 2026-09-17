<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Mes statistiques - EDUNOVA IA
    </title>


    <link
        rel="stylesheet"
        href="/etudiant/dashboard.css"
    >

    <link
        rel="stylesheet"
        href="/etudiant/statistiques.css"
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



            <a
                href="/etudiant/statistiques"
                class="active"
            >

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
                    Mes statistiques
                </h1>


                <p>
                    Consulte les données réelles de ton espace EDUNOVA.
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
             PAGE STATISTIQUES
        ================================================== -->

        <section class="statistiques-page">


            <!-- =================================================
                 INTRODUCTION
            ================================================== -->

            <div class="stats-intro">


                <div class="stats-intro-content">


                    <span class="section-badge">

                        📊 MES DONNÉES

                    </span>


                    <h2>

                        Suis ton activité sur EDUNOVA

                    </h2>


                    <p>

                        Consulte les cours et les examens actuellement
                        enregistrés dans ton espace étudiant.

                    </p>


                </div>



                <div class="stats-intro-icon">

                    📈

                </div>


            </div>



            <!-- =================================================
                 CARTES PRINCIPALES
            ================================================== -->

            <div class="main-stats-grid">


                <!-- COURS -->

                <div class="main-stat-card">


                    <div class="main-stat-top">


                        <div class="main-stat-icon blue">

                            📚

                        </div>


                    </div>


                    <span class="main-stat-label">

                        Cours disponibles

                    </span>


                    <strong class="main-stat-value">

                        {{ $nombreCours }}

                    </strong>


                    <p>

                        Cours actuellement enregistrés

                    </p>


                </div>



                <!-- EXAMENS -->

                <div class="main-stat-card">


                    <div class="main-stat-top">


                        <div class="main-stat-icon green">

                            📝

                        </div>


                    </div>


                    <span class="main-stat-label">

                        Examens disponibles

                    </span>


                    <strong class="main-stat-value">

                        {{ $nombreExamens }}

                    </strong>


                    <p>

                        Examens actuellement enregistrés

                    </p>


                </div>



                <!-- DOCUMENTS -->

                <div class="main-stat-card">


                    <div class="main-stat-top">


                        <div class="main-stat-icon orange">

                            📄

                        </div>


                    </div>


                    <span class="main-stat-label">

                        Documents disponibles

                    </span>


                    <strong class="main-stat-value">

                        {{ $nombreDocuments }}

                    </strong>


                    <p>

                        Documents associés aux cours

                    </p>


                </div>



                <!-- ACTIVITÉ -->

                <div class="main-stat-card">


                    <div class="main-stat-top">


                        <div class="main-stat-icon purple">

                            📊

                        </div>


                    </div>


                    <span class="main-stat-label">

                        Ressources disponibles

                    </span>


                    <strong class="main-stat-value">

                        {{ $nombreCours + $nombreExamens }}

                    </strong>


                    <p>

                        Cours et examens enregistrés

                    </p>


                </div>


            </div>



            <!-- =================================================
                 COURS + EXAMENS
            ================================================== -->

            <div class="stats-two-columns">


                <!-- =================================================
                     COURS RÉCENTS
                ================================================== -->

                <div class="stats-panel evolution-panel">


                    <div class="panel-header">


                        <div>


                            <h2>

                                Cours récemment ajoutés

                            </h2>


                            <p>

                                Les derniers cours enregistrés dans EDUNOVA.

                            </p>


                        </div>


                        <span class="period-badge">

                            {{ $nombreCours }} cours

                        </span>


                    </div>



                    <div class="results-list">


                        @forelse($coursRecents as $index => $cours)


                            <div class="result-row">


                                <div class="result-left">


                                    <div class="result-icon database">


                                        @if($index % 4 == 0)

                                            📚

                                        @elseif($index % 4 == 1)

                                            💻

                                        @elseif($index % 4 == 2)

                                            🤖

                                        @else

                                            📖

                                        @endif


                                    </div>


                                    <div>


                                        <strong>

                                            {{ $cours->titre }}

                                        </strong>


                                        <span>

                                            {{ $cours->classe ?? 'Classe non définie' }}

                                            •

                                            {{ $cours->serie ?? 'Série non définie' }}

                                        </span>


                                    </div>


                                </div>


                                <div class="result-right">


                                    <span class="result-badge good">

                                        Disponible

                                    </span>


                                </div>


                            </div>


                        @empty


                            <div class="empty-stat">


                                <div>
                                    📚
                                </div>


                                <p>

                                    Aucun cours enregistré.

                                </p>


                            </div>


                        @endforelse


                    </div>


                </div>



                <!-- =================================================
                     EXAMENS RÉCENTS
                ================================================== -->

                <div class="stats-panel objectives-panel">


                    <div class="panel-header">


                        <div>


                            <h2>

                                Examens récents

                            </h2>


                            <p>

                                Les dernières évaluations enregistrées.

                            </p>


                        </div>


                        <span class="period-badge">

                            {{ $nombreExamens }} examens

                        </span>


                    </div>



                    <div class="results-list">


                        @forelse($examensRecents as $index => $examen)


                            <div class="result-row">


                                <div class="result-left">


                                    <div class="result-icon programming">


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


                                    <div>


                                        <strong>

                                            {{ $examen->titre ?? 'Examen sans titre' }}

                                        </strong>


                                        <span>


                                            @if(!empty($examen->classe))

                                                {{ $examen->classe }}

                                            @else

                                                Classe non définie

                                            @endif


                                            •


                                            @if($examen->created_at)

                                                {{ $examen->created_at->format('d/m/Y') }}

                                            @else

                                                Date non définie

                                            @endif


                                        </span>


                                    </div>


                                </div>


                                <div class="result-right">


                                    <span class="result-badge good">

                                        Disponible

                                    </span>


                                </div>


                            </div>


                        @empty


                            <div class="empty-stat">


                                <div>
                                    📝
                                </div>


                                <p>

                                    Aucun examen enregistré.

                                </p>


                            </div>


                        @endforelse


                    </div>


                </div>


            </div>



            <!-- =================================================
                 INFORMATIONS COURS
            ================================================== -->

            <div class="performance-grid">


                <!-- =================================================
                     RÉPARTITION DES COURS
                ================================================== -->

                <div class="performance-panel">


                    <div class="performance-header">


                        <div class="performance-icon success-icon">

                            📚

                        </div>


                        <div>


                            <h2>

                                Informations sur les cours

                            </h2>


                            <p>

                                Données calculées à partir de la base.

                            </p>


                        </div>


                    </div>



                    <div class="strength-item">


                        <div class="strength-title">


                            <span>

                                Total des cours

                            </span>


                            <strong>

                                {{ $nombreCours }}

                            </strong>


                        </div>


                        <div class="mini-progress">


                            <div
                                class="mini-progress-fill strength-fill"
                                style="width: 100%;"
                            >
                            </div>


                        </div>


                        <small>

                            Nombre total de cours enregistrés.

                        </small>


                    </div>



                    <div class="strength-item">


                        <div class="strength-title">


                            <span>

                                Documents disponibles

                            </span>


                            <strong>

                                {{ $nombreDocuments }}

                            </strong>


                        </div>


                        <div class="mini-progress">


                            <div
                                class="mini-progress-fill strength-fill"
                                style="width:
                                    {{ $nombreCours > 0
                                        ? min(100, ($nombreDocuments / $nombreCours) * 100)
                                        : 0
                                    }}%;"
                            >
                            </div>


                        </div>


                        <small>

                            Cours possédant un document.

                        </small>


                    </div>


                </div>



                <!-- =================================================
                     RÉPARTITION DES EXAMENS
                ================================================== -->

                <div class="performance-panel">


                    <div class="performance-header">


                        <div class="performance-icon warning-icon">

                            📝

                        </div>


                        <div>


                            <h2>

                                Informations sur les examens

                            </h2>


                            <p>

                                Données actuellement disponibles.

                            </p>


                        </div>


                    </div>



                    <div class="strength-item">


                        <div class="strength-title">


                            <span>

                                Total des examens

                            </span>


                            <strong>

                                {{ $nombreExamens }}

                            </strong>


                        </div>


                        <div class="mini-progress">


                            <div
                                class="mini-progress-fill warning-fill"
                                style="width: 100%;"
                            >
                            </div>


                        </div>


                        <small>

                            Nombre total d'examens enregistrés.

                        </small>


                    </div>



                    <div class="strength-item">


                        <div class="strength-title">


                            <span>

                                Examens récents affichés

                            </span>


                            <strong>

                                {{ $examensRecents->count() }}

                            </strong>


                        </div>


                        <div class="mini-progress">


                            <div
                                class="mini-progress-fill warning-fill"
                                style="width:
                                    {{ $nombreExamens > 0
                                        ? min(100, ($examensRecents->count() / $nombreExamens) * 100)
                                        : 0
                                    }}%;"
                            >
                            </div>


                        </div>


                        <small>

                            Maximum 5 derniers examens affichés.

                        </small>


                    </div>


                </div>


            </div>



            <!-- =================================================
                 DERNIERS COURS
            ================================================== -->

            <div class="stats-panel recent-results">


                <div class="panel-header">


                    <div>


                        <h2>

                            Activité récente

                        </h2>


                        <p>

                            Aperçu des dernières ressources ajoutées.

                        </p>


                    </div>


                    <a
                        href="/etudiant/cours"
                        class="view-all"
                    >

                        Voir tous les cours →

                    </a>


                </div>



                <div class="results-list">


                    @forelse($coursRecents->take(3) as $index => $cours)


                        <div class="result-row">


                            <div class="result-left">


                                <div class="result-icon database">


                                    @if($index % 3 == 0)

                                        📚

                                    @elseif($index % 3 == 1)

                                        💻

                                    @else

                                        🤖

                                    @endif


                                </div>


                                <div>


                                    <strong>

                                        {{ $cours->titre }}

                                    </strong>


                                    <span>


                                        {{ $cours->classe ?? 'Classe non définie' }}

                                        •

                                        {{ $cours->serie ?? 'Série non définie' }}


                                        @if($cours->created_at)

                                            •
                                            {{ $cours->created_at->format('d/m/Y') }}

                                        @endif


                                    </span>


                                </div>


                            </div>


                            <div class="result-right">


                                <span class="result-badge good">

                                    Disponible

                                </span>


                            </div>


                        </div>


                    @empty


                        <div class="empty-stat">


                            <div>
                                📚
                            </div>


                            <p>

                                Aucune activité récente.

                            </p>


                        </div>


                    @endforelse


                </div>


            </div>



            <!-- =================================================
                 BLOC IA
            ================================================== -->

            <div class="ai-stat-card">


                <div class="ai-stat-icon">

                    🤖

                </div>


                <div class="ai-stat-content">


                    <span>

                        EDUNOVA IA

                    </span>


                    <h3>

                        Analyse personnalisée de ton apprentissage

                    </h3>


                    <p>

                        Ton assistant IA pourra analyser ton profil
                        d'apprentissage, tes activités et tes résultats
                        lorsque ces données seront enregistrées dans
                        la base de données.

                    </p>


                </div>


                <a
                    href="/etudiant/ia"
                    class="ai-stat-button"
                >

                    Consulter mon IA

                    <span>
                        →
                    </span>

                </a>


            </div>


        </section>


    </main>


</div>


</body>

</html>