<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA - Mon profil</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
   <link rel="stylesheet" href="/etudiant/profil.css">
</head>

<body>

<div class="student-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <!-- LOGO -->
        <div class="logo">
            <div class="logo-icon">🎓</div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>Plateforme éducative</span>
            </div>
        </div>


        <!-- MINI PROFIL -->
        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div class="profile-mini-info">
                <strong>Daniella</strong>
                <small>Étudiante</small>
            </div>

        </div>


        <!-- MENU -->
        <nav class="menu">

            <!-- Tableau de bord : PAS active -->
            <a href="/etudiant/dashboard">
                <span>🏠</span>
                <label>Tableau de bord</label>
            </a>


            <!-- Mon profil : ACTIVE -->
            <a href="/etudiant/profil" class="active">
                <span>👤</span>
                <label>Mon profil</label>
            </a>


            <!-- Profil d'apprentissage -->
            <a href="/etudiant/profil-apprentissage">
                <span>🧠</span>
                <label>Profil d'apprentissage</label>
            </a>


            <!-- Cours -->
            <a href="/etudiant/cours">
                <span>📚</span>
                <label>Mes cours</label>
            </a>


            <!-- Examens -->
            <a href="/etudiant/examens">
                <span>📝</span>
                <label>Examens</label>
            </a>


            <!-- IA -->
            <a href="/etudiant/ia">
                <span>🤖</span>
                <label>Mon IA</label>
            </a>


            <!-- Statistiques -->
            <a href="/etudiant/statistiques">
                <span>📊</span>
                <label>Mes statistiques</label>
            </a>


            <!-- Paramètres -->
            <a href="/etudiant/parametres">
                <span>⚙️</span>
                <label>Paramètres</label>
            </a>

        </nav>


        <!-- DECONNEXION -->
        <div class="sidebar-bottom">

            <a href="/logout" class="logout">
                <span>🚪</span>
                <label>Déconnexion</label>
            </a>

        </div>

    </aside>


    <!-- ================= CONTENU PRINCIPAL ================= -->
    <main class="main-content">


        <!-- HEADER -->
        <header class="topbar">

            <div class="page-title">

                <h1>
                    Mon profil 👤
                </h1>

                <p>
                    Consulte et gère tes informations personnelles.
                </p>

            </div>


            <div class="top-actions">

                <!-- Notification -->
                <a href="#notifications" class="notification">

                    🔔

                    <span></span>

                </a>


                <!-- Utilisateur -->
                <div class="student-user">

                    <div class="user-avatar">
                        D
                    </div>

                    <div class="student-user-info">

                        <strong>
                            Daniella
                        </strong>

                        <small>
                            Étudiante
                        </small>

                    </div>

                </div>

            </div>

        </header>



        <!-- ================= PROFIL ================= -->
        <section class="profile-layout">


            <!-- CARTE INFORMATIONS -->
            <div class="profile-card">

                <!-- En-tête -->
                <div class="card-header">

                    <div>

                        <h2>
                            Informations personnelles
                        </h2>

                        <p>
                            Tes informations enregistrées sur EDUNOVA.
                        </p>

                    </div>


                    <button class="edit-btn">
                        ✏️ Modifier
                    </button>

                </div>



                <!-- PHOTO ET NOM -->
                <div class="profile-photo">

                    <div class="large-avatar">
                        👩‍🎓
                    </div>


                    <div class="photo-info">

                        <h3>
                            Daniella
                        </h3>

                        <p>
                            Étudiante en Informatique
                        </p>

                        <button class="photo-btn">
                            📷 Modifier la photo
                        </button>

                    </div>

                </div>



                <!-- INFORMATIONS -->
                <div class="information-grid">


                    <div class="information-item">

                        <label>
                            Nom
                        </label>

                        <strong>
                            Nguimbous
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Prénom
                        </label>

                        <strong>
                            Daniella
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Adresse email
                        </label>

                        <strong>
                            daniella@email.com
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Téléphone
                        </label>

                        <strong>
                            +237 6 XX XX XX XX
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Filière
                        </label>

                        <strong>
                            Informatique
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Niveau d'étude
                        </label>

                        <strong>
                            Licence 3
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Matricule
                        </label>

                        <strong>
                            EDN-2025-001
                        </strong>

                    </div>



                    <div class="information-item">

                        <label>
                            Date d'inscription
                        </label>

                        <strong>
                            15 Septembre 2025
                        </strong>

                    </div>

                </div>

            </div>



            <!-- ================= NOTIFICATIONS ================= -->
            <div class="notifications-card" id="notifications">


                <div class="card-header">

                    <div>

                        <h2>
                            Notifications 🔔
                        </h2>

                        <p>
                            Les dernières informations importantes.
                        </p>

                    </div>


                    <span class="notification-count">
                        3 nouvelles
                    </span>

                </div>



                <!-- Notification 1 -->
                <div class="notification-item unread">

                    <div class="notification-icon blue">
                        📚
                    </div>


                    <div class="notification-content">

                        <strong>
                            Nouveau cours disponible
                        </strong>

                        <p>
                            Un nouveau cours de développement Web est maintenant disponible.
                        </p>

                        <small>
                            Il y a 20 minutes
                        </small>

                    </div>

                </div>



                <!-- Notification 2 -->
                <div class="notification-item unread">

                    <div class="notification-icon green">
                        📝
                    </div>


                    <div class="notification-content">

                        <strong>
                            Nouvel examen disponible
                        </strong>

                        <p>
                            L'examen de Base de données est maintenant disponible.
                        </p>

                        <small>
                            Il y a 2 heures
                        </small>

                    </div>

                </div>



                <!-- Notification 3 -->
                <div class="notification-item unread">

                    <div class="notification-icon purple">
                        🤖
                    </div>


                    <div class="notification-content">

                        <strong>
                            Suggestion de ton IA
                        </strong>

                        <p>
                            EDUNOVA IA te recommande de revoir un chapitre de ton cours.
                        </p>

                        <small>
                            Hier
                        </small>

                    </div>

                </div>



                <!-- Notification 4 -->
                <div class="notification-item">

                    <div class="notification-icon yellow">
                        📊
                    </div>


                    <div class="notification-content">

                        <strong>
                            Progression mise à jour
                        </strong>

                        <p>
                            Ta progression générale est passée à 78%.
                        </p>

                        <small>
                            Il y a 2 jours
                        </small>

                    </div>

                </div>



                <button class="all-notifications">
                    Voir toutes les notifications →
                </button>

            </div>

        </section>



        <!-- ================= RESUME COMPTE ================= -->
        <section class="account-summary">


            <!-- Statut -->
            <div class="summary-item">

                <div class="summary-icon blue">
                    🎓
                </div>

                <div>

                    <strong>
                        Étudiant actif
                    </strong>

                    <small>
                        Compte actuellement actif
                    </small>

                </div>

            </div>



            <!-- Cours -->
            <div class="summary-item">

                <div class="summary-icon green">
                    📚
                </div>

                <div>

                    <strong>
                        18 cours consultés
                    </strong>

                    <small>
                        Depuis ton inscription
                    </small>

                </div>

            </div>



            <!-- Examens -->
            <div class="summary-item">

                <div class="summary-icon purple">
                    📝
                </div>

                <div>

                    <strong>
                        7 examens réalisés
                    </strong>

                    <small>
                        5 réussis
                    </small>

                </div>

            </div>

        </section>

    </main>

</div>

</body>

</html>