<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Gestion des examens</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/examens.css">

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


            <li class="active">
                <a href="/prof/examens">
                    📝 Examens
                </a>
            </li>


            <li>
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


        <div class="exam-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>
                        📝 Gestion des examens
                    </h2>

                    <p>
                        Créez, gérez et suivez les examens de vos étudiants.
                    </p>

                </div>


                <a href="#" class="btn-add">
                    + Créer un examen
                </a>

            </div>



            <!-- =================================================
                 STATISTIQUES RAPIDES
                 ================================================= -->

            <div class="exam-stats">


                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        📝
                    </div>

                    <div>

                        <span>
                            Examens
                        </span>

                        <strong>
                            6
                        </strong>

                    </div>

                </div>


                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        🟢
                    </div>

                    <div>

                        <span>
                            Publiés
                        </span>

                        <strong>
                            4
                        </strong>

                    </div>

                </div>


                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        🟠
                    </div>

                    <div>

                        <span>
                            Brouillons
                        </span>

                        <strong>
                            1
                        </strong>

                    </div>

                </div>


                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        📊
                    </div>

                    <div>

                        <span>
                            Participations
                        </span>

                        <strong>
                            108
                        </strong>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 RECHERCHE / FILTRES
                 ================================================= -->

            <div class="filter-section">


                <input
                    type="text"
                    placeholder="🔍 Rechercher un examen..."
                >


                <select>

                    <option value="">
                        Tous les cours
                    </option>

                    <option value="ia">
                        Intelligence Artificielle
                    </option>

                    <option value="laravel">
                        Développement Laravel
                    </option>

                    <option value="bd">
                        Base de données
                    </option>

                    <option value="securite">
                        Sécurité informatique
                    </option>

                </select>


                <select>

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="publie">
                        Publié
                    </option>

                    <option value="brouillon">
                        Brouillon
                    </option>

                    <option value="termine">
                        Terminé
                    </option>

                </select>

            </div>



            <!-- =================================================
                 LISTE DES EXAMENS
                 ================================================= -->

            <div class="exam-section">


                <div class="section-header">

                    <div>

                        <h3>
                            📋 Mes examens
                        </h3>

                        <p>
                            Retrouvez ici tous les examens que vous avez créés.
                        </p>

                    </div>

                </div>



                <!-- EXAMEN 1 -->

                <div class="exam-card">


                    <div class="exam-icon">
                        🤖
                    </div>


                    <div class="exam-info">

                        <h3>
                            Examen Intelligence Artificielle
                        </h3>

                        <p>
                            Évaluation sur les concepts fondamentaux
                            de l'intelligence artificielle.
                        </p>


                        <div class="exam-meta">

                            <span>
                                📚 Intelligence Artificielle
                            </span>

                            <span>
                                📅 15 Septembre 2026
                            </span>

                            <span>
                                ⏱️ 1h30
                            </span>

                            <span>
                                ❓ 20 questions
                            </span>

                        </div>

                    </div>


                    <div class="exam-status published">
                        Publié
                    </div>


                    <div class="exam-actions">

                        <a href="#" class="btn-view">
                            👁 Voir
                        </a>

                        <a href="#" class="btn-edit">
                            ✏️ Modifier
                        </a>

                        <button
                            type="button"
                            class="btn-delete"
                        >
                            🗑️ Supprimer
                        </button>

                    </div>

                </div>



                <!-- EXAMEN 2 -->

                <div class="exam-card">


                    <div class="exam-icon">
                        💻
                    </div>


                    <div class="exam-info">

                        <h3>
                            Évaluation Laravel
                        </h3>

                        <p>
                            Évaluation des connaissances sur le framework
                            Laravel et le développement web.
                        </p>


                        <div class="exam-meta">

                            <span>
                                📚 Développement Laravel
                            </span>

                            <span>
                                📅 20 Septembre 2026
                            </span>

                            <span>
                                ⏱️ 2h
                            </span>

                            <span>
                                ❓ 25 questions
                            </span>

                        </div>

                    </div>


                    <div class="exam-status published">
                        Publié
                    </div>


                    <div class="exam-actions">

                        <a href="#" class="btn-view">
                            👁 Voir
                        </a>

                        <a href="#" class="btn-edit">
                            ✏️ Modifier
                        </a>

                        <button
                            type="button"
                            class="btn-delete"
                        >
                            🗑️ Supprimer
                        </button>

                    </div>

                </div>



                <!-- EXAMEN 3 -->

                <div class="exam-card">


                    <div class="exam-icon">
                        🗄️
                    </div>


                    <div class="exam-info">

                        <h3>
                            Examen Base de données
                        </h3>

                        <p>
                            Évaluation sur SQL, la modélisation et
                            la gestion des bases de données.
                        </p>


                        <div class="exam-meta">

                            <span>
                                📚 Base de données
                            </span>

                            <span>
                                📅 25 Septembre 2026
                            </span>

                            <span>
                                ⏱️ 1h30
                            </span>

                            <span>
                                ❓ 20 questions
                            </span>

                        </div>

                    </div>


                    <div class="exam-status finished">
                        Terminé
                    </div>


                    <div class="exam-actions">

                        <a href="#" class="btn-view">
                            👁 Résultats
                        </a>

                        <a href="#" class="btn-edit">
                            ✏️ Modifier
                        </a>

                        <button
                            type="button"
                            class="btn-delete"
                        >
                            🗑️ Supprimer
                        </button>

                    </div>

                </div>



                <!-- EXAMEN 4 -->

                <div class="exam-card">


                    <div class="exam-icon">
                        🔐
                    </div>


                    <div class="exam-info">

                        <h3>
                            Sécurité informatique
                        </h3>

                        <p>
                            Contrôle des connaissances sur la sécurité,
                            le contrôle d'accès et la protection des données.
                        </p>


                        <div class="exam-meta">

                            <span>
                                📚 Sécurité informatique
                            </span>

                            <span>
                                📅 À définir
                            </span>

                            <span>
                                ⏱️ 1h
                            </span>

                            <span>
                                ❓ 15 questions
                            </span>

                        </div>

                    </div>


                    <div class="exam-status draft">
                        Brouillon
                    </div>


                    <div class="exam-actions">

                        <a href="#" class="btn-view">
                            👁 Voir
                        </a>

                        <a href="#" class="btn-edit">
                            ✏️ Modifier
                        </a>

                        <button
                            type="button"
                            class="btn-delete"
                        >
                            🗑️ Supprimer
                        </button>

                    </div>

                </div>


            </div>

        </div>


    </main>


</body>

</html>