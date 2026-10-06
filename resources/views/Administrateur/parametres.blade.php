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


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <div class="logo">

            <h2>
                EDUNOVA IA
            </h2>

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



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             TOPBAR
        ================================================== -->

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



        <!-- =================================================
             MESSAGES
        ================================================== -->

        @if(session('success'))

            <div class="alert-success">

                {{ session('success') }}

            </div>

        @endif


        @if($errors->any())

            <div class="alert-error">

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        <!-- =================================================
             SECTION PARAMÈTRES
        ================================================== -->

        <section class="settings-section">


            <!-- =================================================
                 EN-TÊTE
            ================================================== -->

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



            <!-- =================================================
                 GRILLE
            ================================================== -->

            <div class="settings-grid">



                <!-- =================================================
                     INFORMATIONS ADMINISTRATEUR
                ================================================== -->

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



                    <form
                        action="{{ route('admin.modifier.compte') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="form-group">


                            <label for="name">

                                Nom complet

                            </label>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', Auth::user()->name ?? '') }}"
                                placeholder="Entrez votre nom complet"
                                required
                            >


                        </div>



                        <div class="form-group">


                            <label for="email">

                                Adresse email

                            </label>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email', Auth::user()->email ?? '') }}"
                                placeholder="admin@edunova.com"
                                required
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



                <!-- =================================================
                     SÉCURITÉ
                ================================================== -->

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



                    <form
                        action="{{ route('admin.modifier.password') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="form-group">


                            <label for="ancien_password">

                                Ancien mot de passe

                            </label>


                            <input
                                type="password"
                                id="ancien_password"
                                name="ancien_password"
                                placeholder="••••••••"
                                required
                            >


                        </div>



                        <div class="form-group">


                            <label for="nouveau_password">

                                Nouveau mot de passe

                            </label>


                            <input
                                type="password"
                                id="nouveau_password"
                                name="nouveau_password"
                                placeholder="••••••••"
                                required
                            >


                        </div>



                        <div class="form-group">


                            <label for="nouveau_password_confirmation">

                                Confirmer le mot de passe

                            </label>


                            <input
                                type="password"
                                id="nouveau_password_confirmation"
                                name="nouveau_password_confirmation"
                                placeholder="••••••••"
                                required
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



                <!-- =================================================
                     PARAMÈTRES DE LA PLATEFORME
                ================================================== -->

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



                    <form
                        action="#"
                        method="POST"
                        enctype="multipart/form-data"
                        onsubmit="return false;"
                    >


                        <div class="form-group">


                            <label for="plateforme">

                                Nom de la plateforme

                            </label>


                            <input
                                type="text"
                                id="plateforme"
                                value="EDUNOVA IA"
                            >


                        </div>



                        <div class="form-group">


                            <label for="logo">

                                Logo de la plateforme

                            </label>


                            <input
                                type="file"
                                id="logo"
                                class="file-input"
                                accept="image/*"
                            >


                        </div>



                        <button
                            type="button"
                            class="save-btn"
                            onclick="alert('Les paramètres de plateforme seront disponibles prochainement.')"
                        >

                            Sauvegarder

                        </button>


                    </form>


                </div>



                <!-- =================================================
                     NOTIFICATIONS
                ================================================== -->

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


                        <!-- EMAIL -->

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
                                id="notification_email"
                                checked
                            >


                        </label>



                        <!-- EXAMENS -->

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
                                id="notification_examens"
                                checked
                            >


                        </label>



                        <!-- COURS -->

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
                                id="notification_cours"
                            >


                        </label>


                    </div>



                    <button
                        type="button"
                        class="save-btn"
                        onclick="enregistrerNotifications()"
                    >

                        Appliquer

                    </button>


                </div>


            </div>


        </section>


    </main>


</div>



<!-- =====================================================
     JAVASCRIPT NOTIFICATIONS
====================================================== -->

<script>

function enregistrerNotifications()
{
    const email =
        document.getElementById('notification_email').checked;

    const examens =
        document.getElementById('notification_examens').checked;

    const cours =
        document.getElementById('notification_cours').checked;


    localStorage.setItem(
        'edunova_notification_email',
        email
    );


    localStorage.setItem(
        'edunova_notification_examens',
        examens
    );


    localStorage.setItem(
        'edunova_notification_cours',
        cours
    );


    alert(
        'Les préférences de notification ont été enregistrées.'
    );
}


document.addEventListener(
    'DOMContentLoaded',
    function()
    {

        const email =
            localStorage.getItem(
                'edunova_notification_email'
            );


        const examens =
            localStorage.getItem(
                'edunova_notification_examens'
            );


        const cours =
            localStorage.getItem(
                'edunova_notification_cours'
            );


        if (email !== null) {

            document.getElementById(
                'notification_email'
            ).checked = email === 'true';

        }


        if (examens !== null) {

            document.getElementById(
                'notification_examens'
            ).checked = examens === 'true';

        }


        if (cours !== null) {

            document.getElementById(
                'notification_cours'
            ).checked = cours === 'true';

        }

    }
);

</script>


</body>

</html>