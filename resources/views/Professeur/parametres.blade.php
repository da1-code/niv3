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
         SIDEBAR
    ====================================================== -->

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
                <a href="/prof/etudiants">
                    👨‍🎓 Étudiants
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

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="logout-button"
                    >
                        🚪 Déconnexion
                    </button>

                </form>

            </li>

        </ul>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">

        <div class="settings-container">


            <!-- =================================================
                 EN-TÊTE
            ================================================== -->

            <div class="page-header">

                <h2>
                    ⚙️ Paramètres
                </h2>

                <p>
                    Gérez votre compte et vos préférences enseignant EDUNOVA IA.
                </p>

            </div>



            <!-- =================================================
                 MESSAGE DE SUCCÈS
            ================================================== -->

            @if(session('success'))

                <div class="success-message">

                    ✅ {{ session('success') }}

                </div>

            @endif



            <!-- =================================================
                 MESSAGES D'ERREUR
            ================================================== -->

            @if($errors->any())

                <div class="error-message">

                    <strong>
                        ⚠️ Une erreur est survenue
                    </strong>

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
                 GRILLE DES PARAMÈTRES
            ================================================== -->

            <div class="settings-grid">


                <!-- =================================================
                     COMPTE
                ================================================== -->

                <div class="settings-card">

                    <h3>
                        👤 Compte
                    </h3>

                    <p class="card-description">
                        Modifiez vos informations personnelles.
                    </p>


                    <form
                        method="POST"
                        action="{{ route('prof.parametres.compte') }}"
                    >

                        @csrf

                        @method('PUT')


                        <label for="name">
                            Nom complet
                        </label>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            required
                        >

                        @error('name')

                            <small class="field-error">
                                {{ $message }}
                            </small>

                        @enderror


                        <label for="email">
                            Adresse email
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            required
                        >

                        @error('email')

                            <small class="field-error">
                                {{ $message }}
                            </small>

                        @enderror


                        <button type="submit">
                            Enregistrer
                        </button>

                    </form>

                </div>



                <!-- =================================================
                     SÉCURITÉ
                ================================================== -->

                <div class="settings-card">

                    <h3>
                        🔒 Sécurité
                    </h3>

                    <p class="card-description">
                        Modifiez votre mot de passe.
                    </p>


                    <form
                        method="POST"
                        action="{{ route('prof.parametres.password') }}"
                    >

                        @csrf

                        @method('PUT')


                        <label for="ancien_password">
                            Ancien mot de passe
                        </label>

                        <input
                            id="ancien_password"
                            type="password"
                            name="ancien_password"
                            required
                        >

                        @error('ancien_password')

                            <small class="field-error">
                                {{ $message }}
                            </small>

                        @enderror


                        <label for="nouveau_password">
                            Nouveau mot de passe
                        </label>

                        <input
                            id="nouveau_password"
                            type="password"
                            name="nouveau_password"
                            required
                        >

                        @error('nouveau_password')

                            <small class="field-error">
                                {{ $message }}
                            </small>

                        @enderror


                        <label for="nouveau_password_confirmation">
                            Confirmer le mot de passe
                        </label>

                        <input
                            id="nouveau_password_confirmation"
                            type="password"
                            name="nouveau_password_confirmation"
                            required
                        >


                        <button type="submit">
                            Modifier le mot de passe
                        </button>

                    </form>

                </div>



                <!-- =================================================
                     NOTIFICATIONS
                ================================================== -->

                <div class="settings-card">

                    <h3>
                        🔔 Notifications
                    </h3>

                    <p class="card-description">
                        Gérez les notifications de votre espace.
                    </p>


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


                    <button
                        type="button"
                        onclick="alert('La sauvegarde des notifications sera activée avec le module de notifications.')"
                    >
                        Sauvegarder
                    </button>

                </div>



                <!-- =================================================
                     APPARENCE
                ================================================== -->

                <div class="settings-card">

                    <h3>
                        🎨 Apparence
                    </h3>

                    <p class="card-description">
                        Choisissez l'apparence de votre espace.
                    </p>


                    <label class="checkbox-label">

                        <input
                            type="radio"
                            name="theme"
                            value="clair"
                            id="theme-clair"
                        >

                        <span>
                            Mode clair
                        </span>

                    </label>


                    <label class="checkbox-label">

                        <input
                            type="radio"
                            name="theme"
                            value="sombre"
                            id="theme-sombre"
                        >

                        <span>
                            Mode sombre
                        </span>

                    </label>


                    <button
                        type="button"
                        id="appliquer-theme"
                    >
                        Appliquer
                    </button>

                </div>


            </div>

        </div>

    </main>



    <!-- =====================================================
         JAVASCRIPT
         GESTION DU THÈME
    ====================================================== -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const themeClair =
                document.getElementById('theme-clair');

            const themeSombre =
                document.getElementById('theme-sombre');

            const boutonTheme =
                document.getElementById('appliquer-theme');


            /*
            |-----------------------------------------------------
            | RÉCUPÉRATION DU THÈME
            |-----------------------------------------------------
            */

            const theme =
                localStorage.getItem('edunova_theme');


            /*
            |-----------------------------------------------------
            | APPLICATION AU CHARGEMENT
            |-----------------------------------------------------
            */

            if (theme === 'sombre') {

                document.documentElement.classList.add('dark-mode');

                themeSombre.checked = true;

            } else {

                document.documentElement.classList.remove('dark-mode');

                themeClair.checked = true;

            }


            /*
            |-----------------------------------------------------
            | BOUTON APPLIQUER
            |-----------------------------------------------------
            */

            boutonTheme.addEventListener('click', function () {

                if (themeSombre.checked) {

                    document.documentElement.classList.add('dark-mode');

                    localStorage.setItem(
                        'edunova_theme',
                        'sombre'
                    );

                } else {

                    document.documentElement.classList.remove('dark-mode');

                    localStorage.setItem(
                        'edunova_theme',
                        'clair'
                    );

                }

            });

        });

    </script>


</body>

</html>