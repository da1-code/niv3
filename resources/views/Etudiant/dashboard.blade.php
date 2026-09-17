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


        <!-- PROFIL -->

        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div>

                <strong>
                    {{ Auth::user()->prenom }}
                </strong>

                <small>
                    Étudiant(e)
                </small>

            </div>

        </div>


        <!-- MENU -->

        <nav class="menu">


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

                    Bonjour {{ Auth::user()->prenom }} 👋

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
                            0
                        </span>

                    </button>



                    <!-- MENU NOTIFICATIONS -->

                    <div
                        class="notification-dropdown"
                        id="notificationDropdown"
                    >


                        <div class="notification-header">

                            <div>

                                <h3>
                                    Notifications
                                </h3>

                                <span id="notificationHeaderText">
                                    Aucune notification non lue
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



                        <div
                            class="notification-list"
                            id="notificationList"
                        >


                            <!-- NOTIFICATION TEMPORAIRE -->

                            <div class="notification-item">

                                <div class="notification-item-icon system">
                                    💡
                                </div>

                                <div class="notification-content">

                                    <h4>
                                        Bienvenue sur EDUNOVA
                                    </h4>

                                    <p>
                                        Consulte tes cours et ton espace d'apprentissage.
                                    </p>

                                    <span class="notification-time">
                                        Maintenant
                                    </span>

                                </div>

                            </div>


                        </div>



                        <div class="notification-footer">

                            <a href="/etudiant/notifications">

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

                        {{ strtoupper(substr(Auth::user()->prenom, 0, 1)) }}

                    </div>


                    <div>

                        <strong>

                            {{ Auth::user()->prenom }}

                        </strong>

                        <small>

                            Étudiant(e)

                        </small>

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
                        href="/etudiant/profil_apprentissage"
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

                    <div
                        class="progress-value"
                        style="width: 0%;"
                    ></div>

                </div>


                <span>
                    0%
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
                        Cours disponibles
                    </small>


                    <strong>

                        {{ isset($cours) ? $cours->count() : 0 }}

                    </strong>


                    <p>
                        Sur EDUNOVA
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
                        Examens disponibles
                    </small>


                    <strong>

                        {{ isset($examens) ? $examens->count() : 0 }}

                    </strong>


                    <p>
                        Sur EDUNOVA
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
                        0h 00
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
                        0%
                    </strong>


                    <p>
                        Cette semaine
                    </p>

                </div>


            </div>


        </section>



        <!-- =================================================
             ZONE PRINCIPALE
             ================================================= -->

        <section class="dashboard-grid">



            <!-- =================================================
                 COURS
                 ================================================= -->

            <div class="dashboard-card">


                <div class="card-header">


                    <div>

                        <h2>
                            Mes cours
                        </h2>

                        <p>
                            Les cours disponibles sur EDUNOVA.
                        </p>

                    </div>


                    <a
                        href="/etudiant/cours"
                        class="see-all"
                    >

                        Voir tous →

                    </a>


                </div>



                <!-- =================================================
                     LISTE DES COURS
                     ================================================= -->

                @if(isset($cours) && $cours->count() > 0)


                    @foreach($cours->take(3) as $cour)


                        <div class="course-item">


                            <div class="course-icon">
                                📚
                            </div>


                            <div class="course-info">


                                <h3>

                                    {{ $cour->titre }}

                                </h3>


                                <p>

                                    {{ $cour->description }}

                                </p>


                            </div>


                            <a
                                href="/etudiant/cours"
                                class="course-btn"
                            >

                                Consulter

                            </a>


                        </div>


                    @endforeach


                @else


                    <div class="course-item">


                        <div class="course-icon">
                            📚
                        </div>


                        <div class="course-info">


                            <h3>
                                Aucun cours disponible
                            </h3>


                            <p>

                                Aucun cours n'a encore été publié.

                            </p>


                        </div>


                    </div>


                @endif


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



                <!-- ACTIVITÉ COURS -->

                @if(isset($cours) && $cours->count() > 0)


                    @foreach($cours->take(4) as $cour)


                        <div class="activity-item">


                            <div class="activity-icon">
                                📚
                            </div>


                            <div class="activity-info">


                                <strong>
                                    Nouveau cours
                                </strong>


                                <small>

                                    {{ $cour->titre }}

                                </small>


                            </div>


                        </div>


                    @endforeach


                @else


                    <div class="activity-item">


                        <div class="activity-icon">
                            💡
                        </div>


                        <div class="activity-info">


                            <strong>
                                Aucune activité
                            </strong>


                            <small>
                                Ton activité apparaîtra ici.
                            </small>


                        </div>


                    </div>


                @endif



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
    | COMPTEUR DES NOTIFICATIONS
    |--------------------------------------------------------------------------
    */

    function updateNotificationCount() {


        const unreadNotifications =
            notificationList.querySelectorAll(
                ".notification-item.unread"
            );


        const count =
            unreadNotifications.length;



        if (count > 0) {


            notificationBadge.textContent =
                count;


            notificationBadge.style.display =
                "flex";


        } else {


            notificationBadge.style.display =
                "none";


        }



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