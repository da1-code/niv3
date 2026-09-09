<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/professeurs.css">

    <title>Enseignants - EDUNOVA IA</title>

</head>

<body>

<div class="admin-container">


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>


        <ul class="menu">

            <li>
                <a href="/admin/dashdoard">
                    🏠 Tableau de bord
                </a>
            </li>

                        <li>
                <a href="/admin/users">
                    👥 Utilisateurs
                </a>
            </li>


            <li>
                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>

            <li class="active">
                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
                </a>
            </li>

            <li>
                <a href="/admin/cours">
                    📚 Cours
                </a>
            </li>

            <li>
                <a href="/admin/examens">
                    📝 Examens
                </a>
            </li>

            <li>
                <a href="/admin/statistiques">
                    📊 Statistiques
                </a>
            </li>

            <li>
                <a href="/admin/parametres">
                    ⚙ Paramètres
                </a>
            </li>

            <li>
                <a href="#">
                    🚪 Déconnexion
                </a>
            </li>

        </ul>

    </aside>


    <!-- =====================================================
         CONTENU PRINCIPAL
         ===================================================== -->

    <main class="main-content">


        <!-- =================================================
             TOPBAR
             ================================================= -->

        <header class="topbar">

            <div>

                <h2>
                    Gestion des enseignants 👨‍🏫
                </h2>

                <p>
                    Gérez les enseignants de la plateforme EDUNOVA IA.
                </p>

            </div>


            <div class="profile">

                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Administrateur"
                >

                <span>
                    {{ Auth::user()->prenom ?? 'Administrateur' }}
                    {{ Auth::user()->nom ?? '' }}
                </span>

            </div>

        </header>


        <!-- =================================================
             CONTENU PROFESSEURS
             ================================================= -->

        <section class="professeurs-section">


            <!-- =================================================
                 STATISTIQUES RAPIDES
                 ================================================= -->

            <div class="prof-stats">


                <div class="prof-stat-card">

                    <div class="prof-stat-icon">
                        👨‍🏫
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            18
                        </span>

                        <p>
                            Total enseignants
                        </p>

                    </div>

                </div>


                <div class="prof-stat-card">

                    <div class="prof-stat-icon active-icon">
                        🟢
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            16
                        </span>

                        <p>
                            Enseignants actifs
                        </p>

                    </div>

                </div>


                <div class="prof-stat-card">

                    <div class="prof-stat-icon inactive-icon">
                        🔴
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            2
                        </span>

                        <p>
                            Inactifs
                        </p>

                    </div>

                </div>


                <div class="prof-stat-card">

                    <div class="prof-stat-icon course-icon">
                        📚
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            52
                        </span>

                        <p>
                            Cours publiés
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 BARRE OUTILS
                 ================================================= -->

            <div class="prof-toolbar">


                <div class="search-box">

                    <span>
                        🔍
                    </span>

                    <input
                        type="text"
                        placeholder="Rechercher un enseignant..."
                    >

                </div>


                <div class="toolbar-actions">

                    <select>

                        <option>
                            Tous les statuts
                        </option>

                        <option>
                            Actifs
                        </option>

                        <option>
                            Inactifs
                        </option>

                    </select>


                    <button class="add-prof-btn">

                        <span>＋</span>

                        Ajouter un enseignant

                    </button>

                </div>

            </div>


            <!-- =================================================
                 TABLEAU
                 ================================================= -->

            <div class="prof-table-card">


                <div class="table-header">

                    <div>

                        <h3>
                            Liste des enseignants
                        </h3>

                        <p>
                            Consultez et gérez les enseignants inscrits.
                        </p>

                    </div>

                    <span class="total-label">
                        18 enseignants
                    </span>

                </div>


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Enseignant
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Matière
                                </th>

                                <th>
                                    Cours
                                </th>

                                <th>
                                    Statut
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <!-- ENSEIGNANT 1 -->

                            <tr>

                                <td>

                                    <div class="teacher-info">

                                        <div class="teacher-avatar">
                                            JD
                                        </div>

                                        <div>

                                            <strong>
                                                Jean Dupont
                                            </strong>

                                            <span>
                                                Enseignant
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    jean.dupont@email.com
                                </td>


                                <td>
                                    Informatique
                                </td>


                                <td>
                                    <span class="course-badge">
                                        8 cours
                                    </span>
                                </td>


                                <td>

                                    <span class="status active">
                                        Actif
                                    </span>

                                </td>


                                <td>

                                    <div class="actions">

                                        <button
                                            class="action-btn view"
                                            title="Voir"
                                        >
                                            👁️
                                        </button>

                                        <button
                                            class="action-btn edit"
                                            title="Modifier"
                                        >
                                            ✏️
                                        </button>

                                        <button
                                            class="action-btn delete"
                                            title="Désactiver"
                                        >
                                            🚫
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ENSEIGNANT 2 -->

                            <tr>

                                <td>

                                    <div class="teacher-info">

                                        <div class="teacher-avatar">
                                            MM
                                        </div>

                                        <div>

                                            <strong>
                                                Marie Mbarga
                                            </strong>

                                            <span>
                                                Enseignante
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    marie.mbarga@email.com
                                </td>


                                <td>
                                    Mathématiques
                                </td>


                                <td>
                                    <span class="course-badge">
                                        6 cours
                                    </span>
                                </td>


                                <td>

                                    <span class="status active">
                                        Actif
                                    </span>

                                </td>


                                <td>

                                    <div class="actions">

                                        <button class="action-btn view">
                                            👁️
                                        </button>

                                        <button class="action-btn edit">
                                            ✏️
                                        </button>

                                        <button class="action-btn delete">
                                            🚫
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ENSEIGNANT 3 -->

                            <tr>

                                <td>

                                    <div class="teacher-info">

                                        <div class="teacher-avatar">
                                            PN
                                        </div>

                                        <div>

                                            <strong>
                                                Paul Ngono
                                            </strong>

                                            <span>
                                                Enseignant
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    paul.ngono@email.com
                                </td>


                                <td>
                                    Intelligence Artificielle
                                </td>


                                <td>
                                    <span class="course-badge">
                                        10 cours
                                    </span>
                                </td>


                                <td>

                                    <span class="status active">
                                        Actif
                                    </span>

                                </td>


                                <td>

                                    <div class="actions">

                                        <button class="action-btn view">
                                            👁️
                                        </button>

                                        <button class="action-btn edit">
                                            ✏️
                                        </button>

                                        <button class="action-btn delete">
                                            🚫
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ENSEIGNANT 4 -->

                            <tr>

                                <td>

                                    <div class="teacher-info">

                                        <div class="teacher-avatar">
                                            AF
                                        </div>

                                        <div>

                                            <strong>
                                                Alice Fotso
                                            </strong>

                                            <span>
                                                Enseignante
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    alice.fotso@email.com
                                </td>


                                <td>
                                    Bases de données
                                </td>


                                <td>
                                    <span class="course-badge">
                                        5 cours
                                    </span>
                                </td>


                                <td>

                                    <span class="status inactive">
                                        Inactif
                                    </span>

                                </td>


                                <td>

                                    <div class="actions">

                                        <button class="action-btn view">
                                            👁️
                                        </button>

                                        <button class="action-btn edit">
                                            ✏️
                                        </button>

                                        <button class="action-btn delete">
                                            🚫
                                        </button>

                                    </div>

                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>


                <!-- =================================================
                     PAGINATION
                     ================================================= -->

                <div class="pagination">

                    <span>
                        Affichage de 1 à 4 sur 18 enseignants
                    </span>


                    <div class="pagination-buttons">

                        <button>
                            ‹
                        </button>

                        <button class="current">
                            1
                        </button>

                        <button>
                            2
                        </button>

                        <button>
                            3
                        </button>

                        <button>
                            4
                        </button>

                        <button>
                            ›
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>

</html>