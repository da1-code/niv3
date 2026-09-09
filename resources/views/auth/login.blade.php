<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Connexion</title>

    <link rel="stylesheet" href="/css/login.css">

</head>

<body>

<div class="login-container">

    <div class="login-box">

        <!-- LOGO -->

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>

            <h1>
                EDUNOVA <span>IA</span>
            </h1>

        </div>


        <!-- TITRE -->

        <h2>Bienvenue !</h2>

        <p class="subtitle">
            Connectez-vous à votre espace EDUNOVA IA.
        </p>


        <!-- MESSAGE DE SUCCÈS -->

        @if(session('success'))

            <div class="success-message">
                ✓ {{ session('success') }}
            </div>

        @endif


        <!-- ERREURS -->

        @if ($errors->any())

            <div class="error-message">

                @foreach ($errors->all() as $error)

                    <p>⚠️ {{ $error }}</p>

                @endforeach

            </div>

        @endif


        <!-- FORMULAIRE -->

        <form action="/login" method="POST">

            <input
                type="hidden"
                name="_token"
                value="{{ csrf_token() }}"
            >


            <!-- EMAIL -->

            <div class="input-group">

                <label for="email">
                    Adresse email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="exemple@email.com"
                    required
                    autofocus
                >

            </div>


            <!-- MOT DE PASSE -->

            <div class="input-group">

                <div class="password-label">

                    <label for="password">
                        Mot de passe
                    </label>

                </div>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Entrez votre mot de passe"
                    required
                >

            </div>


            <!-- CONNEXION -->

            <button
                type="submit"
                class="btn-login"
            >

                Se connecter

                <span>→</span>

            </button>

        </form>


        <!-- INSCRIPTION -->

        <div class="register-link">

            <p>

                Vous n'avez pas encore de compte ?

                <a href="/register">
                    Créer un compte
                </a>

            </p>

        </div>


        <!-- RETOUR ACCUEIL -->

        <a href="/" class="back-home">
            ← Retour à l'accueil
        </a>


        <!-- SÉCURITÉ -->

        <div class="security-info">

            🔒 Connexion sécurisée EDUNOVA IA

        </div>

    </div>

</div>

</body>

</html>