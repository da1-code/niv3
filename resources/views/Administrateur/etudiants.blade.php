<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Étudiants - EDUNOVA IA</title>
</head>

<body>

<div class="admin-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>

        <ul class="menu">

            <li>
                <a href="/admin/dashboard">
                    🏠 Tableau de bord
                </a>
            </li>

             <li>
                <a href="/admin/users">
                    👥 Utilisateurs
                </a>
            </li>

            <li class="active">
                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>

            <li>
                <a href="/admin/enseignants">
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


    <!-- CONTENU PRINCIPAL -->
    <main class="main-content">

        <!-- TOPBAR -->
        <header class="topbar">

            <div>
                <h2>Gestion des étudiants 👨‍🎓</h2>

                <p>
                    Consultez et gérez les étudiants inscrits sur EDUNOVA IA.
                </p>
            </div>

            <div class="profile">

                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Administrateur"
                >

                <span>
                    {{ Auth::user()->name ?? 'Administrateur' }}
                </span>

            </div>

        </header>


        <!-- CARTES STATISTIQUES -->
        <section class="cards">

            <div class="card">
                <h3>Total étudiants</h3>
                <p>245</p>
            </div>

            <div class="card">
                <h3>Étudiants actifs</h3>
                <p>220</p>
            </div>

            <div class="card">
                <h3>Nouveaux étudiants</h3>
                <p>18</p>
            </div>

            <div class="card">
                <h3>Étudiants désactivés</h3>
                <p>25</p>
            </div>

        </section>


        <!-- SECTION ETUDIANTS -->
        <section class="students-section">

            <div class="section-header">

                <h3>Liste des étudiants</h3>

                <button class="add-btn">
                    + Ajouter un étudiant
                </button>

            </div>


            <!-- BARRE DE RECHERCHE -->
            <div class="search-box">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un étudiant..."
                >

                <select>

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="actif">
                        Actif
                    </option>

                    <option value="inactif">
                        Désactivé
                    </option>

                </select>

            </div>


            <!-- TABLEAU DES ETUDIANTS -->
            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Nom</th>

                            <th>Email</th>

                            <th>Niveau</th>

                            <th>Statut</th>

                            <th>Date d'inscription</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        <!-- ETUDIANT 1 -->
                        <tr>

                            <td>#001</td>

                            <td>
                                <strong>Daniella</strong>
                            </td>

                            <td>
                                daniella@email.com
                            </td>

                            <td>
                                Licence 3
                            </td>

                            <td>

                                <span class="status active-status">
                                    Actif
                                </span>

                            </td>

                            <td>
                                20 Août 2026
                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir"
                                >
                                    👁
                                </button>

                                <button
                                    class="edit-btn"
                                    title="Modifier"
                                >
                                    ✏
                                </button>

                                <button
                                    class="disable-btn"
                                    title="Désactiver"
                                >
                                    ⛔
                                </button>

                            </td>

                        </tr>


                        <!-- ETUDIANT 2 -->
                        <tr>

                            <td>#002</td>

                            <td>
                                <strong>Kevin</strong>
                            </td>

                            <td>
                                kevin@email.com
                            </td>

                            <td>
                                Licence 2
                            </td>

                            <td>

                                <span class="status active-status">
                                    Actif
                                </span>

                            </td>

                            <td>
                                18 Août 2026
                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir"
                                >
                                    👁
                                </button>

                                <button
                                    class="edit-btn"
                                    title="Modifier"
                                >
                                    ✏
                                </button>

                                <button
                                    class="disable-btn"
                                    title="Désactiver"
                                >
                                    ⛔
                                </button>

                            </td>

                        </tr>


                        <!-- ETUDIANT 3 -->
                        <tr>

                            <td>#003</td>

                            <td>
                                <strong>Marie</strong>
                            </td>

                            <td>
                                marie@email.com
                            </td>

                            <td>
                                Licence 1
                            </td>

                            <td>

                                <span class="status inactive-status">
                                    Désactivé
                                </span>

                            </td>

                            <td>
                                12 Août 2026
                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir"
                                >
                                    👁
                                </button>

                                <button
                                    class="edit-btn"
                                    title="Modifier"
                                >
                                    ✏
                                </button>

                                <button
                                    class="enable-btn"
                                    title="Réactiver"
                                >
                                    ✓
                                </button>

                            </td>

                        </tr>


                        <!-- ETUDIANT 4 -->
                        <tr>

                            <td>#004</td>

                            <td>
                                <strong>Paul</strong>
                            </td>

                            <td>
                                paul@email.com
                            </td>

                            <td>
                                Licence 3
                            </td>

                            <td>

                                <span class="status active-status">
                                    Actif
                                </span>

                            </td>

                            <td>
                                10 Août 2026
                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir"
                                >
                                    👁
                                </button>

                                <button
                                    class="edit-btn"
                                    title="Modifier"
                                >
                                    ✏
                                </button>

                                <button
                                    class="disable-btn"
                                    title="Désactiver"
                                >
                                    ⛔
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>

</html>