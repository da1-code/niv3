<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes statistiques - EDUNOVA IA</title>

   <link rel="stylesheet" href="/etudiant/dashboard.css">
   <link rel="stylesheet" href="/etudiant/statistiques.css">
</head>

<body>

<div class="student-layout">

    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}
    <aside class="sidebar">

        <div class="logo-area">
            <div class="logo-icon">E</div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>IA Éducative</span>
            </div>
        </div>

        <nav class="menu">

            <a href="/etudiant/dashboard">
                <span>🏠</span>
                Tableau de bord
            </a>

            <a href="/etudiant/profil">
                <span>👤</span>
                Mon profil
            </a>

            <a href="/etudiant/profil-apprentissage">
                <span>🧠</span>
                Profil d'apprentissage
            </a>

            <a href="/etudiant/cours">
                <span>📚</span>
                Mes cours
            </a>

            <a href="/etudiant/examens">
                <span>📝</span>
                Examens
            </a>

            <a href="/etudiant/ia">
                <span>🤖</span>
                Mon IA
            </a>

            <a href="/etudiant/statistiques" class="active">
                <span>📊</span>
                Mes statistiques
            </a>

            <a href="/etudiant/parametres">
                <span>⚙️</span>
                Paramètres
            </a>

        </nav>

        <div class="sidebar-footer">

            <div class="user-mini">

                <div class="user-avatar">
                    D
                </div>

                <div class="user-info">
                    <strong>Daniella</strong>
                    <span>Étudiante</span>
                </div>

            </div>

        </div>

    </aside>


    {{-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== --}}
    <main class="main-content">

        {{-- TOPBAR --}}
        <header class="topbar">

            <div class="topbar-title">

                <h1>Mes statistiques</h1>

                <p>
                    Analyse ta progression et améliore tes performances.
                </p>

            </div>

            <div class="topbar-actions">

                <button class="notification-btn">
                    🔔
                    <span class="notification-dot"></span>
                </button>

                <div class="profile-mini">

                    <div class="profile-avatar">
                        D
                    </div>

                    <div>
                        <strong>Daniella</strong>
                        <span>Étudiante</span>
                    </div>

                </div>

            </div>

        </header>


        {{-- =====================================================
             PAGE STATISTIQUES
        ====================================================== --}}
        <section class="statistiques-page">


            {{-- INTRODUCTION --}}
            <div class="stats-intro">

                <div class="stats-intro-content">

                    <span class="section-badge">
                        📊 MES PERFORMANCES
                    </span>

                    <h2>
                        Suis ton évolution scolaire
                    </h2>

                    <p>
                        Consulte tes résultats, identifie tes points forts
                        et découvre les domaines dans lesquels tu peux
                        encore progresser.
                    </p>

                </div>

                <div class="stats-intro-icon">
                    📈
                </div>

            </div>


            {{-- =================================================
                 CARTES PRINCIPALES
            ================================================== --}}
            <div class="main-stats-grid">

                <div class="main-stat-card">

                    <div class="main-stat-top">

                        <div class="main-stat-icon blue">
                            🎯
                        </div>

                        <span class="stat-evolution positive">
                            +8%
                        </span>

                    </div>

                    <span class="main-stat-label">
                        Moyenne générale
                    </span>

                    <strong class="main-stat-value">
                        15,8<span>/20</span>
                    </strong>

                    <p>
                        Par rapport à la période précédente
                    </p>

                </div>


                <div class="main-stat-card">

                    <div class="main-stat-top">

                        <div class="main-stat-icon green">
                            ✅
                        </div>

                        <span class="stat-evolution positive">
                            +2
                        </span>

                    </div>

                    <span class="main-stat-label">
                        Examens réussis
                    </span>

                    <strong class="main-stat-value">
                        8
                    </strong>

                    <p>
                        Sur 10 examens réalisés
                    </p>

                </div>


                <div class="main-stat-card">

                    <div class="main-stat-top">

                        <div class="main-stat-icon orange">
                            📚
                        </div>

                        <span class="stat-evolution positive">
                            +12%
                        </span>

                    </div>

                    <span class="main-stat-label">
                        Cours terminés
                    </span>

                    <strong class="main-stat-value">
                        12
                    </strong>

                    <p>
                        Sur 18 cours disponibles
                    </p>

                </div>


                <div class="main-stat-card">

                    <div class="main-stat-top">

                        <div class="main-stat-icon purple">
                            ⏱️
                        </div>

                        <span class="stat-evolution positive">
                            +5h
                        </span>

                    </div>

                    <span class="main-stat-label">
                        Temps d'étude
                    </span>

                    <strong class="main-stat-value">
                        24h
                    </strong>

                    <p>
                        Cette semaine
                    </p>

                </div>

            </div>


            {{-- =================================================
                 GRAPHIQUE + OBJECTIFS
            ================================================== --}}
            <div class="stats-two-columns">


                {{-- ÉVOLUTION --}}
                <div class="stats-panel evolution-panel">

                    <div class="panel-header">

                        <div>
                            <h2>
                                Évolution de mes résultats
                            </h2>

                            <p>
                                Progression de ta moyenne au fil des évaluations.
                            </p>
                        </div>

                        <span class="period-badge">
                            Cette période
                        </span>

                    </div>

                    <div class="chart-area">

                        <div class="chart-y-axis">

                            <span>20</span>
                            <span>15</span>
                            <span>10</span>
                            <span>5</span>
                            <span>0</span>

                        </div>

                        <div class="chart-content">

                            <div class="chart-lines">

                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>

                            </div>

                            <div class="chart-bars">

                                <div class="chart-column">
                                    <div class="chart-value">12</div>
                                    <div class="chart-bar bar-1"></div>
                                    <span>Juin</span>
                                </div>

                                <div class="chart-column">
                                    <div class="chart-value">13</div>
                                    <div class="chart-bar bar-2"></div>
                                    <span>Juil.</span>
                                </div>

                                <div class="chart-column">
                                    <div class="chart-value">14</div>
                                    <div class="chart-bar bar-3"></div>
                                    <span>Août</span>
                                </div>

                                <div class="chart-column">
                                    <div class="chart-value">15,8</div>
                                    <div class="chart-bar bar-4"></div>
                                    <span>Sept.</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- OBJECTIFS --}}
                <div class="stats-panel objectives-panel">

                    <div class="panel-header">

                        <div>
                            <h2>
                                Mes objectifs
                            </h2>

                            <p>
                                Ton avancement actuel.
                            </p>
                        </div>

                    </div>


                    <div class="objective">

                        <div class="objective-info">

                            <span>
                                Moyenne visée
                            </span>

                            <strong>
                                15,8 / 16
                            </strong>

                        </div>

                        <div class="progress-track">
                            <div
                                class="progress-fill blue-progress"
                                style="width: 98%;">
                            </div>
                        </div>

                        <small>
                            98% de l'objectif atteint
                        </small>

                    </div>


                    <div class="objective">

                        <div class="objective-info">

                            <span>
                                Cours terminés
                            </span>

                            <strong>
                                12 / 18
                            </strong>

                        </div>

                        <div class="progress-track">
                            <div
                                class="progress-fill green-progress"
                                style="width: 67%;">
                            </div>
                        </div>

                        <small>
                            67% de l'objectif atteint
                        </small>

                    </div>


                    <div class="objective">

                        <div class="objective-info">

                            <span>
                                Temps d'étude
                            </span>

                            <strong>
                                24h / 30h
                            </strong>

                        </div>

                        <div class="progress-track">
                            <div
                                class="progress-fill orange-progress"
                                style="width: 80%;">
                            </div>
                        </div>

                        <small>
                            80% de l'objectif atteint
                        </small>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 POINTS FORTS / POINTS À AMÉLIORER
            ================================================== --}}
            <div class="performance-grid">


                {{-- POINTS FORTS --}}
                <div class="performance-panel">

                    <div class="performance-header">

                        <div class="performance-icon success-icon">
                            ⭐
                        </div>

                        <div>
                            <h2>
                                Mes points forts
                            </h2>

                            <p>
                                Les domaines où tu performes le mieux.
                            </p>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Base de données
                            </span>

                            <strong>
                                18/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill strength-fill"
                                style="width: 90%;">
                            </div>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Programmation
                            </span>

                            <strong>
                                17/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill strength-fill"
                                style="width: 85%;">
                            </div>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Intelligence artificielle
                            </span>

                            <strong>
                                16/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill strength-fill"
                                style="width: 80%;">
                            </div>
                        </div>

                    </div>

                </div>


                {{-- À AMÉLIORER --}}
                <div class="performance-panel">

                    <div class="performance-header">

                        <div class="performance-icon warning-icon">
                            💡
                        </div>

                        <div>
                            <h2>
                                À améliorer
                            </h2>

                            <p>
                                Les domaines qui méritent plus d'attention.
                            </p>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Génie logiciel
                            </span>

                            <strong>
                                13/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill warning-fill"
                                style="width: 65%;">
                            </div>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Réseaux
                            </span>

                            <strong>
                                12/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill warning-fill"
                                style="width: 60%;">
                            </div>
                        </div>

                    </div>


                    <div class="strength-item">

                        <div class="strength-title">

                            <span>
                                Algorithmique
                            </span>

                            <strong>
                                11/20
                            </strong>

                        </div>

                        <div class="mini-progress">
                            <div
                                class="mini-progress-fill warning-fill"
                                style="width: 55%;">
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 DERNIERS RÉSULTATS
            ================================================== --}}
            <div class="stats-panel recent-results">

                <div class="panel-header">

                    <div>
                        <h2>
                            Derniers résultats
                        </h2>

                        <p>
                            Aperçu de tes dernières évaluations.
                        </p>
                    </div>

                    <a href="/etudiant/examens" class="view-all">
                        Voir tous les examens →
                    </a>

                </div>


                <div class="results-list">


                    <div class="result-row">

                        <div class="result-left">

                            <div class="result-icon database">
                                🗄️
                            </div>

                            <div>
                                <strong>
                                    Modélisation des données
                                </strong>

                                <span>
                                    Base de données • 02 Sept. 2026
                                </span>
                            </div>

                        </div>

                        <div class="result-right">

                            <strong class="result-score">
                                17/20
                            </strong>

                            <span class="result-badge good">
                                Très bien
                            </span>

                        </div>

                    </div>


                    <div class="result-row">

                        <div class="result-left">

                            <div class="result-icon programming">
                                💻
                            </div>

                            <div>
                                <strong>
                                    Programmation Java
                                </strong>

                                <span>
                                    Programmation • 29 Août 2026
                                </span>
                            </div>

                        </div>

                        <div class="result-right">

                            <strong class="result-score">
                                16/20
                            </strong>

                            <span class="result-badge good">
                                Très bien
                            </span>

                        </div>

                    </div>


                    <div class="result-row">

                        <div class="result-left">

                            <div class="result-icon uml">
                                📐
                            </div>

                            <div>
                                <strong>
                                    Méthodes UML
                                </strong>

                                <span>
                                    Génie logiciel • 21 Août 2026
                                </span>
                            </div>

                        </div>

                        <div class="result-right">

                            <strong class="result-score average">
                                13/20
                            </strong>

                            <span class="result-badge average-badge">
                                Bien
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 CONSEIL EDUNOVA
            ================================================== --}}
            <div class="ai-stat-card">

                <div class="ai-stat-icon">
                    🤖
                </div>

                <div class="ai-stat-content">

                    <span>
                        ANALYSE EDUNOVA IA
                    </span>

                    <h3>
                        Ta progression est encourageante !
                    </h3>

                    <p>
                        Tes résultats montrent une progression régulière.
                        Continue à travailler tes matières les plus faibles
                        pour atteindre ton objectif de moyenne.
                    </p>

                </div>

                <a href="/etudiant/ia" class="ai-stat-button">
                    Voir mes recommandations
                    <span>→</span>
                </a>

            </div>


        </section>

    </main>

</div>

</body>
</html>