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

                <a href="/admin/classes">

                    🏫 Classes

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

                    {{ Auth::user()->prenom ?? '' }}

                    {{ Auth::user()->nom ?? Auth::user()->name ?? 'Administrateur' }}

                </span>


            </div>


        </header>



        <!-- ================= STATISTIQUES ================= -->

        <section class="stats-section">



            <!-- ================= CARTES ================= -->

            <div class="stats-grid">



                <!-- ETUDIANTS -->

                <div class="stat-card">


                    <div class="stat-icon">

                        👨‍🎓

                    </div>


                    <div>


                        <h3>

                            Étudiants

                        </h3>


                        <span>

                            {{ $totalEtudiants }}

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

                            {{ $totalProfesseurs }}

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

                            {{ $totalCours }}

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

                            {{ $totalExamens }}

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

                            Nombre d'étudiants inscrits au cours de l'année {{ $annee }}.

                        </p>


                    </div>



                    <select class="chart-filter">

                        <option>

                            {{ $annee }}

                        </option>

                    </select>


                </div>



                <div class="chart-container">



                    <!-- ================= MOIS ================= -->

                    <div class="chart-months">


                        @foreach($moisGraphique as $mois)

                            <span>

                                {{ $mois }}

                            </span>

                        @endforeach


                    </div>



                    <!-- ================= BARRES ================= -->

                    <div class="chart">


                        @php

                            $maximum = max($valeursGraphique);

                            if ($maximum == 0) {

                                $maximum = 1;

                            }

                        @endphp



                        @foreach($valeursGraphique as $numeroMois => $valeur)


                            @php

                                $hauteur = ($valeur / $maximum) * 180;

                                if ($valeur > 0 && $hauteur < 20) {

                                    $hauteur = 20;

                                }

                            @endphp



                            <div class="bar-container">


                                <div
                                    class="bar"
                                    style="height: {{ $hauteur }}px;"
                                    title="{{ $moisGraphique[$numeroMois] }} : {{ $valeur }} inscription(s)"
                                >


                                    <strong>

                                        {{ $valeur }}

                                    </strong>


                                </div>


                                <span class="bar-label">

                                    {{ $moisGraphique[$numeroMois] }}

                                </span>


                            </div>


                        @endforeach


                    </div>


                </div>


            </div>



            <!-- ================= ACTIVITE ================= -->

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

                                {{ $totalCours }} cours disponibles

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

                                {{ $totalExamens }} examens à venir

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

                                {{ $utilisateursActifs }} utilisateurs actifs

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