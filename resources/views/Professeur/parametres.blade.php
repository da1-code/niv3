<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Paramètres</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/parametres.css">

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
                <a href="/prof/statistiques">
                    📊 Statistiques
                </a>
            </li>

            <li class="active">
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


        <div class="settings-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <h2>⚙️ Paramètres</h2>

                <p>
                    Configurez votre espace enseignant EDUNOVA IA.
                </p>

            </div>


            <!-- =================================================
                 PARAMÈTRES
                 ================================================= -->

            <div class="settings-grid">


                <!-- =================================================
                     COMPTE
                     ================================================= -->

                <div class="settings-card">

                    <h3>👤 Compte</h3>

                    <label>
                        Nom complet
                    </label>

                    <input
                        type="text"
                        value="Nom de l'enseignant"
                    >


                    <label>
                        Email
                    </label>

                    <input
                        type="email"
                        value="enseignant@edunova.com"
                    >


                    <button type="button">
                        Enregistrer
                    </button>

                </div>


                <!-- =================================================
                     SÉCURITÉ
                     ================================================= -->

                <div class="settings-card">

                    <h3>🔒 Sécurité</h3>

                    <label>
                        Ancien mot de passe
                    </label>

                    <input
                        type="password"
                    >


                    <label>
                        Nouveau mot de passe
                    </label>

                    <input
                        type="password"
                    >


                    <label>
                        Confirmer le mot de passe
                    </label>

                    <input
                        type="password"
                    >


                    <button type="button">
                        Modifier le mot de passe
                    </button>

                </div>


                <!-- =================================================
                     NOTIFICATIONS
                     ================================================= -->

                <div class="settings-card">

                    <h3>🔔 Notifications</h3>


                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                            checked
                        >

                        <span>
                            Nouveaux étudiants
                        </span>

                    </label>


                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                            checked
                        >

                        <span>
                            Nouveaux examens
                        </span>

                    </label>


                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                            checked
                        >

                        <span>
                            Nouveaux messages
                        </span>

                    </label>


                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                        >

                        <span>
                            Conseils EDUNOVA IA
                        </span>

                    </label>


                    <button type="button">
                        Sauvegarder
                    </button>

                </div>


                <!-- =================================================
                     APPARENCE
                     ================================================= -->

                <div class="settings-card">

                    <h3>🎨 Apparence</h3>


                    <label class="checkbox-label">

                        <input
                            type="radio"
                            name="theme"
                            checked
                        >

                        <span>
                            Mode clair
                        </span>

                    </label>


                    <label class="checkbox-label">

                        <input
                            type="radio"
                            name="theme"
                        >

                        <span>
                            Mode sombre
                        </span>

                    </label>


                    <button type="button">
                        Appliquer
                    </button>

                </div>


            </div>

        </div>


    </main>


</body>

</html>