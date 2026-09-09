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

    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}
    <aside class="sidebar">

        <div class="logo-area">

            <div class="logo-icon">
                E
            </div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>IA Éducative</span>
            </div>

        </div>


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


        <div class="sidebar-footer">

            <div class="user-mini">

                <div class="user-avatar">
                    D
                </div>

                <div class="user-info">
                    <strong>Daniella</strong>
                    <span>Étudiante</span>
                </div>

            </div>

        </div>

    </aside>


    {{-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== --}}
    <main class="main-content">

        {{-- TOPBAR --}}
        <header class="topbar">

            <div class="topbar-title">

                <h1>Paramètres</h1>

                <p>
                    Personnalise ton expérience sur EDUNOVA.
                </p>

            </div>


            <div class="topbar-actions">

                <button class="notification-btn">
                    🔔
                    <span class="notification-dot"></span>
                </button>


                <div class="profile-mini">

                    <div class="profile-avatar">
                        D
                    </div>

                    <div>
                        <strong>Daniella</strong>
                        <span>Étudiante</span>
                    </div>

                </div>

            </div>

        </header>


        {{-- =====================================================
             PAGE PARAMÈTRES
        ====================================================== --}}
        <section class="parametres-page">


            {{-- INTRODUCTION --}}
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


            {{-- =================================================
                 INFORMATIONS DU COMPTE
            ================================================== --}}
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


                <form class="settings-form">

                    @csrf

                    <div class="profile-settings">

                        <div class="large-avatar">
                            D
                        </div>

                        <div class="avatar-info">

                            <strong>
                                Photo de profil
                            </strong>

                            <p>
                                Cette photo est utilisée dans ton espace étudiant.
                            </p>

                            <button type="button" class="secondary-button">
                                Modifier la photo
                            </button>

                        </div>

                    </div>


                    <div class="form-grid">

                        <div class="form-group">

                            <label for="prenom">
                                Prénom
                            </label>

                            <input
                                type="text"
                                id="prenom"
                                name="prenom"
                                value="Daniella"
                            >

                        </div>


                        <div class="form-group">

                            <label for="nom">
                                Nom
                            </label>

                            <input
                                type="text"
                                id="nom"
                                name="nom"
                                value="Étudiante"
                            >

                        </div>


                        <div class="form-group full-width">

                            <label for="email">
                                Adresse e-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="daniella@example.com"
                            >

                        </div>

                    </div>


                    <div class="form-actions">

                        <button type="reset" class="cancel-button">
                            Annuler
                        </button>

                        <button type="submit" class="save-button">
                            Enregistrer les modifications
                        </button>

                    </div>

                </form>

            </div>


            {{-- =================================================
                 PRÉFÉRENCES D'APPRENTISSAGE
            ================================================== --}}
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

                        <select class="settings-select">

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
                                    Utilisé pour personnaliser tes recommandations.
                                </span>

                            </div>

                        </div>

                        <select class="settings-select">

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

                        <select class="settings-select">

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


            {{-- =================================================
                 NOTIFICATIONS
            ================================================== --}}
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
                                Être informée lorsqu'un nouvel examen est disponible.
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
                                Recevoir une notification lorsqu'un nouveau cours
                                est ajouté.
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
                                Recevoir des rappels pour maintenir ta progression.
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
                                Être informée lorsque les résultats sont disponibles.
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


            {{-- =================================================
                 SÉCURITÉ
            ================================================== --}}
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


                <div class="security-item">

                    <div>

                        <strong>
                            Mot de passe
                        </strong>

                        <span>
                            Modifie régulièrement ton mot de passe pour
                            protéger ton compte.
                        </span>

                    </div>

                    <button type="button" class="secondary-button">
                        Modifier
                    </button>

                </div>


                <div class="security-item">

                    <div>

                        <strong>
                            Déconnexion
                        </strong>

                        <span>
                            Termine ta session actuelle sur cet appareil.
                        </span>

                    </div>

                    <a href="/" class="logout-button">
                        Se déconnecter
                    </a>

                </div>

            </div>


            {{-- =================================================
                 ZONE D'INFORMATION
            ================================================== --}}
            <div class="settings-info">

                <div class="settings-info-icon">
                    💡
                </div>

                <div>

                    <strong>
                        Conseil EDUNOVA
                    </strong>

                    <p>
                        Ton profil d'apprentissage permet à EDUNOVA de mieux
                        adapter les cours, les exercices et les recommandations
                        à ta manière d'apprendre.
                    </p>

                </div>

            </div>


        </section>

    </main>

</div>


</body>

</html>