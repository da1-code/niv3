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
                <a href="/prof/deconnexion">
                    🚪 Déconnexion
                </a>
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
                        Suivez les performances et l'évolution
                        pédagogique de vos étudiants.
                    </p>

                </div>

            </div>



            <!-- =================================================
                 STATISTIQUES
                 ================================================= -->

            <div class="student-stats">


                <div class="student-stat-card">

                    <div class="stat-icon">
                        👨‍🎓
                    </div>

                    <div>

                        <span>
                            Total étudiants
                        </span>

                        <strong>
                            120
                        </strong>

                    </div>

                </div>


                <div class="student-stat-card">

                    <div class="stat-icon">
                        📈
                    </div>

                    <div>

                        <span>
                            Progression moyenne
                        </span>

                        <strong>
                            85%
                        </strong>

                    </div>

                </div>


                <div class="student-stat-card">

                    <div class="stat-icon">
                        ⭐
                    </div>

                    <div>

                        <span>
                            Moyenne générale
                        </span>

                        <strong>
                            15.8/20
                        </strong>

                    </div>

                </div>


                <div class="student-stat-card">

                    <div class="stat-icon">
                        ⚠️
                    </div>

                    <div>

                        <span>
                            À accompagner
                        </span>

                        <strong>
                            12
                        </strong>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 RECHERCHE ET FILTRES
                 ================================================= -->

            <div class="student-filters">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un étudiant..."
                >


                <select>

                    <option value="">
                        Tous les cours
                    </option>

                    <option>
                        Intelligence Artificielle
                    </option>

                    <option>
                        Développement Laravel
                    </option>

                    <option>
                        Base de données
                    </option>

                    <option>
                        Sécurité informatique
                    </option>

                </select>


                <select>

                    <option value="">
                        Tous les niveaux
                    </option>

                    <option>
                        Excellent
                    </option>

                    <option>
                        Bon niveau
                    </option>

                    <option>
                        À améliorer
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
                            📋 Suivi des étudiants
                        </h3>

                        <p>
                            Consultez les performances et les rapports
                            pédagogiques de vos étudiants.
                        </p>

                    </div>

                </div>



                <!-- ÉTUDIANT 1 -->

                <div class="student-card">


                    <div class="student-avatar">
                        DA
                    </div>


                    <div class="student-main">

                        <h3>
                            Daniella A.
                        </h3>

                        <p class="student-email">
                            daniella@edunova.com
                        </p>


                        <div class="student-course">

                            📚 Intelligence Artificielle

                        </div>

                    </div>


                    <div class="student-performance">

                        <span>
                            Progression
                        </span>

                        <div class="mini-progress">

                            <div
                                class="mini-progress-value"
                                style="width: 92%;"
                            ></div>

                        </div>

                        <strong>
                            92%
                        </strong>

                    </div>


                    <div class="student-average">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            17.5/20
                        </strong>

                    </div>


                    <div class="student-level excellent">
                        Excellent
                    </div>


                    <div class="student-actions">

                        <a
                            href="#"
                            class="btn-report"
                        >
                            📊 Voir le rapport
                        </a>

                    </div>

                </div>



                <!-- ÉTUDIANT 2 -->

                <div class="student-card">


                    <div class="student-avatar">
                        MK
                    </div>


                    <div class="student-main">

                        <h3>
                            Marc K.
                        </h3>

                        <p class="student-email">
                            marc@edunova.com
                        </p>


                        <div class="student-course">

                            📚 Développement Laravel

                        </div>

                    </div>


                    <div class="student-performance">

                        <span>
                            Progression
                        </span>

                        <div class="mini-progress">

                            <div
                                class="mini-progress-value"
                                style="width: 78%;"
                            ></div>

                        </div>

                        <strong>
                            78%
                        </strong>

                    </div>


                    <div class="student-average">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            14.2/20
                        </strong>

                    </div>


                    <div class="student-level good">
                        Bon niveau
                    </div>


                    <div class="student-actions">

                        <a
                            href="#"
                            class="btn-report"
                        >
                            📊 Voir le rapport
                        </a>

                    </div>

                </div>



                <!-- ÉTUDIANT 3 -->

                <div class="student-card">


                    <div class="student-avatar">
                        JE
                    </div>


                    <div class="student-main">

                        <h3>
                            Jean E.
                        </h3>

                        <p class="student-email">
                            jean@edunova.com
                        </p>


                        <div class="student-course">

                            📚 Base de données

                        </div>

                    </div>


                    <div class="student-performance">

                        <span>
                            Progression
                        </span>

                        <div class="mini-progress">

                            <div
                                class="mini-progress-value"
                                style="width: 61%;"
                            ></div>

                        </div>

                        <strong>
                            61%
                        </strong>

                    </div>


                    <div class="student-average">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            10.8/20
                        </strong>

                    </div>


                    <div class="student-level warning">
                        À améliorer
                    </div>


                    <div class="student-actions">

                        <a
                            href="#"
                            class="btn-report"
                        >
                            📊 Voir le rapport
                        </a>

                    </div>

                </div>



                <!-- ÉTUDIANT 4 -->

                <div class="student-card">


                    <div class="student-avatar">
                        SM
                    </div>


                    <div class="student-main">

                        <h3>
                            Sarah M.
                        </h3>

                        <p class="student-email">
                            sarah@edunova.com
                        </p>


                        <div class="student-course">

                            📚 Sécurité informatique

                        </div>

                    </div>


                    <div class="student-performance">

                        <span>
                            Progression
                        </span>

                        <div class="mini-progress">

                            <div
                                class="mini-progress-value"
                                style="width: 87%;"
                            ></div>

                        </div>

                        <strong>
                            87%
                        </strong>

                    </div>


                    <div class="student-average">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            16.1/20
                        </strong>

                    </div>


                    <div class="student-level excellent">
                        Excellent
                    </div>


                    <div class="student-actions">

                        <a
                            href="#"
                            class="btn-report"
                        >
                            📊 Voir le rapport
                        </a>

                    </div>

                </div>



            </div>



            <!-- =================================================
                 RAPPORT PÉDAGOGIQUE
                 ================================================= -->

            <div class="reports-section">


                <div class="section-title">

                    <div>

                        <h3>
                            📊 Exemple de rapport pédagogique
                        </h3>

                        <p>
                            Analyse détaillée des performances d'un étudiant.
                        </p>

                    </div>

                </div>


                <div class="report-card">


                    <div class="report-header">

                        <div class="report-student">

                            <div class="report-avatar">
                                DA
                            </div>

                            <div>

                                <h3>
                                    Daniella A.
                                </h3>

                                <p>
                                    Intelligence Artificielle
                                </p>

                            </div>

                        </div>


                        <div class="report-score">

                            <span>
                                Score global
                            </span>

                            <strong>
                                92%
                            </strong>

                        </div>

                    </div>



                    <div class="report-grid">


                        <!-- POINTS FORTS -->

                        <div class="report-box strengths">

                            <h4>
                                💪 Points forts
                            </h4>

                            <ul>

                                <li>
                                    Très bonne compréhension des concepts d'IA
                                </li>

                                <li>
                                    Excellente capacité d'analyse
                                </li>

                                <li>
                                    Bonne résolution des exercices
                                </li>

                            </ul>

                        </div>



                        <!-- POINTS À AMÉLIORER -->

                        <div class="report-box weaknesses">

                            <h4>
                                ⚠️ Points à améliorer
                            </h4>

                            <ul>

                                <li>
                                    Approfondir les algorithmes avancés
                                </li>

                                <li>
                                    Améliorer la régularité des révisions
                                </li>

                                <li>
                                    Renforcer la pratique sur les projets
                                </li>

                            </ul>

                        </div>



                        <!-- RECOMMANDATIONS -->

                        <div class="report-box recommendations">

                            <h4>
                                💡 Recommandations
                            </h4>

                            <ul>

                                <li>
                                    Proposer des exercices supplémentaires
                                </li>

                                <li>
                                    Encourager les projets pratiques
                                </li>

                                <li>
                                    Suivre la progression chaque semaine
                                </li>

                            </ul>

                        </div>


                    </div>


                </div>

            </div>


        </div>


    </main>


</body>

</html>