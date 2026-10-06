<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paramètres - EDUNOVA IA</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
    <link rel="stylesheet" href="/etudiant/parametres.css">

</head>


<body>

<div class="student-layout">


    <!-- ===================================================== -->
    <!-- SIDEBAR -->
    <!-- ===================================================== -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="logo-area">

            <div class="logo-icon">
                E
            </div>

            <div class="logo-text">

                <h2>
                    EDUNOVA
                </h2>

                <span>
                    IA Éducative
                </span>

            </div>

        </div>



        <!-- MENU -->

        <nav class="menu">


            <a href="/etudiant/dashboard">

                <span>🏠</span>

                Tableau de bord

            </a>



            <a href="/etudiant/profil">

                <span>👤</span>

                Mon profil

            </a>



            <a href="/etudiant/profil-apprentissage">

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



            <a href="/etudiant/parametres" class="active">

                <span>⚙️</span>

                Paramètres

            </a>

        </nav>



        <!-- ================================================= -->
        <!-- UTILISATEUR CONNECTÉ -->
        <!-- ================================================= -->

        <div class="sidebar-footer">

            <div class="user-mini">


                <div class="user-avatar">

                    {{ strtoupper(substr($etudiant->name, 0, 1)) }}

                </div>


                <div class="user-info">

                    <strong>

                       
                        {{ $etudiant->name }}

                    </strong>

                    <span>
                        Étudiant
                    </span>

                </div>

            </div>

        </div>

    </aside>



    <!-- ===================================================== -->
    <!-- CONTENU PRINCIPAL -->
    <!-- ===================================================== -->

    <main class="main-content">


        <!-- ================================================= -->
        <!-- TOPBAR -->
        <!-- ================================================= -->

        <header class="topbar">


            <div class="topbar-title">

                <h1>
                    Paramètres
                </h1>

                <p>
                    Personnalise ton expérience sur EDUNOVA.
                </p>

            </div>



            <div class="topbar-actions">


                <button class="notification-btn">

                    🔔

                    <span class="notification-dot"></span>

                </button>



                <!-- UTILISATEUR RÉEL -->

                <div class="profile-mini">


                    <div class="profile-avatar">

                        {{ strtoupper(substr($etudiant->name, 0, 1)) }}

                    </div>


                    <div>

                        <strong>

                          
                            {{ $etudiant->name }}

                        </strong>

                        <span>
                            Étudiant
                        </span>

                    </div>

                </div>

            </div>

        </header>



        <!-- ===================================================== -->
        <!-- PAGE PARAMÈTRES -->
        <!-- ===================================================== -->

        <section class="parametres-page">


            <!-- ================================================= -->
            <!-- INTRODUCTION -->
            <!-- ================================================= -->

            <div class="settings-intro">


                <div>

                    <span class="section-badge">

                        ⚙️ CONFIGURATION

                    </span>


                    <h2>

                        Gère ton compte et tes préférences

                    </h2>


                    <p>

                        Modifie tes informations, configure tes notifications
                        et contrôle les préférences de ton espace EDUNOVA.

                    </p>

                </div>



                <div class="settings-intro-icon">

                    ⚙️

                </div>

            </div>



            <!-- ================================================= -->
            <!-- INFORMATIONS DU COMPTE -->
            <!-- ================================================= -->

            <div class="settings-section">


                <div class="settings-section-header">


                    <div class="settings-section-icon">

                        👤

                    </div>


                    <div>

                        <h2>

                            Informations du compte

                        </h2>


                        <p>

                            Les informations associées à ton compte étudiant.

                        </p>

                    </div>

                </div>



                <!-- FORMULAIRE -->

                <form
    action="{{ route('etudiant.parametres.update') }}"
    method="POST"
>
    @csrf
    @method('PUT')


                    <!-- PHOTO -->

                    <div class="profile-settings">


                        <div class="large-avatar">

                            {{ strtoupper(substr($etudiant->name, 0, 1)) }}

                        </div>


                        <div class="avatar-info">


                            <strong>

                                Profil de
                                {{ $etudiant->name }}

                            </strong>


                            <p>

                                Ton profil utilise actuellement les
                                informations enregistrées dans EDUNOVA.

                            </p>


                            <button
                                type="button"
                                class="secondary-button"
                            >

                                Modifier la photo

                            </button>

                        </div>

                    </div>



                    <!-- ================================================= -->
                    <!-- CHAMPS RÉELS DE LA TABLE USERS -->
                    <!-- ================================================= -->

                    <div class="form-grid">


                        <!-- PRÉNOM -->

                        <div class="form-group">

                            <label for="prenom">

                             Nom

                            </label>


                            <input
                                type="text"
                                id="prenom"
                                name="name"
                                value="{{ $etudiant->name }}"
                            >

                        </div>



                        <!-- NOM -->

                        <div class="form-group">

    <label for="idclasse">
        Classe
    </label>

    <select
        id="idclasse"
        name="idclasse"
        required
    >

        <option value="">
            -- Sélectionner une classe --
        </option>

        @foreach($classes as $classe)

            <option
                value="{{ $classe->id }}"
                {{ $classeEtudiant && $classeEtudiant->idclasse == $classe->id ? 'selected' : '' }}
            >

                {{ $classe->nom }}

                @if($classe->serie)
                    - Série {{ $classe->serie }}
                @endif

            </option>

        @endforeach

    </select>

</div>



                        <!-- EMAIL -->

                        <div class="form-group full-width">

                            <label for="email">

                                Adresse e-mail

                            </label>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ $etudiant->email }}"
                            >

                        </div>



                        <!-- ROLE -->

                        <div class="form-group">

                            <label>

                                Rôle

                            </label>


                            <input
                                type="text"
                                value="{{ ucfirst($etudiant->role) }}"
                                readonly
                            >

                        </div>



                        <!-- STATUT -->

                        <div class="form-group">

                            <label>

                                Statut du compte

                            </label>


                            <input
                                type="text"
                                value="{{ $etudiant->actif ? 'Actif' : 'Inactif' }}"
                                readonly
                            >

                        </div>



                        <!-- IDENTIFIANT -->

                        <div class="form-group">

                            <label>

                                Identifiant

                            </label>


                            <input
                                type="text"
                                value="#{{ $etudiant->id }}"
                                readonly
                            >

                        </div>



                        <!-- DATE INSCRIPTION -->

                        <div class="form-group">

                            <label>

                                Date d'inscription

                            </label>


                            <input
                                type="text"
                                value="{{ $etudiant->created_at ? $etudiant->created_at->format('d/m/Y') : 'Non disponible' }}"
                                readonly
                            >

                        </div>

                    </div>



                    <!-- BOUTONS -->

                    <div class="form-actions">


                        <button
                            type="reset"
                            class="cancel-button"
                        >

                            Annuler

                        </button>


                        <button
                            type="submit"
                            class="save-button"
                        >

                            Enregistrer les modifications

                        </button>

                    </div>

                </form>

            </div>



            <!-- ================================================= -->
            <!-- PRÉFÉRENCES D'APPRENTISSAGE -->
            <!-- ================================================= -->

            <div class="settings-section">


                <div class="settings-section-header">


                    <div class="settings-section-icon learning-icon">

                        🧠

                    </div>


                    <div>

                        <h2>

                            Préférences d'apprentissage

                        </h2>


                        <p>

                            Configure la manière dont EDUNOVA t'accompagne.

                        </p>

                    </div>

                </div>



                <div class="preference-list">


                    <!-- STYLE -->

                    <div class="preference-item">


                        <div class="preference-left">


                            <div class="preference-icon">

                                🎨

                            </div>


                            <div>

                                <strong>

                                    Style d'apprentissage

                                </strong>


                                <span>

                                    Détermine la manière dont l'IA présente
                                    les informations.

                                </span>

                            </div>

                        </div>


                        <select
                            class="settings-select"
                            name="style_apprentissage"
                        >

                            <option selected>
                                Visuel
                            </option>

                            <option>
                                Auditif
                            </option>

                            <option>
                                Lecture / Écriture
                            </option>

                            <option>
                                Pratique
                            </option>

                        </select>

                    </div>



                    <!-- MOMENT D'ÉTUDE -->

                    <div class="preference-item">


                        <div class="preference-left">


                            <div class="preference-icon">

                                ⏰

                            </div>


                            <div>

                                <strong>

                                    Moment d'étude préféré

                                </strong>


                                <span>

                                    Utilisé pour personnaliser tes
                                    recommandations.

                                </span>

                            </div>

                        </div>


                        <select
                            class="settings-select"
                            name="moment_etude"
                        >

                            <option>
                                Matin
                            </option>

                            <option selected>
                                Après-midi
                            </option>

                            <option>
                                Soir
                            </option>

                            <option>
                                Variable
                            </option>

                        </select>

                    </div>



                    <!-- OBJECTIF -->

                    <div class="preference-item">


                        <div class="preference-left">


                            <div class="preference-icon">

                                🎯

                            </div>


                            <div>

                                <strong>

                                    Objectif de moyenne

                                </strong>


                                <span>

                                    Objectif utilisé pour suivre ta progression.

                                </span>

                            </div>

                        </div>


                        <select
                            class="settings-select"
                            name="objectif"
                        >

                            <option>
                                12 / 20
                            </option>

                            <option>
                                14 / 20
                            </option>

                            <option selected>
                                16 / 20
                            </option>

                            <option>
                                18 / 20
                            </option>

                        </select>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- NOTIFICATIONS -->
            <!-- ================================================= -->

            <div class="settings-section">


                <div class="settings-section-header">


                    <div class="settings-section-icon notification-icon">

                        🔔

                    </div>


                    <div>

                        <h2>

                            Notifications

                        </h2>


                        <p>

                            Choisis les notifications que tu souhaites recevoir.

                        </p>

                    </div>

                </div>



                <div class="notification-list">


                    <div class="notification-setting">


                        <div>

                            <strong>

                                Nouveaux examens

                            </strong>


                            <span>

                                Être informé lorsqu'un nouvel examen
                                est disponible.

                            </span>

                        </div>


                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                            >

                            <span class="slider"></span>

                        </label>

                    </div>



                    <div class="notification-setting">


                        <div>

                            <strong>

                                Nouveaux cours

                            </strong>


                            <span>

                                Recevoir une notification lorsqu'un
                                nouveau cours est ajouté.

                            </span>

                        </div>


                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                            >

                            <span class="slider"></span>

                        </label>

                    </div>



                    <div class="notification-setting">


                        <div>

                            <strong>

                                Rappels d'étude

                            </strong>


                            <span>

                                Recevoir des rappels pour maintenir
                                ta progression.

                            </span>

                        </div>


                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                            >

                            <span class="slider"></span>

                        </label>

                    </div>



                    <div class="notification-setting">


                        <div>

                            <strong>

                                Résultats d'examens

                            </strong>


                            <span>

                                Être informé lorsque les résultats
                                sont disponibles.

                            </span>

                        </div>


                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- SÉCURITÉ -->
            <!-- ================================================= -->

            <div class="settings-section">


                <div class="settings-section-header">


                    <div class="settings-section-icon security-icon">

                        🔒

                    </div>


                    <div>

                        <h2>

                            Sécurité

                        </h2>


                        <p>

                            Protège ton compte EDUNOVA.

                        </p>

                    </div>

                </div>



                <!-- MOT DE PASSE -->

                <div class="security-item">


                    <div>

                        <strong>

                            Mot de passe

                        </strong>


                        <span>

                            Modifie ton mot de passe pour protéger
                            ton compte.

                        </span>

                    </div>


                    <button
                        type="button"
                        class="secondary-button"
                    >

                        Modifier

                    </button>

                </div>



                <!-- DÉCONNEXION -->

                <div class="security-item">


                    <div>

                        <strong>

                            Déconnexion

                        </strong>


                        <span>

                            Termine ta session actuelle sur cet appareil.

                        </span>

                    </div>


                    <a
                        href="/logout"
                        class="logout-button"
                    >

                        Se déconnecter

                    </a>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- INFORMATION -->
            <!-- ================================================= -->

            <div class="settings-info">


                <div class="settings-info-icon">

                    💡

                </div>


                <div>


                    <strong>

                        Conseil EDUNOVA

                    </strong>


                    <p>

                        Ton profil d'apprentissage permet à EDUNOVA
                        de mieux adapter les cours, les exercices et
                        les recommandations à ta manière d'apprendre.

                    </p>

                </div>

            </div>


        </section>

    </main>

</div>


</body>

</html>