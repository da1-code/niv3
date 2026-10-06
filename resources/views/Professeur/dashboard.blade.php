<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/enseignant/dashboard.css">

    <title>Dashboard Enseignant - EDUNOVA IA</title>

</head>

<body>


<div class="teacher-container">


    <!-- =====================================================
         SIDEBAR ENSEIGNANT
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>


        <ul class="menu">

            <li class="active">
                <a href="/prof/dashboard">
                    🏠 Tableau de bord
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


        <!-- =================================================
             MESSAGE DE BIENVENUE
             ================================================= -->

        <div class="welcome-box">

            <h2>
                Bienvenue
                {{ Auth::user()->prenom ?? '' }}
                {{ Auth::user()->nom ?? 'Enseignant' }}
                👋
            </h2>

            <p>
                Gérez vos cours, vos examens et suivez
                l'évolution de vos étudiants avec EDUNOVA IA.
            </p>

        </div>



        <!-- =================================================
             STATISTIQUES
             ================================================= -->

        <div class="cards">


            <!-- MES COURS -->

            <div class="card">

                <h3>
                    📚 Mes cours
                </h3>

                <span>
                    {{ $totalCours }}
                </span>

                <p>
                    Cours disponibles
                </p>

            </div>



            <!-- MES ÉTUDIANTS -->

            <div class="card">

                <h3>
                    👨‍🎓 Mes étudiants
                </h3>

                <span>
                    {{ $totalEtudiants }}
                </span>

                <p>
                    Étudiants suivis
                </p>

            </div>



            <!-- MES EXAMENS -->

            <div class="card">

                <h3>
                    📝 Mes examens
                </h3>

                <span>
                    {{ $totalExamens }}
                </span>

                <p>
                    Examens créés
                </p>

            </div>



            <!-- ÉVOLUTION -->

            <div class="card">

                <h3>
                    📊 Évolution
                </h3>

                <span>
                    {{ $progressionMoyenne }}%
                </span>

                <p>
                    Progression moyenne
                </p>

            </div>


        </div>



        <!-- =================================================
             ACTIVITÉS RÉCENTES
             ================================================= -->

        <div class="activities">


            <h3>
                Activités récentes
            </h3>


            @forelse($activites as $activite)

                <div class="activity">

                    {{ $activite['icone'] }}

                    {{ $activite['texte'] }}

                </div>

            @empty

                <div class="activity">

                    📋 Aucune activité récente.

                </div>

            @endforelse


        </div>


    </main>


</div>


</body>

</html>