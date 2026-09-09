<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA - Mes cours</title>

   <link rel="stylesheet" href="/etudiant/dashboard.css">
   <link rel="stylesheet" href="/etudiant/cours.css">
</head>

<body>

<div class="student-container">

    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>Plateforme éducative</span>
            </div>

        </div>


        <!-- Profil rapide -->

        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div>
                <strong>Daniella</strong>
                <small>Étudiante</small>
            </div>

        </div>


        <!-- Menu -->

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

            <a href="/etudiant/cours" class="active">
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

            <a href="/etudiant/statistiques">
                <span>📊</span>
                Mes statistiques
            </a>

            <a href="/etudiant/parametres">
                <span>⚙️</span>
                Paramètres
            </a>

        </nav>


        <!-- Déconnexion -->

        <div class="sidebar-bottom">

            <a href="/logout" class="logout">
                <span>🚪</span>
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

                <h1>Mes cours 📚</h1>

                <p>
                    Consulte tes cours et poursuis ton apprentissage.
                </p>

            </div>


            <div class="top-actions">

                <a href="#" class="notification">
                    🔔
                    <span></span>
                </a>


                <div class="student-user">

                    <div class="user-avatar">
                        D
                    </div>

                    <div>
                        <strong>Daniella</strong>
                        <small>Étudiante</small>
                    </div>

                </div>

            </div>

        </header>


        <!-- =================================================
             STATISTIQUES DES COURS
             ================================================= -->

        <section class="course-overview">

            <div class="overview-card">

                <div class="overview-icon blue">
                    📚
                </div>

                <div>
                    <span>Total des cours</span>
                    <strong>12</strong>
                </div>

            </div>


            <div class="overview-card">

                <div class="overview-icon green">
                    ✅
                </div>

                <div>
                    <span>Cours terminés</span>
                    <strong>5</strong>
                </div>

            </div>


            <div class="overview-card">

                <div class="overview-icon purple">
                    📖
                </div>

                <div>
                    <span>En cours</span>
                    <strong>4</strong>
                </div>

            </div>


            <div class="overview-card">

                <div class="overview-icon orange">
                    ⏳
                </div>

                <div>
                    <span>À commencer</span>
                    <strong>3</strong>
                </div>

            </div>

        </section>


        <!-- =================================================
             RECHERCHE ET FILTRES
             ================================================= -->

        <section class="courses-toolbar">

            <div class="search-box">

                <span>🔎</span>

                <input
                    type="text"
                    placeholder="Rechercher un cours..."
                >

            </div>


            <div class="course-filters">

                <button class="filter-btn active">
                    Tous
                </button>

                <button class="filter-btn">
                    En cours
                </button>

                <button class="filter-btn">
                    Terminés
                </button>

                <button class="filter-btn">
                    À commencer
                </button>

            </div>

        </section>


        <!-- =================================================
             TITRE
             ================================================= -->

        <div class="section-heading">

            <div>

                <h2>Mes cours</h2>

                <p>
                    Retrouve ici tous les cours disponibles dans ton espace.
                </p>

            </div>

            <span class="course-count">
                12 cours
            </span>

        </div>


        <!-- =================================================
             LISTE DES COURS
             ================================================= -->

        <section class="courses-grid">


            <!-- =================================================
                 COURS 1
                 ================================================= -->

            <article class="course-card">

                <div class="course-header blue-bg">

                    <div class="course-icon">
                        💻
                    </div>

                    <span class="course-status progress">
                        En cours
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Informatique
                    </span>

                    <h3>
                        Développement Web
                    </h3>

                    <p>
                        Apprends les bases du développement web,
                        HTML, CSS, JavaScript et les technologies modernes.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 8 chapitres
                        </span>

                        <span>
                            ⏱️ 12h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>75%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 75%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Continuer le cours →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 COURS 2
                 ================================================= -->

            <article class="course-card">

                <div class="course-header purple-bg">

                    <div class="course-icon">
                        🗄️
                    </div>

                    <span class="course-status progress">
                        En cours
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Informatique
                    </span>

                    <h3>
                        Base de données
                    </h3>

                    <p>
                        Découvre la conception, la gestion et la sécurité
                        des bases de données relationnelles.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 10 chapitres
                        </span>

                        <span>
                            ⏱️ 15h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>60%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 60%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Continuer le cours →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 COURS 3
                 ================================================= -->

            <article class="course-card">

                <div class="course-header green-bg">

                    <div class="course-icon">
                        🤖
                    </div>

                    <span class="course-status progress">
                        En cours
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Intelligence artificielle
                    </span>

                    <h3>
                        Intelligence Artificielle
                    </h3>

                    <p>
                        Découvre les concepts fondamentaux de l'intelligence
                        artificielle et de l'apprentissage automatique.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 7 chapitres
                        </span>

                        <span>
                            ⏱️ 10h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>45%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 45%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Continuer le cours →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 COURS 4
                 ================================================= -->

            <article class="course-card">

                <div class="course-header orange-bg">

                    <div class="course-icon">
                        📱
                    </div>

                    <span class="course-status new">
                        Nouveau
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Développement
                    </span>

                    <h3>
                        Développement Mobile
                    </h3>

                    <p>
                        Apprends les principes de conception et de développement
                        des applications mobiles.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 9 chapitres
                        </span>

                        <span>
                            ⏱️ 14h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>0%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 0%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Commencer le cours →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 COURS 5
                 ================================================= -->

            <article class="course-card">

                <div class="course-header cyan-bg">

                    <div class="course-icon">
                        🔐
                    </div>

                    <span class="course-status completed">
                        Terminé
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Sécurité
                    </span>

                    <h3>
                        Sécurité des bases de données
                    </h3>

                    <p>
                        Comprends les mécanismes de protection,
                        d'accès et de sécurité des données.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 6 chapitres
                        </span>

                        <span>
                            ⏱️ 8h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>100%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 100%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Revoir le cours →
                    </a>

                </div>

            </article>


            <!-- =================================================
                 COURS 6
                 ================================================= -->

            <article class="course-card">

                <div class="course-header pink-bg">

                    <div class="course-icon">
                        📊
                    </div>

                    <span class="course-status completed">
                        Terminé
                    </span>

                </div>


                <div class="course-body">

                    <span class="course-category">
                        Informatique
                    </span>

                    <h3>
                        Analyse des données
                    </h3>

                    <p>
                        Découvre les méthodes utilisées pour analyser,
                        interpréter et présenter des données.
                    </p>


                    <div class="course-meta">

                        <span>
                            📑 5 chapitres
                        </span>

                        <span>
                            ⏱️ 7h
                        </span>

                    </div>


                    <div class="progress-info">

                        <div>

                            <span>Progression</span>

                            <strong>100%</strong>

                        </div>

                        <div class="progress-bar">

                            <span style="width: 100%;"></span>

                        </div>

                    </div>


                    <a href="#" class="course-btn">
                        Revoir le cours →
                    </a>

                </div>

            </article>


        </section>


        <!-- =================================================
             RECOMMANDATION IA
             ================================================= -->

        <section class="course-ai">

            <div class="ai-icon">
                🤖
            </div>

            <div class="ai-content">

                <span>
                    RECOMMANDATION EDUNOVA IA
                </span>

                <h2>
                    Continue ton apprentissage !
                </h2>

                <p>
                    D'après ta progression, nous te recommandons de
                    poursuivre le cours de <strong>Développement Web</strong>.
                    Tu es déjà à 75% du parcours.
                </p>

            </div>

            <a href="/etudiant/ia" class="ai-btn">
                Demander à mon IA →
            </a>

        </section>


    </main>

</div>

</body>
</html>