<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Inscription</title>

    <link rel="stylesheet" href="/register.css">

</head>

<body>

<div class="register-container">

    <div class="register-box">

        <!-- LOGO -->
        <div class="logo">
            <div class="logo-icon">🎓</div>
            <h1>EDUNOVA <span>IA</span></h1>
        </div>

        <h2>Créer un compte</h2>

        <p class="subtitle">
            Rejoignez EDUNOVA IA et commencez votre parcours éducatif.
        </p>


        <!-- MESSAGE D'ERREUR -->
        @if ($errors->any())

            <div class="error-message">

                @foreach ($errors->all() as $error)

                    <p>⚠️ {{ $error }}</p>

                @endforeach

            </div>

        @endif


        <!-- FORMULAIRE -->

        <form action="/register" method="POST">

            <input
                type="hidden"
                name="_token"
                value="{{ csrf_token() }}"
            >


            <!-- NOM + PRÉNOM -->

            <div class="form-row">

                <div class="input-group">

                    <label for="nom">
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nom"
                        name="nom"
                        placeholder="Votre nom"
                        value="{{ old('nom') }}"
                        required
                    >

                </div>


                <div class="input-group">

                    <label for="prenom">
                        Prénom
                    </label>

                    <input
                        type="text"
                        id="prenom"
                        name="prenom"
                        placeholder="Votre prénom"
                        value="{{ old('prenom') }}"
                        required
                    >

                </div>

            </div>


            <!-- EMAIL -->

            <div class="input-group">

                <label for="email">
                    Adresse email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="exemple@email.com"
                    value="{{ old('email') }}"
                    required
                >

            </div>


            <!-- TYPE DE COMPTE -->

            <div class="input-group">

                <label>
                    Je suis
                </label>

                <div class="role-selection">


                    <!-- ÉTUDIANT -->

                    <label class="role-card">

                        <input
                            type="radio"
                            name="role"
                            value="etudiant"
                            {{ old('role', 'etudiant') == 'etudiant' ? 'checked' : '' }}
                            required
                        >

                        <span class="role-content">

                            <span class="role-icon">
                                👨‍🎓
                            </span>

                            <span>

                                <strong>Étudiant</strong>

                                <small>
                                    Accéder aux cours et examens
                                </small>

                            </span>

                        </span>

                    </label>


                    <!-- ENSEIGNANT -->

                    <label class="role-card">

                        <input
                            type="radio"
                            name="role"
                            value="professeur"
                            {{ old('role') == 'professeur' ? 'checked' : '' }}
                        >

                        <span class="role-content">

                            <span class="role-icon">
                                👨‍🏫
                            </span>

                            <span>

                                <strong>Enseignant</strong>

                                <small>
                                    Gérer les cours et examens
                                </small>

                            </span>

                        </span>

                    </label>

                </div>

            </div>


            <!-- MOT DE PASSE -->

            <div class="input-group">

                <label for="password">
                    Mot de passe
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Créer un mot de passe"
                    required
                >

            </div>


            <!-- CONFIRMATION -->

            <div class="input-group">

                <label for="password_confirmation">
                    Confirmer le mot de passe
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Confirmer votre mot de passe"
                    required
                >

            </div>


            <!-- BOUTON -->

            <button
                type="submit"
                class="btn-register"
            >

                Créer mon compte
                <span>→</span>

            </button>

        </form>


        <!-- CONNEXION -->

        <div class="login-link">

            <p>

                Vous avez déjà un compte ?

                <a href="/login">
                    Se connecter
                </a>

            </p>

        </div>


        <div class="security-info">

            🔒 Vos informations sont protégées.

        </div>

    </div>

</div>

</body>

</html>