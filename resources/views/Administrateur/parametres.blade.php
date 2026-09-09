<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/parametres.css">

    <title>Paramètres - EDUNOVA IA</title>
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

            <li class="active">
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
                    Paramètres ⚙
                </h2>

                <p>
                    Configurez votre compte et les paramètres de la plateforme EDUNOVA IA.
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



        <!-- SECTION PARAMÈTRES -->
        <section class="settings-section">


            <!-- EN-TÊTE -->
            <div class="section-header">

                <div>

                    <h3>
                        Paramètres de la plateforme
                    </h3>

                    <p>
                        Gérez les informations, la sécurité et les préférences d'EDUNOVA IA.
                    </p>

                </div>

            </div>



            <!-- GRILLE DES PARAMÈTRES -->
            <div class="settings-grid">


                <!-- INFORMATIONS ADMINISTRATEUR -->
                <div class="settings-card">

                    <div class="settings-card-header">

                        <div class="settings-icon">
                            👤
                        </div>

                        <div>

                            <h3>
                                Informations administrateur
                            </h3>

                            <p>
                                Gérez vos informations personnelles.
                            </p>

                        </div>

                    </div>


                    <form>

                        <div class="form-group">

                            <label>
                                Nom complet
                            </label>

                            <input
                                type="text"
                                value="{{ Auth::user()->name ?? 'Administrateur' }}"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Adresse email
                            </label>

                            <input
                                type="email"
                                value="{{ Auth::user()->email ?? 'admin@edunova.com' }}"
                            >

                        </div>


                        <button
                            type="submit"
                            class="save-btn"
                        >
                            Enregistrer
                        </button>

                    </form>

                </div>



                <!-- SÉCURITÉ -->
                <div class="settings-card">

                    <div class="settings-card-header">

                        <div class="settings-icon security-icon">
                            🔒
                        </div>

                        <div>

                            <h3>
                                Sécurité
                            </h3>

                            <p>
                                Modifiez le mot de passe administrateur.
                            </p>

                        </div>

                    </div>


                    <form>

                        <div class="form-group">

                            <label>
                                Ancien mot de passe
                            </label>

                            <input
                                type="password"
                                placeholder="••••••••"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Nouveau mot de passe
                            </label>

                            <input
                                type="password"
                                placeholder="••••••••"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Confirmer le mot de passe
                            </label>

                            <input
                                type="password"
                                placeholder="••••••••"
                            >

                        </div>


                        <button
                            type="submit"
                            class="save-btn"
                        >
                            Modifier le mot de passe
                        </button>

                    </form>

                </div>



                <!-- PARAMÈTRES DE LA PLATEFORME -->
                <div class="settings-card">

                    <div class="settings-card-header">

                        <div class="settings-icon platform-icon">
                            🏫
                        </div>

                        <div>

                            <h3>
                                EDUNOVA IA
                            </h3>

                            <p>
                                Personnalisez les informations de la plateforme.
                            </p>

                        </div>

                    </div>


                    <form>

                        <div class="form-group">

                            <label>
                                Nom de la plateforme
                            </label>

                            <input
                                type="text"
                                value="EDUNOVA IA"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Logo de la plateforme
                            </label>

                            <input
                                type="file"
                                class="file-input"
                            >

                        </div>


                        <button
                            type="submit"
                            class="save-btn"
                        >
                            Sauvegarder
                        </button>

                    </form>

                </div>



                <!-- NOTIFICATIONS -->
                <div class="settings-card">

                    <div class="settings-card-header">

                        <div class="settings-icon notification-icon">
                            🔔
                        </div>

                        <div>

                            <h3>
                                Notifications
                            </h3>

                            <p>
                                Gérez les notifications de la plateforme.
                            </p>

                        </div>

                    </div>


                    <div class="notification-options">


                        <label class="notification-option">

                            <div>

                                <strong>
                                    Notifications Email
                                </strong>

                                <p>
                                    Recevoir les notifications par email.
                                </p>

                            </div>

                            <input
                                type="checkbox"
                                checked
                            >

                        </label>



                        <label class="notification-option">

                            <div>

                                <strong>
                                    Notifications Examens
                                </strong>

                                <p>
                                    Recevoir les alertes concernant les examens.
                                </p>

                            </div>

                            <input
                                type="checkbox"
                                checked
                            >

                        </label>



                        <label class="notification-option">

                            <div>

                                <strong>
                                    Notifications des cours
                                </strong>

                                <p>
                                    Recevoir les notifications concernant les cours.
                                </p>

                            </div>

                            <input
                                type="checkbox"
                            >

                        </label>

                    </div>


                    <button class="save-btn">
                        Appliquer
                    </button>

                </div>


            </div>

        </section>

    </main>

</div>

</body>

</html>