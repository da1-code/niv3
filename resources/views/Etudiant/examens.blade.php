<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Examens - EDUNOVA IA</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
    <link rel="stylesheet" href="/etudiant/examens.css">
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

                <a href="/etudiant/examens" class="active">
                    <span>📝</span>
                    Examens
                </a>

                <a href="/etudiant/ia">
                    <span>🤖</span>
                    Mon IA
                </a>

                <a href="/etudiant/statistiques">
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
                    <h1>Mes examens</h1>
                    <p>Évalue tes connaissances et suis tes progrès.</p>
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


            {{-- =================================================
                 CONTENU EXAMENS
            ================================================== --}}
            <section class="examens-page">


                {{-- INTRODUCTION --}}
                <div class="examens-intro">

                    <div>
                        <span class="section-badge">📝 ÉVALUATIONS</span>

                        <h2>
                            Prépare-toi pour tes examens
                        </h2>

                        <p>
                            Consulte tes examens disponibles, retrouve ceux que
                            tu as déjà réalisés et analyse tes résultats.
                        </p>
                    </div>

                    <div class="examens-intro-icon">
                        📝
                    </div>

                </div>


                {{-- =================================================
                     STATISTIQUES RAPIDES
                ================================================== --}}
                <div class="examens-stats">

                    <div class="exam-stat-card">

                        <div class="exam-stat-icon available">
                            📝
                        </div>

                        <div>
                            <span>Examens disponibles</span>
                            <strong>4</strong>
                        </div>

                    </div>


                    <div class="exam-stat-card">

                        <div class="exam-stat-icon completed">
                            ✅
                        </div>

                        <div>
                            <span>Examens terminés</span>
                            <strong>8</strong>
                        </div>

                    </div>


                    <div class="exam-stat-card">

                        <div class="exam-stat-icon score">
                            🎯
                        </div>

                        <div>
                            <span>Moyenne générale</span>
                            <strong>15,8/20</strong>
                        </div>

                    </div>


                    <div class="exam-stat-card">

                        <div class="exam-stat-icon progress">
                            📈
                        </div>

                        <div>
                            <span>Progression</span>
                            <strong>78%</strong>
                        </div>

                    </div>

                </div>


                {{-- =================================================
                     EXAMENS DISPONIBLES
                ================================================== --}}
                <div class="section-header">

                    <div>
                        <h2>Examens disponibles</h2>

                        <p>
                            Les évaluations que tu peux actuellement passer.
                        </p>
                    </div>

                    <span class="exam-count">
                        4 examens
                    </span>

                </div>


                <div class="exam-grid">


                    {{-- EXAMEN 1 --}}
                    <article class="exam-card">

                        <div class="exam-card-top">

                            <span class="subject-badge">
                                Base de données
                            </span>

                            <span class="status available-status">
                                Disponible
                            </span>

                        </div>

                        <div class="exam-icon">
                            🗄️
                        </div>

                        <h3>
                            Sécurité des bases de données
                        </h3>

                        <p>
                            Évalue tes connaissances sur les mécanismes
                            de sécurité et de protection des bases de données.
                        </p>

                        <div class="exam-details">

                            <div>
                                <span>⏱️</span>
                                <strong>45 min</strong>
                            </div>

                            <div>
                                <span>❓</span>
                                <strong>30 questions</strong>
                            </div>

                            <div>
                                <span>🎯</span>
                                <strong>20 points</strong>
                            </div>

                        </div>

                        <a href="#" class="btn-start">
                            Commencer l'examen
                            <span>→</span>
                        </a>

                    </article>


                    {{-- EXAMEN 2 --}}
                    <article class="exam-card">

                        <div class="exam-card-top">

                            <span class="subject-badge">
                                Intelligence artificielle
                            </span>

                            <span class="status available-status">
                                Disponible
                            </span>

                        </div>

                        <div class="exam-icon">
                            🤖
                        </div>

                        <h3>
                            Introduction à l'IA
                        </h3>

                        <p>
                            Teste tes connaissances sur les concepts
                            fondamentaux de l'intelligence artificielle.
                        </p>

                        <div class="exam-details">

                            <div>
                                <span>⏱️</span>
                                <strong>30 min</strong>
                            </div>

                            <div>
                                <span>❓</span>
                                <strong>20 questions</strong>
                            </div>

                            <div>
                                <span>🎯</span>
                                <strong>20 points</strong>
                            </div>

                        </div>

                        <a href="#" class="btn-start">
                            Commencer l'examen
                            <span>→</span>
                        </a>

                    </article>


                    {{-- EXAMEN 3 --}}
                    <article class="exam-card">

                        <div class="exam-card-top">

                            <span class="subject-badge">
                                Programmation
                            </span>

                            <span class="status available-status">
                                Disponible
                            </span>

                        </div>

                        <div class="exam-icon">
                            💻
                        </div>

                        <h3>
                            Programmation PHP
                        </h3>

                        <p>
                            Vérifie ta maîtrise des notions essentielles
                            de programmation avec PHP.
                        </p>

                        <div class="exam-details">

                            <div>
                                <span>⏱️</span>
                                <strong>40 min</strong>
                            </div>

                            <div>
                                <span>❓</span>
                                <strong>25 questions</strong>
                            </div>

                            <div>
                                <span>🎯</span>
                                <strong>20 points</strong>
                            </div>

                        </div>

                        <a href="#" class="btn-start">
                            Commencer l'examen
                            <span>→</span>
                        </a>

                    </article>


                    {{-- EXAMEN 4 --}}
                    <article class="exam-card">

                        <div class="exam-card-top">

                            <span class="subject-badge">
                                Génie logiciel
                            </span>

                            <span class="status available-status">
                                Disponible
                            </span>

                        </div>

                        <div class="exam-icon">
                            📐
                        </div>

                        <h3>
                            UML et conception logicielle
                        </h3>

                        <p>
                            Évalue tes connaissances sur UML et les différentes
                            étapes de conception d'un logiciel.
                        </p>

                        <div class="exam-details">

                            <div>
                                <span>⏱️</span>
                                <strong>35 min</strong>
                            </div>

                            <div>
                                <span>❓</span>
                                <strong>25 questions</strong>
                            </div>

                            <div>
                                <span>🎯</span>
                                <strong>20 points</strong>
                            </div>

                        </div>

                        <a href="#" class="btn-start">
                            Commencer l'examen
                            <span>→</span>
                        </a>

                    </article>

                </div>


                {{-- =================================================
                     EXAMENS TERMINÉS
                ================================================== --}}
                <div class="section-header completed-header">

                    <div>
                        <h2>Mes examens terminés</h2>

                        <p>
                            Consulte les résultats de tes précédentes évaluations.
                        </p>
                    </div>

                    <span class="exam-count">
                        8 examens
                    </span>

                </div>


                <div class="results-table-container">

                    <table class="results-table">

                        <thead>
                            <tr>
                                <th>Examen</th>
                                <th>Matière</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    <div class="exam-name">
                                        <div class="table-icon">
                                            🗄️
                                        </div>

                                        <strong>
                                            Modélisation des données
                                        </strong>
                                    </div>
                                </td>

                                <td>Base de données</td>

                                <td>02 Sept. 2026</td>

                                <td>
                                    <strong class="good-score">
                                        17/20
                                    </strong>
                                </td>

                                <td>
                                    <span class="result-success">
                                        Réussi
                                    </span>
                                </td>

                                <td>
                                    <a href="#" class="btn-result">
                                        Voir le résultat
                                    </a>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="exam-name">

                                        <div class="table-icon">
                                            💻
                                        </div>

                                        <strong>
                                            Programmation Java
                                        </strong>

                                    </div>
                                </td>

                                <td>Programmation</td>

                                <td>29 Août 2026</td>

                                <td>
                                    <strong class="good-score">
                                        16/20
                                    </strong>
                                </td>

                                <td>
                                    <span class="result-success">
                                        Réussi
                                    </span>
                                </td>

                                <td>
                                    <a href="#" class="btn-result">
                                        Voir le résultat
                                    </a>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="exam-name">

                                        <div class="table-icon">
                                            📐
                                        </div>

                                        <strong>
                                            Méthodes UML
                                        </strong>

                                    </div>
                                </td>

                                <td>Génie logiciel</td>

                                <td>21 Août 2026</td>

                                <td>
                                    <strong class="average-score">
                                        13/20
                                    </strong>
                                </td>

                                <td>
                                    <span class="result-success">
                                        Réussi
                                    </span>
                                </td>

                                <td>
                                    <a href="#" class="btn-result">
                                        Voir le résultat
                                    </a>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="exam-name">

                                        <div class="table-icon">
                                            🤖
                                        </div>

                                        <strong>
                                            Fondamentaux de l'IA
                                        </strong>

                                    </div>
                                </td>

                                <td>Intelligence artificielle</td>

                                <td>15 Août 2026</td>

                                <td>
                                    <strong class="good-score">
                                        17/20
                                    </strong>
                                </td>

                                <td>
                                    <span class="result-success">
                                        Réussi
                                    </span>
                                </td>

                                <td>
                                    <a href="#" class="btn-result">
                                        Voir le résultat
                                    </a>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                {{-- =================================================
                     BLOC IA
                ================================================== --}}
                <div class="ai-recommendation">

                    <div class="ai-icon">
                        🤖
                    </div>

                    <div class="ai-content">

                        <span class="ai-label">
                            RECOMMANDATION EDUNOVA IA
                        </span>

                        <h3>
                            Prépare ton prochain examen avec ton IA
                        </h3>

                        <p>
                            D'après tes résultats, tu pourrais renforcer tes
                            connaissances en <strong>Génie logiciel</strong>.
                            Ton IA peut te proposer des explications,
                            des exercices et des questions adaptées à ton
                            profil d'apprentissage.
                        </p>

                    </div>

                    <a href="/etudiant/ia" class="btn-ai">
                        Discuter avec mon IA
                        <span>→</span>
                    </a>

                </div>


            </section>

        </main>

    </div>

</body>

</html>