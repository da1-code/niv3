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


    <!-- ========================================================= -->
    <!-- SIDEBAR -->
    <!-- ========================================================= -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>

            <div class="logo-text">

                <h2>
                    EDUNOVA
                </h2>

                <span>
                    Plateforme éducative
                </span>

            </div>

        </div>



        <!-- MINI PROFIL -->

        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div class="profile-mini-info">

                <strong>
                    {{ $etudiant->prenom }} {{ $etudiant->nom }}
                </strong>

                <small>
                    Étudiant
                </small>

            </div>

        </div>



        <!-- MENU -->

        <nav class="menu">


            <a href="/etudiant/dashboard">

                <span>🏠</span>

                <label>
                    Tableau de bord
                </label>

            </a>



            <a href="/etudiant/profil" class="active">

                <span>👤</span>

                <label>
                    Mon profil
                </label>

            </a>



            <a href="/etudiant/profil-apprentissage">

                <span>🧠</span>

                <label>
                    Profil d'apprentissage
                </label>

            </a>



            <a href="/etudiant/cours">

                <span>📚</span>

                <label>
                    Mes cours
                </label>

            </a>



            <a href="/etudiant/examens">

                <span>📝</span>

                <label>
                    Examens
                </label>

            </a>



            <a href="/etudiant/ia">

                <span>🤖</span>

                <label>
                    Mon IA
                </label>

            </a>



            <a href="/etudiant/statistiques">

                <span>📊</span>

                <label>
                    Mes statistiques
                </label>

            </a>



            <a href="/etudiant/parametres">

                <span>⚙️</span>

                <label>
                    Paramètres
                </label>

            </a>

        </nav>



        <!-- DECONNEXION -->

        <div class="sidebar-bottom">

            <a href="/logout" class="logout">

                <span>
                    🚪
                </span>

                <label>
                    Déconnexion
                </label>

            </a>

        </div>

    </aside>



    <!-- ========================================================= -->
    <!-- CONTENU PRINCIPAL -->
    <!-- ========================================================= -->

    <main class="main-content">


        <!-- ===================================================== -->
        <!-- HEADER -->
        <!-- ===================================================== -->

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


                <!-- NOTIFICATION -->

                <a href="#notifications" class="notification">

                    🔔

                    <span></span>

                </a>



                <!-- UTILISATEUR -->

                <div class="student-user">

                    <div class="user-avatar">

                        {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

                    </div>


                    <div class="student-user-info">

                        <strong>

                            {{ $etudiant->prenom }}
                            {{ $etudiant->nom }}

                        </strong>

                        <small>
                            Étudiant
                        </small>

                    </div>

                </div>

            </div>

        </header>



        <!-- ===================================================== -->
        <!-- PROFIL -->
        <!-- ===================================================== -->

        <section class="profile-layout">


            <!-- ================================================= -->
            <!-- INFORMATIONS PERSONNELLES -->
            <!-- ================================================= -->

            <div class="profile-card">


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

                        {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}

                    </div>



                    <div class="photo-info">


                        <h3>

                            {{ $etudiant->prenom }}
                            {{ $etudiant->nom }}

                        </h3>


                        <p>
                            Compte étudiant EDUNOVA
                        </p>


                        <button class="photo-btn">

                            📷 Modifier la photo

                        </button>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- INFORMATIONS BD -->
                <!-- ================================================= -->

                <div class="information-grid">


                    <!-- NOM -->

                    <div class="information-item">

                        <label>
                            Nom
                        </label>

                        <strong>

                            {{ $etudiant->nom }}

                        </strong>

                    </div>



                    <!-- PRENOM -->

                    <div class="information-item">

                        <label>
                            Prénom
                        </label>

                        <strong>

                            {{ $etudiant->prenom }}

                        </strong>

                    </div>



                    <!-- EMAIL -->

                    <div class="information-item">

                        <label>
                            Adresse email
                        </label>

                        <strong>

                            {{ $etudiant->email }}

                        </strong>

                    </div>



                    <!-- ROLE -->

                    <div class="information-item">

                        <label>
                            Rôle
                        </label>

                        <strong>

                            {{ ucfirst($etudiant->role) }}

                        </strong>

                    </div>



                    <!-- STATUT -->

                    <div class="information-item">

                        <label>
                            Statut du compte
                        </label>

                        <strong>

                            @if($etudiant->actif)

                                Actif

                            @else

                                Inactif

                            @endif

                        </strong>

                    </div>



                    <!-- DATE INSCRIPTION -->

                    <div class="information-item">

                        <label>
                            Date d'inscription
                        </label>

                        <strong>

                            {{ $etudiant->created_at
                                ? $etudiant->created_at->format('d/m/Y')
                                : 'Non disponible'
                            }}

                        </strong>

                    </div>



                    <!-- ID -->

                    <div class="information-item">

                        <label>
                            Identifiant
                        </label>

                        <strong>

                            #{{ $etudiant->id }}

                        </strong>

                    </div>



                    <!-- COURS DISPONIBLES -->

                    <div class="information-item">

                        <label>
                            Cours disponibles
                        </label>

                        <strong>

                            {{ $nombreCours }}

                        </strong>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- NOTIFICATIONS / ACTIVITÉS RÉELLES -->
            <!-- ================================================= -->

            <div class="notifications-card" id="notifications">


                <div class="card-header">

                    <div>

                        <h2>
                            Activités récentes 🔔
                        </h2>

                        <p>
                            Les dernières informations enregistrées sur EDUNOVA.
                        </p>

                    </div>


                    <span class="notification-count">

                        {{ $nombreCours + $nombreExamens }} éléments

                    </span>

                </div>



                <!-- ============================================= -->
                <!-- COURS RÉCENTS -->
                <!-- ============================================= -->

                @forelse($coursRecents as $cours)

                    <div class="notification-item unread">


                        <div class="notification-icon blue">
                            📚
                        </div>


                        <div class="notification-content">

                            <strong>

                                Nouveau cours disponible

                            </strong>


                            <p>

                                {{ $cours->titre ?? 'Un nouveau cours a été ajouté.' }}

                            </p>


                            <small>

                                {{ $cours->created_at
                                    ? $cours->created_at->diffForHumans()
                                    : 'Date non disponible'
                                }}

                            </small>

                        </div>

                    </div>

                @empty

                    <div class="notification-item">

                        <div class="notification-icon blue">
                            📚
                        </div>

                        <div class="notification-content">

                            <strong>
                                Aucun cours
                            </strong>

                            <p>
                                Aucun cours n'est actuellement enregistré.
                            </p>

                        </div>

                    </div>

                @endforelse



                <!-- ============================================= -->
                <!-- EXAMENS RÉCENTS -->
                <!-- ============================================= -->

                @forelse($examensRecents as $examen)

                    <div class="notification-item unread">


                        <div class="notification-icon green">
                            📝
                        </div>


                        <div class="notification-content">

                            <strong>

                                Nouvel examen disponible

                            </strong>


                            <p>

                                {{ $examen->titre ?? 'Un nouvel examen a été ajouté.' }}

                            </p>


                            <small>

                                {{ $examen->created_at
                                    ? $examen->created_at->diffForHumans()
                                    : 'Date non disponible'
                                }}

                            </small>

                        </div>

                    </div>

                @empty

                    <div class="notification-item">

                        <div class="notification-icon green">
                            📝
                        </div>

                        <div class="notification-content">

                            <strong>
                                Aucun examen
                            </strong>

                            <p>
                                Aucun examen n'est actuellement enregistré.
                            </p>

                        </div>

                    </div>

                @endforelse



                <button class="all-notifications">

                    Voir les cours et examens →

                </button>

            </div>

        </section>



        <!-- ===================================================== -->
        <!-- RESUME COMPTE -->
        <!-- ===================================================== -->

        <section class="account-summary">


            <!-- STATUT -->

            <div class="summary-item">


                <div class="summary-icon blue">
                    🎓
                </div>


                <div>

                    <strong>

                        @if($etudiant->actif)

                            Étudiant actif

                        @else

                            Compte inactif

                        @endif

                    </strong>


                    <small>

                        Statut enregistré dans la base de données

                    </small>

                </div>

            </div>



            <!-- COURS -->

            <div class="summary-item">


                <div class="summary-icon green">
                    📚
                </div>


                <div>

                    <strong>

                        {{ $nombreCours }} cours

                    </strong>


                    <small>

                        Cours actuellement disponibles

                    </small>

                </div>

            </div>



            <!-- EXAMENS -->

            <div class="summary-item">


                <div class="summary-icon purple">
                    📝
                </div>


                <div>

                    <strong>

                        {{ $nombreExamens }} examens

                    </strong>


                    <small>

                        Examens actuellement disponibles

                    </small>

                </div>

            </div>


        </section>


    </main>

</div>


</body>

</html>