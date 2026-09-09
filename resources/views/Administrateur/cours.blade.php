<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Cours - EDUNOVA IA</title>

</head>

<body>


<div class="admin-container">


    <!-- ================= SIDEBAR ================= -->

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


            <li>
                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
                </a>
            </li>

            <li class="active">
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



    <!-- ================= CONTENU PRINCIPAL ================= -->

    <main class="main-content">


        <!-- TOPBAR -->

        <header class="topbar">

            <div>

                <h2>
                    Gestion des cours 📚
                </h2>

                <p>
                    Consultez et gérez les cours disponibles sur EDUNOVA IA.
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



        <!-- ================= SECTION COURS ================= -->

        <section class="courses-section">


            <!-- EN-TÊTE -->

            <div class="section-header">

                <div>

                    <h3>
                        Liste des cours
                    </h3>

                    <p>
                        Consultez les cours publiés par les enseignants.
                    </p>

                </div>


                <button class="add-btn">
                    + Ajouter un cours
                </button>

            </div>



            <!-- ================= RECHERCHE ================= -->

            <div class="search-box">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un cours..."
                >


                <select>

                    <option value="">
                        Toutes les catégories
                    </option>

                    <option value="informatique">
                        Informatique
                    </option>

                    <option value="mathematiques">
                        Mathématiques
                    </option>

                    <option value="anglais">
                        Anglais
                    </option>

                </select>

            </div>



            <!-- ================= TABLEAU ================= -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Titre</th>

                            <th>Description</th>

                            <th>Enseignant</th>

                            <th>Document</th>

                            <th>Date de publication</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- COURS 1 -->

                        <tr>

                            <td>
                                #001
                            </td>


                            <td>

                                <strong>
                                    Introduction à Laravel
                                </strong>

                            </td>


                            <td>
                                Introduction au framework Laravel.
                            </td>


                            <td>
                                M. Dupont
                            </td>


                            <td>

                                <a href="#" class="pdf-link">
                                    📄 cours_laravel.pdf
                                </a>

                            </td>


                            <td>
                                20 Août 2026
                            </td>


                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir le cours"
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
                                    class="delete-btn"
                                    title="Supprimer"
                                >
                                    🗑
                                </button>

                            </td>

                        </tr>



                        <!-- COURS 2 -->

                        <tr>

                            <td>
                                #002
                            </td>


                            <td>

                                <strong>
                                    Bases de données MySQL
                                </strong>

                            </td>


                            <td>
                                Introduction à la gestion des bases de données.
                            </td>


                            <td>
                                Mme Bernard
                            </td>


                            <td>

                                <a href="#" class="pdf-link">
                                    📄 cours_mysql.pdf
                                </a>

                            </td>


                            <td>
                                18 Août 2026
                            </td>


                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir le cours"
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
                                    class="delete-btn"
                                    title="Supprimer"
                                >
                                    🗑
                                </button>

                            </td>

                        </tr>



                        <!-- COURS 3 -->

                        <tr>

                            <td>
                                #003
                            </td>


                            <td>

                                <strong>
                                    Intelligence Artificielle
                                </strong>

                            </td>


                            <td>
                                Concepts fondamentaux de l'intelligence artificielle.
                            </td>


                            <td>
                                M. Martin
                            </td>


                            <td>

                                <a href="#" class="pdf-link">
                                    📄 cours_ia.pdf
                                </a>

                            </td>


                            <td>
                                15 Août 2026
                            </td>


                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir le cours"
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
                                    class="delete-btn"
                                    title="Supprimer"
                                >
                                    🗑
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