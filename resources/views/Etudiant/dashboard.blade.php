<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Tableau de bord étudiant</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
</head>

<body>

<div class="student-container">

    <!-- =====================================================
         SIDEBAR ÉTUDIANT
         ===================================================== -->

    <aside class="sidebar">

        <!-- LOGO -->

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>Plateforme éducative</span>
            </div>

        </div>


        <!-- PETIT PROFIL -->

        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div>
                <strong>Daniella</strong>
                <small>Étudiante</small>
            </div>

        </div>


        <!-- MENU -->

        <nav class="menu">

            <!-- PAGE ACTUELLE -->

            <a href="/etudiant/dashboard" class="active">

                <span>🏠</span>

                Tableau de bord

            </a>


            <a href="/etudiant/profil">

                <span>👤</span>

                Mon profil

            </a>


            <a href="/etudiant/profil_apprentissage">

                <span>🧠</span>

                Profil d'apprentissage

            </a>


            <a href="/etudiant/cours">

                <span>📚</span>

                Mes cours

            </a>


            <a href="/etudiant/examens">

                <span>📝</span>

                Examens

            </a>


            <a href="/etudiant/ia">

                <span>🤖</span>

                Mon IA

            </a>


            <a href="/etudiant/statistiques">

                <span>📊</span>

                Mes statistiques

            </a>


            <a href="/etudiant/parametres">

                <span>⚙️</span>

                Paramètres

            </a>

        </nav>


        <!-- DÉCONNEXION -->

        <div class="sidebar-bottom">

            <a href="/logout" class="logout">

                <span>🚪</span>

                Déconnexion

            </a>

        </div>

    </aside>


    <!-- =====================================================
         CONTENU PRINCIPAL
         ===================================================== -->

    <main class="main-content">


        <!-- =================================================
             HEADER
             ================================================= -->

        <header class="topbar">

            <div class="page-title">

                <h1>
                    Bonjour Daniella 👋
                </h1>

                <p>
                    Prête à continuer ton apprentissage aujourd'hui ?
                </p>

            </div>


            <div class="top-actions">


                <!-- =================================================
                     NOTIFICATIONS
                     ================================================= -->

                <div class="notification-container">

                    <button
                        type="button"
                        class="notification"
                        id="notificationBtn"
                        aria-label="Notifications"
                        aria-expanded="false"
                    >

                        <span class="notification-bell">
                            🔔
                        </span>

                        <span
                            class="notification-badge"
                            id="notificationBadge"
                        >
                            3
                        </span>

                    </button>


                    <!-- MENU DES NOTIFICATIONS -->

                    <div
                        class="notification-dropdown"
                        id="notificationDropdown"
                    >

                        <!-- EN-TÊTE -->

                        <div class="notification-header">

                            <div>

                                <h3>
                                    Notifications
                                </h3>

                                <span id="notificationHeaderText">
                                    3 notifications non lues
                                </span>

                            </div>


                            <button
                                type="button"
                                class="mark-all-btn"
                                id="markAllBtn"
                            >
                                Tout lire
                            </button>

                        </div>


                        <!-- LISTE -->

                        <div
                            class="notification-list"
                            id="notificationList"
                        >


                            <!-- NOTIFICATION 1 -->

                            <div class="notification-item unread">

                                <div class="notification-item-icon exam">
                                    📝
                                </div>

                                <div class="notification-content">

                                    <h4>
                                        Nouvel examen disponible
                                    </h4>

                                    <p>
                                        L'examen de Mathématiques est maintenant disponible.
                                    </p>

                                    <span class="notification-time">
                                        Il y a 10 minutes
                                    </span>

                                </div>

                                <span class="notification-unread-dot"></span>

                            </div>


                            <!-- NOTIFICATION 2 -->

                            <div class="notification-item unread">

                                <div class="notification-item-icon course">
                                    📚
                                </div>

                                <div class="notification-content">

                                    <h4>
                                        Nouveau cours disponible
                                    </h4>

                                    <p>
                                        Un nouveau cours d'Algorithmique a été ajouté.
                                    </p>

                                    <span class="notification-time">
                                        Il y a 1 heure
                                    </span>

                                </div>

                                <span class="notification-unread-dot"></span>

                            </div>


                            <!-- NOTIFICATION 3 -->

                            <div class="notification-item unread">

                                <div class="notification-item-icon ai">
                                    🤖
                                </div>

                                <div class="notification-content">

                                    <h4>
                                        Conseil de ton IA
                                    </h4>

                                    <p>
                                        Ton IA te recommande de revoir le chapitre 2.
                                    </p>

                                    <span class="notification-time">
                                        Il y a 2 heures
                                    </span>

                                </div>

                                <span class="notification-unread-dot"></span>

                            </div>


                            <!-- NOTIFICATION 4 - DÉJÀ LUE -->

                            <div class="notification-item">

                                <div class="notification-item-icon system">
                                    💡
                                </div>

                                <div class="notification-content">

                                    <h4>
                                        Conseil d'apprentissage
                                    </h4>

                                    <p>
                                        Pense à consulter régulièrement tes statistiques.
                                    </p>

                                    <span class="notification-time">
                                        Hier
                                    </span>

                                </div>

                            </div>

                        </div>


                        <!-- PIED -->

                        <div class="notification-footer">

                            <a href="#">
                                Voir toutes les notifications
                                <span>→</span>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     UTILISATEUR
                     ================================================= -->

                <div class="student-user">

                    <div class="user-avatar">
                        D
                    </div>

                    <div>

                        <strong>Daniella</strong>

                        <small>Étudiante</small>

                    </div>

                </div>

            </div>

        </header>


        <!-- =================================================
             BLOC EDUNOVA IA
             ================================================= -->

        <section class="ai-banner">

            <div class="ai-content">

                <div class="ai-icon">
                    🤖
                </div>


                <div class="ai-text">

                    <small>
                        EDUNOVA IA
                    </small>

                    <h2>
                        Ton apprentissage est personnalisé
                    </h2>

                    <p>
                        Ton assistant intelligent adapte les explications,
                        les exercices et les recommandations selon ton
                        profil d'apprentissage.
                    </p>

                    <a
                        href="/etudiant/profil-apprentissage"
                        class="ai-link"
                    >
                        Voir mon profil d'apprentissage →
                    </a>

                </div>

            </div>


            <div class="ai-progress">

                <strong>
                    Profil complet
                </strong>

                <div class="progress-bar">

                    <div class="progress-value"></div>

                </div>

                <span>
                    85%
                </span>

            </div>

        </section>


        <!-- =================================================
             STATISTIQUES
             ================================================= -->

        <section class="stats-grid">


            <!-- COURS -->

            <div class="stat-card">

                <div class="stat-icon blue">
                    📚
                </div>

                <div>

                    <small>
                        Cours consultés
                    </small>

                    <strong>
                        18
                    </strong>

                    <p>
                        +3 cette semaine
                    </p>

                </div>

            </div>


            <!-- EXAMENS -->

            <div class="stat-card">

                <div class="stat-icon green">
                    📝
                </div>

                <div>

                    <small>
                        Examens réalisés
                    </small>

                    <strong>
                        7
                    </strong>

                    <p>
                        5 réussis
                    </p>

                </div>

            </div>


            <!-- TEMPS -->

            <div class="stat-card">

                <div class="stat-icon yellow">
                    ⏱️
                </div>

                <div>

                    <small>
                        Temps d'étude
                    </small>

                    <strong>
                        12h 40
                    </strong>

                    <p>
                        Cette semaine
                    </p>

                </div>

            </div>


            <!-- PROGRESSION -->

            <div class="stat-card">

                <div class="stat-icon purple">
                    📈
                </div>

                <div>

                    <small>
                        Progression
                    </small>

                    <strong>
                        78%
                    </strong>

                    <p>
                        +8% ce mois
                    </p>

                </div>

            </div>

        </section>


        <!-- =================================================
             ZONE PRINCIPALE
             ================================================= -->

        <section class="dashboard-grid">


            <!-- =================================================
                 CONTINUER MES COURS
                 ================================================= -->

            <div class="dashboard-card">

                <div class="card-header">

                    <div>

                        <h2>
                            Continuer mes cours
                        </h2>

                        <p>
                            Reprends ton apprentissage là où tu t'es arrêtée.
                        </p>

                    </div>


                    <a
                        href="/etudiant/cours"
                        class="see-all"
                    >
                        Voir tous →
                    </a>

                </div>


                <!-- COURS 1 -->

                <div class="course-item">

                    <div class="course-icon">
                        💻
                    </div>

                    <div class="course-info">

                        <h3>
                            Intelligence Artificielle
                        </h3>

                        <p>
                            Introduction aux systèmes intelligents
                        </p>

                    </div>

                    <a
                        href="/etudiant/cours"
                        class="course-btn"
                    >
                        Continuer
                    </a>

                </div>


                <!-- COURS 2 -->

                <div class="course-item">

                    <div class="course-icon">
                        🗄️
                    </div>

                    <div class="course-info">

                        <h3>
                            Base de données
                        </h3>

                        <p>
                            Modélisation et gestion des données
                        </p>

                    </div>

                    <a
                        href="/etudiant/cours"
                        class="course-btn"
                    >
                        Continuer
                    </a>

                </div>


                <!-- COURS 3 -->

                <div class="course-item">

                    <div class="course-icon">
                        🌐
                    </div>

                    <div class="course-info">

                        <h3>
                            Développement Web
                        </h3>

                        <p>
                            HTML, CSS, PHP et Laravel
                        </p>

                    </div>

                    <a
                        href="/etudiant/cours"
                        class="course-btn"
                    >
                        Continuer
                    </a>

                </div>

            </div>


            <!-- =================================================
                 ACTIVITÉS RÉCENTES
                 ================================================= -->

            <div class="dashboard-card">

                <div class="card-header">

                    <div>

                        <h2>
                            Activités récentes
                        </h2>

                        <p>
                            Ton activité sur EDUNOVA.
                        </p>

                    </div>

                </div>


                <!-- ACTIVITÉ 1 -->

                <div class="activity-item">

                    <div class="activity-icon">
                        📚
                    </div>

                    <div class="activity-info">

                        <strong>
                            Cours consulté
                        </strong>

                        <small>
                            Intelligence Artificielle
                        </small>

                    </div>

                </div>


                <!-- ACTIVITÉ 2 -->

                <div class="activity-item">

                    <div class="activity-icon">
                        📝
                    </div>

                    <div class="activity-info">

                        <strong>
                            Examen terminé
                        </strong>

                        <small>
                            Base de données
                        </small>

                    </div>

                </div>


                <!-- ACTIVITÉ 3 -->

                <div class="activity-item">

                    <div class="activity-icon">
                        🤖
                    </div>

                    <div class="activity-info">

                        <strong>
                            Discussion avec ton IA
                        </strong>

                        <small>
                            Il y a 2 heures
                        </small>

                    </div>

                </div>


                <!-- ACTIVITÉ 4 -->

                <div class="activity-item">

                    <div class="activity-icon">
                        📈
                    </div>

                    <div class="activity-info">

                        <strong>
                            Progression mise à jour
                        </strong>

                        <small>
                            Il y a 1 jour
                        </small>

                    </div>

                </div>

            </div>


        </section>


    </main>

</div>


<!-- =========================================================
     JAVASCRIPT NOTIFICATIONS
     ========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const notificationBtn =
        document.getElementById("notificationBtn");

    const notificationDropdown =
        document.getElementById("notificationDropdown");

    const notificationBadge =
        document.getElementById("notificationBadge");

    const notificationHeaderText =
        document.getElementById("notificationHeaderText");

    const notificationList =
        document.getElementById("notificationList");

    const markAllBtn =
        document.getElementById("markAllBtn");


    /*
    |--------------------------------------------------------------------------
    | OUVRIR / FERMER LES NOTIFICATIONS
    |--------------------------------------------------------------------------
    */

    notificationBtn.addEventListener("click", function (event) {

        event.stopPropagation();

        const isOpen =
            notificationDropdown.classList.contains("show");

        notificationDropdown.classList.toggle("show");

        notificationBtn.setAttribute(
            "aria-expanded",
            !isOpen
        );

    });


    /*
    |--------------------------------------------------------------------------
    | EMPÊCHER LA FERMETURE EN CLIQUANT DANS LE MENU
    |--------------------------------------------------------------------------
    */

    notificationDropdown.addEventListener(
        "click",
        function (event) {

            event.stopPropagation();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | FERMER EN CLIQUANT À L'EXTÉRIEUR
    |--------------------------------------------------------------------------
    */

    document.addEventListener("click", function () {

        notificationDropdown.classList.remove("show");

        notificationBtn.setAttribute(
            "aria-expanded",
            "false"
        );

    });


    /*
    |--------------------------------------------------------------------------
    | METTRE À JOUR LE COMPTEUR
    |--------------------------------------------------------------------------
    */

    function updateNotificationCount() {

        const unreadNotifications =
            notificationList.querySelectorAll(
                ".notification-item.unread"
            );

        const count =
            unreadNotifications.length;


        /*
        |--------------------------------------------------------------------------
        | BADGE
        |--------------------------------------------------------------------------
        */

        if (count > 0) {

            notificationBadge.textContent = count;

            notificationBadge.style.display = "flex";

        } else {

            notificationBadge.style.display = "none";

        }


        /*
        |--------------------------------------------------------------------------
        | TEXTE DE L'EN-TÊTE
        |--------------------------------------------------------------------------
        */

        if (count === 0) {

            notificationHeaderText.textContent =
                "Aucune notification non lue";

        } else if (count === 1) {

            notificationHeaderText.textContent =
                "1 notification non lue";

        } else {

            notificationHeaderText.textContent =
                count + " notifications non lues";

        }

    }


    /*
    |--------------------------------------------------------------------------
    | CLIQUER SUR UNE NOTIFICATION
    |--------------------------------------------------------------------------
    */

    const notifications =
        notificationList.querySelectorAll(
            ".notification-item"
        );


    notifications.forEach(function (notification) {

        notification.addEventListener(
            "click",
            function () {

                if (
                    notification.classList.contains("unread")
                ) {

                    notification.classList.remove("unread");


                    const unreadDot =
                        notification.querySelector(
                            ".notification-unread-dot"
                        );


                    if (unreadDot) {

                        unreadDot.remove();

                    }


                    updateNotificationCount();

                }

            }
        );

    });


    /*
    |--------------------------------------------------------------------------
    | TOUT LIRE
    |--------------------------------------------------------------------------
    */

    markAllBtn.addEventListener(
        "click",
        function () {

            const unreadNotifications =
                notificationList.querySelectorAll(
                    ".notification-item.unread"
                );


            unreadNotifications.forEach(
                function (notification) {

                    notification.classList.remove(
                        "unread"
                    );


                    const unreadDot =
                        notification.querySelector(
                            ".notification-unread-dot"
                        );


                    if (unreadDot) {

                        unreadDot.remove();

                    }

                }
            );


            updateNotificationCount();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | INITIALISATION
    |--------------------------------------------------------------------------
    */

    updateNotificationCount();

});

</script>

</body>

</html>