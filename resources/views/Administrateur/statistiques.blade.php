<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/statistiques.css">

    <title>Statistiques - EDUNOVA IA</title>

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

            <li>
                <a href="/admin/examens">
                    📝 Examens
                </a>
            </li>

            <li class="active">
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

        <!-- ================= TOPBAR ================= -->

        <header class="topbar">

            <div>

                <h2>
                    Statistiques 📊
                </h2>

                <p>
                    Vue d'ensemble de l'activité de la plateforme EDUNOVA IA.
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


        <!-- ================= STATISTIQUES ================= -->

        <section class="stats-section">


            <!-- ================= CARTES ================= -->

            <div class="stats-grid">


                <!-- ÉTUDIANTS -->

                <div class="stat-card">

                    <div class="stat-icon">
                        👨‍🎓
                    </div>

                    <div>

                        <h3>
                            Étudiants
                        </h3>

                        <span>
                            245
                        </span>

                        <p>
                            étudiants inscrits
                        </p>

                    </div>

                </div>


                <!-- ENSEIGNANTS -->

                <div class="stat-card">

                    <div class="stat-icon">
                        👨‍🏫
                    </div>

                    <div>

                        <h3>
                            Enseignants
                        </h3>

                        <span>
                            18
                        </span>

                        <p>
                            enseignants actifs
                        </p>

                    </div>

                </div>


                <!-- COURS -->

                <div class="stat-card">

                    <div class="stat-icon">
                        📚
                    </div>

                    <div>

                        <h3>
                            Cours
                        </h3>

                        <span>
                            52
                        </span>

                        <p>
                            cours disponibles
                        </p>

                    </div>

                </div>


                <!-- EXAMENS -->

                <div class="stat-card">

                    <div class="stat-icon">
                        📝
                    </div>

                    <div>

                        <h3>
                            Examens
                        </h3>

                        <span>
                            14
                        </span>

                        <p>
                            examens programmés
                        </p>

                    </div>

                </div>

            </div>


            <!-- ================= GRAPHIQUE ================= -->

            <div class="chart-section">

                <div class="section-header">

                    <div>

                        <h3>
                            Évolution des inscriptions
                        </h3>

                        <p>
                            Nombre d'étudiants inscrits au cours des derniers mois.
                        </p>

                    </div>


                    <select class="chart-filter">

                        <option>2026</option>
                        <option>2025</option>
                        <option>2024</option>

                    </select>

                </div>


                <div class="chart-container">


                    <!-- MOIS À GAUCHE -->

                    <div class="chart-months">

                        <span>Jan</span>

                        <span>Fév</span>

                        <span>Mar</span>

                        <span>Avr</span>

                        <span>Mai</span>

                        <span>Juin</span>

                    </div>


                    <!-- GRAPHIQUE -->

                    <div class="chart">


                        <div
                            class="bar"
                            style="height: 60px;"
                        >
                            <strong>35</strong>
                        </div>


                        <div
                            class="bar"
                            style="height: 90px;"
                        >
                            <strong>48</strong>
                        </div>


                        <div
                            class="bar"
                            style="height: 120px;"
                        >
                            <strong>55</strong>
                        </div>


                        <div
                            class="bar"
                            style="height: 100px;"
                        >
                            <strong>42</strong>
                        </div>


                        <div
                            class="bar"
                            style="height: 150px;"
                        >
                            <strong>68</strong>
                        </div>


                        <div
                            class="bar"
                            style="height: 180px;"
                        >
                            <strong>58</strong>
                        </div>


                    </div>

                </div>

            </div>


            <!-- ================= ACTIVITÉ ================= -->

            <div class="activity-section">

                <h3>
                    Activité de la plateforme
                </h3>


                <div class="activity-grid">


                    <!-- COURS -->

                    <div class="activity-card">

                        <span>
                            📚
                        </span>

                        <div>

                            <strong>
                                Cours publiés
                            </strong>

                            <p>
                                52 cours disponibles
                            </p>

                        </div>

                    </div>


                    <!-- EXAMENS -->

                    <div class="activity-card">

                        <span>
                            📝
                        </span>

                        <div>

                            <strong>
                                Examens programmés
                            </strong>

                            <p>
                                14 examens à venir
                            </p>

                        </div>

                    </div>


                    <!-- UTILISATEURS -->

                    <div class="activity-card">

                        <span>
                            👥
                        </span>

                        <div>

                            <strong>
                                Utilisateurs
                            </strong>

                            <p>
                                263 utilisateurs actifs
                            </p>

                        </div>

                    </div>


                </div>

            </div>


        </section>

    </main>

</div>

</body>

</html>