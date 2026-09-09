<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Statistiques</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/statistiques.css">

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


            <li>
                <a href="/prof/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>


            <li class="active">
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


        <div class="stats-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>
                        📊 Évolution des étudiants
                    </h2>

                    <p>
                        Consultez les performances et la progression
                        individuelle de vos étudiants.
                    </p>

                </div>

            </div>



            <!-- =================================================
                 CARTES RÉSUMÉ
                 ================================================= -->

            <div class="stats-grid">


                <div class="stat-card">

                    <h3>
                        👨‍🎓 Étudiants suivis
                    </h3>

                    <span>
                        120
                    </span>

                    <p>
                        Étudiants inscrits
                    </p>

                </div>


                <div class="stat-card">

                    <h3>
                        📈 Progression moyenne
                    </h3>

                    <span>
                        85%
                    </span>

                    <p>
                        Progression générale
                    </p>

                </div>


                <div class="stat-card">

                    <h3>
                        ⭐ Moyenne générale
                    </h3>

                    <span>
                        15.8/20
                    </span>

                    <p>
                        Moyenne des étudiants
                    </p>

                </div>


                <div class="stat-card">

                    <h3>
                        ⚠️ À accompagner
                    </h3>

                    <span>
                        18
                    </span>

                    <p>
                        Étudiants à suivre
                    </p>

                </div>

            </div>



            <!-- =================================================
                 RECHERCHE ET FILTRES
                 ================================================= -->

            <div class="filter-section">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un étudiant..."
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
                        Toutes les progressions
                    </option>

                    <option value="excellent">
                        Excellente progression
                    </option>

                    <option value="moyenne">
                        Progression moyenne
                    </option>

                    <option value="faible">
                        Progression faible
                    </option>

                </select>

            </div>



            <!-- =================================================
                 PROGRESSION DES ÉTUDIANTS
                 ================================================= -->

            <div class="performance">

                <div class="section-title">

                    <div>

                        <h3>
                            📈 Progression individuelle
                        </h3>

                        <p>
                            Visualisez l'évolution de chaque étudiant.
                        </p>

                    </div>

                </div>



                <!-- ÉTUDIANT 1 -->

                <div class="student-progress">

                    <div class="student-info">

                        <div class="avatar">
                            DK
                        </div>

                        <div>

                            <strong>
                                Daniella Kamga
                            </strong>

                            <span>
                                Intelligence Artificielle
                            </span>

                        </div>

                    </div>


                    <div class="student-note">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            17/20
                        </strong>

                    </div>


                    <div class="progress-container">

                        <div class="progress-info">

                            <span>
                                Progression
                            </span>

                            <strong>
                                92%
                            </strong>

                        </div>


                        <div class="progress-bar">

                            <div
                                class="progress"
                                style="width:92%;">
                            </div>

                        </div>

                    </div>


                    <a href="#" class="btn-details">
                        Voir détails
                    </a>

                </div>



                <!-- ÉTUDIANT 2 -->

                <div class="student-progress">

                    <div class="student-info">

                        <div class="avatar">
                            JM
                        </div>

                        <div>

                            <strong>
                                Jean Michel
                            </strong>

                            <span>
                                Développement Laravel
                            </span>

                        </div>

                    </div>


                    <div class="student-note">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            14/20
                        </strong>

                    </div>


                    <div class="progress-container">

                        <div class="progress-info">

                            <span>
                                Progression
                            </span>

                            <strong>
                                78%
                            </strong>

                        </div>


                        <div class="progress-bar">

                            <div
                                class="progress"
                                style="width:78%;">
                            </div>

                        </div>

                    </div>


                    <a href="#" class="btn-details">
                        Voir détails
                    </a>

                </div>



                <!-- ÉTUDIANT 3 -->

                <div class="student-progress">

                    <div class="student-info">

                        <div class="avatar">
                            AS
                        </div>

                        <div>

                            <strong>
                                Aline Sophie
                            </strong>

                            <span>
                                Base de données
                            </span>

                        </div>

                    </div>


                    <div class="student-note">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            12/20
                        </strong>

                    </div>


                    <div class="progress-container">

                        <div class="progress-info">

                            <span>
                                Progression
                            </span>

                            <strong>
                                61%
                            </strong>

                        </div>


                        <div class="progress-bar">

                            <div
                                class="progress"
                                style="width:61%;">
                            </div>

                        </div>

                    </div>


                    <a href="#" class="btn-details">
                        Voir détails
                    </a>

                </div>



                <!-- ÉTUDIANT 4 -->

                <div class="student-progress">

                    <div class="student-info">

                        <div class="avatar">
                            PN
                        </div>

                        <div>

                            <strong>
                                Patrick Nkomo
                            </strong>

                            <span>
                                Sécurité informatique
                            </span>

                        </div>

                    </div>


                    <div class="student-note">

                        <span>
                            Moyenne
                        </span>

                        <strong>
                            9/20
                        </strong>

                    </div>


                    <div class="progress-container">

                        <div class="progress-info">

                            <span>
                                Progression
                            </span>

                            <strong>
                                43%
                            </strong>

                        </div>


                        <div class="progress-bar">

                            <div
                                class="progress"
                                style="width:43%;">
                            </div>

                        </div>

                    </div>


                    <a href="#" class="btn-details">
                        Voir détails
                    </a>

                </div>


            </div>



            <!-- =================================================
                 DERNIERS RÉSULTATS
                 ================================================= -->

            <div class="recent-results">

                <div class="section-title">

                    <div>

                        <h3>
                            📝 Derniers résultats
                        </h3>

                        <p>
                            Résultats récents des étudiants.
                        </p>

                    </div>

                </div>


                <table>

                    <thead>

                        <tr>

                            <th>
                                Étudiant
                            </th>

                            <th>
                                Cours
                            </th>

                            <th>
                                Note
                            </th>

                            <th>
                                Progression
                            </th>

                            <th>
                                Statut
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                Daniella Kamga
                            </td>

                            <td>
                                Intelligence Artificielle
                            </td>

                            <td>
                                17/20
                            </td>

                            <td>
                                92%
                            </td>

                            <td class="success">
                                Excellent
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Jean Michel
                            </td>

                            <td>
                                Développement Laravel
                            </td>

                            <td>
                                14/20
                            </td>

                            <td>
                                78%
                            </td>

                            <td class="success">
                                Bon niveau
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Aline Sophie
                            </td>

                            <td>
                                Base de données
                            </td>

                            <td>
                                12/20
                            </td>

                            <td>
                                61%
                            </td>

                            <td class="warning">
                                À surveiller
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Patrick Nkomo
                            </td>

                            <td>
                                Sécurité informatique
                            </td>

                            <td>
                                9/20
                            </td>

                            <td>
                                43%
                            </td>

                            <td class="danger">
                                À accompagner
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>


        </div>


    </main>


</body>

</html>