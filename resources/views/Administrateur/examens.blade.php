<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Examens - EDUNOVA IA</title>

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
                <a href="/admin/users">
                    👥 Utilisateurs
                </a>
            </li>


            <li>
                <a href="/admin/cours">
                    📚 Cours
                </a>
            </li>


            <li class="active">
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
                    Gestion des examens 📝
                </h2>

                <p>
                    Consultez les examens programmés sur EDUNOVA IA.
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



        <!-- ================= SECTION EXAMENS ================= -->

        <section class="exams-section">


            <!-- EN-TÊTE -->

            <div class="section-header">

                <div>

                    <h3>
                        Examens programmés
                    </h3>

                    <p>
                        Consultez les examens créés et programmés par les enseignants.
                    </p>

                </div>

            </div>



            <!-- ================= RECHERCHE ================= -->

            <div class="search-box">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un examen..."
                >


                <select>

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="programme">
                        Programmé
                    </option>

                    <option value="termine">
                        Terminé
                    </option>

                    <option value="annule">
                        Annulé
                    </option>

                </select>

            </div>



            <!-- ================= TABLEAU ================= -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Examen</th>

                            <th>Matière</th>

                            <th>Enseignant</th>

                            <th>Niveau</th>

                            <th>Date</th>

                            <th>Heure</th>

                            <th>Statut</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- EXAMEN 1 -->

                        <tr>

                            <td>
                                #001
                            </td>

                            <td>

                                <strong>
                                    Examen Laravel
                                </strong>

                            </td>

                            <td>
                                Développement Web
                            </td>

                            <td>
                                M. Dupont
                            </td>

                            <td>
                                Licence 3
                            </td>

                            <td>
                                28 Août 2026
                            </td>

                            <td>
                                09:00
                            </td>

                            <td>

                                <span class="status scheduled-status">
                                    Programmé
                                </span>

                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir l'examen"
                                >
                                    👁
                                </button>

                            </td>

                        </tr>



                        <!-- EXAMEN 2 -->

                        <tr>

                            <td>
                                #002
                            </td>

                            <td>

                                <strong>
                                    Examen Bases de données
                                </strong>

                            </td>

                            <td>
                                MySQL
                            </td>

                            <td>
                                Mme Bernard
                            </td>

                            <td>
                                Licence 2
                            </td>

                            <td>
                                30 Août 2026
                            </td>

                            <td>
                                14:00
                            </td>

                            <td>

                                <span class="status scheduled-status">
                                    Programmé
                                </span>

                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir l'examen"
                                >
                                    👁
                                </button>

                            </td>

                        </tr>



                        <!-- EXAMEN 3 -->

                        <tr>

                            <td>
                                #003
                            </td>

                            <td>

                                <strong>
                                    Examen Intelligence Artificielle
                                </strong>

                            </td>

                            <td>
                                Intelligence Artificielle
                            </td>

                            <td>
                                M. Martin
                            </td>

                            <td>
                                Licence 3
                            </td>

                            <td>
                                02 Septembre 2026
                            </td>

                            <td>
                                10:00
                            </td>

                            <td>

                                <span class="status scheduled-status">
                                    Programmé
                                </span>

                            </td>

                            <td class="actions">

                                <button
                                    class="view-btn"
                                    title="Voir l'examen"
                                >
                                    👁
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