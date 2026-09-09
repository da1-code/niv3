<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Mes cours</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/cours.css">

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

            <li class="active">
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


        <div class="courses-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>📚 Mes cours</h2>

                    <p>
                        Gérez vos cours et vos supports pédagogiques
                        depuis votre espace enseignant.
                    </p>

                </div>


                <a href="#" class="btn-add">
                    + Ajouter un cours
                </a>

            </div>



            <!-- =================================================
                 RECHERCHE
                 ================================================= -->

            <div class="search-section">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un cours..."
                >


                <select>

                    <option value="">
                        Toutes les catégories
                    </option>

                    <option value="ia">
                        Intelligence Artificielle
                    </option>

                    <option value="web">
                        Développement Web
                    </option>

                    <option value="bd">
                        Base de données
                    </option>

                    <option value="securite">
                        Sécurité informatique
                    </option>

                </select>

            </div>



            <!-- =================================================
                 COURS
                 ================================================= -->

            <div class="course-grid">


                <!-- COURS 1 -->

                <div class="course-card">

                    <div class="course-icon">
                        🤖
                    </div>

                    <h3>
                        Intelligence Artificielle
                    </h3>

                    <p>
                        Introduction aux concepts fondamentaux
                        de l'intelligence artificielle.
                    </p>


                    <div class="course-info">

                        <span>
                            👨‍🎓 45 étudiants
                        </span>

                        <span>
                            📄 8 supports
                        </span>

                    </div>


                    <div class="actions">

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



                <!-- COURS 2 -->

                <div class="course-card">

                    <div class="course-icon">
                        💻
                    </div>

                    <h3>
                        Développement Laravel
                    </h3>

                    <p>
                        Création d'applications web modernes
                        avec le framework Laravel.
                    </p>


                    <div class="course-info">

                        <span>
                            👨‍🎓 38 étudiants
                        </span>

                        <span>
                            📄 6 supports
                        </span>

                    </div>


                    <div class="actions">

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



                <!-- COURS 3 -->

                <div class="course-card">

                    <div class="course-icon">
                        🗄️
                    </div>

                    <h3>
                        Base de données
                    </h3>

                    <p>
                        Modélisation, SQL et gestion
                        des bases de données.
                    </p>


                    <div class="course-info">

                        <span>
                            👨‍🎓 37 étudiants
                        </span>

                        <span>
                            📄 10 supports
                        </span>

                    </div>


                    <div class="actions">

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



                <!-- COURS 4 -->

                <div class="course-card">

                    <div class="course-icon">
                        🔐
                    </div>

                    <h3>
                        Sécurité informatique
                    </h3>

                    <p>
                        Principes de sécurité, contrôle d'accès
                        et protection des données.
                    </p>


                    <div class="course-info">

                        <span>
                            👨‍🎓 32 étudiants
                        </span>

                        <span>
                            📄 7 supports
                        </span>

                    </div>


                    <div class="actions">

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