<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/admin/dashboard.css">
<link rel="stylesheet" href="/admin/etudiants.css">
    

    <title>Utilisateurs - EDUNOVA IA</title>
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

               <li class="active">
                <a href="/admin/users">
                    👥 Utilisateurs
                </a>
            </li>


            <li>
                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>

           <li>
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


    <!-- CONTENU PRINCIPAL -->
    <main class="main-content">

        <!-- TOPBAR -->
        <header class="topbar">

            <div>

                <h2>
                    Gestion des utilisateurs 👥
                </h2>

                <p>
                    Gérez les comptes utilisateurs de la plateforme EDUNOVA IA.
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

                <h3>
                    Total utilisateurs
                </h3>

                <p>
                    285
                </p>

            </div>


            <div class="card">

                <h3>
                    Étudiants
                </h3>

                <p>
                    245
                </p>

            </div>


            <div class="card">

                <h3>
                    Enseignants
                </h3>

                <p>
                    18
                </p>

            </div>


            <div class="card">

                <h3>
                    Administrateurs
                </h3>

                <p>
                    2
                </p>

            </div>

        </section>


        <!-- SECTION UTILISATEURS -->
        <section class="users-section">

            <div class="section-header">

                <div>

                    <h3>
                        Liste des utilisateurs
                    </h3>

                    <p>
                        Consultez et gérez les comptes enregistrés.
                    </p>

                </div>


                <button class="add-btn">
                    + Nouvel utilisateur
                </button>

            </div>


            <!-- RECHERCHE -->
            <div class="search-box">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un utilisateur..."
                >


                <select>

                    <option value="">
                        Tous les rôles
                    </option>

                    <option value="admin">
                        Administrateur
                    </option>

                    <option value="professeur">
                        Enseignant
                    </option>

                    <option value="etudiant">
                        Étudiant
                    </option>

                </select>


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


            <!-- TABLEAU -->
            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Nom</th>

                            <th>Email</th>

                            <th>Rôle</th>

                            <th>Statut</th>

                            <th>Date d'inscription</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- ADMINISTRATEUR -->
                        <tr>

                            <td>
                                #001
                            </td>

                            <td>
                                <strong>Administrateur</strong>
                            </td>

                            <td>
                                admin@edunova.com
                            </td>

                            <td>

                                <span class="role admin-role">
                                    Administrateur
                                </span>

                            </td>

                            <td>

                                <span class="status active-status">
                                    Actif
                                </span>

                            </td>

                            <td>
                                01 Août 2026
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


                        <!-- ENSEIGNANT -->
                        <tr>

                            <td>
                                #002
                            </td>

                            <td>
                                <strong>Jean Dupont</strong>
                            </td>

                            <td>
                                jean@edunova.com
                            </td>

                            <td>

                                <span class="role teacher-role">
                                    Enseignant
                                </span>

                            </td>

                            <td>

                                <span class="status active-status">
                                    Actif
                                </span>

                            </td>

                            <td>
                                05 Août 2026
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


                        <!-- ETUDIANT -->
                        <tr>

                            <td>
                                #003
                            </td>

                            <td>
                                <strong>Daniella</strong>
                            </td>

                            <td>
                                daniella@email.com
                            </td>

                            <td>

                                <span class="role student-role">
                                    Étudiant
                                </span>

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


                        <!-- UTILISATEUR DESACTIVE -->
                        <tr>

                            <td>
                                #004
                            </td>

                            <td>
                                <strong>Marie</strong>
                            </td>

                            <td>
                                marie@email.com
                            </td>

                            <td>

                                <span class="role student-role">
                                    Étudiant
                                </span>

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


                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>

</html>