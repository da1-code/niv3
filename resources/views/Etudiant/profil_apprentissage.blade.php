<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA - Profil d'apprentissage</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
    <link rel="stylesheet" href="/etudiant/profil_apprentissage.css">

</head>

<body>

<div class="student-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">🎓</div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>Plateforme éducative</span>
            </div>
        </div>


        <!-- Petit profil -->
        <div class="profile-mini">

            <div class="avatar">
                {{ strtoupper(substr($etudiant->prenom ?? 'E', 0, 1)) }}
            </div>

            <div>

                <strong>
                    {{ $etudiant->prenom ?? '' }}
                    {{ $etudiant->nom ?? '' }}
                </strong>

                <small>Étudiante</small>

            </div>

        </div>


        <!-- Menu -->
        <nav class="menu">

            <a href="/etudiant/dashboard">
                <span>🏠</span>
                Tableau de bord
            </a>

            <a href="/etudiant/profil">
                <span>👤</span>
                Mon profil
            </a>

            <a href="/etudiant/profil-apprentissage" class="active">
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


        <!-- Déconnexion -->
        <div class="sidebar-bottom">

            <form action="/logout" method="POST">

                @csrf

                <button type="submit" class="logout">
                    <span>🚪</span>
                    Déconnexion
                </button>

            </form>

        </div>

    </aside>


    <!-- ================= CONTENU PRINCIPAL ================= -->
    <main class="main-content">

        <!-- Header -->
        <header class="topbar">

            <div class="page-title">

                <h1>Profil d'apprentissage 🧠</h1>

                <p>
                    Aide EDUNOVA IA à mieux comprendre ta manière d'apprendre.
                </p>

            </div>


            <div class="top-actions">

                <a href="#" class="notification">
                    🔔
                    <span></span>
                </a>


                <div class="student-user">

                    <div class="user-avatar">
                        {{ strtoupper(substr($etudiant->prenom ?? 'E', 0, 1)) }}
                    </div>

                    <div>

                        <strong>
                            {{ $etudiant->prenom ?? '' }}
                            {{ $etudiant->nom ?? '' }}
                        </strong>

                        <small>Étudiante</small>

                    </div>

                </div>

            </div>

        </header>


        <!-- ================= INTRODUCTION ================= -->
        <section class="learning-intro">

            <div class="intro-icon">
                🤖
            </div>

            <div class="intro-content">

                <h2>Personnalise ton apprentissage</h2>

                <p>
                    Ton profil d'apprentissage permet à EDUNOVA IA de
                    personnaliser les cours, les explications et les
                    recommandations selon ta manière d'apprendre.
                </p>

            </div>

        </section>


        <!-- ================= FORMULAIRE ================= -->
        <form action="#" method="POST" class="learning-form">

            @csrf


            <!-- ================= TYPE D'APPRENTISSAGE ================= -->
            <section class="learning-card">

                <div class="card-title">

                    <div class="title-icon blue">
                        🧠
                    </div>

                    <div>

                        <h2>Comment apprends-tu le mieux ?</h2>

                        <p>
                            Sélectionne la méthode qui correspond le mieux
                            à ta façon de retenir les informations.
                        </p>

                    </div>

                </div>


                <div class="learning-options">


                    <!-- Visuel -->
                    <label class="learning-option">

                        <input
                            type="radio"
                            name="type_apprentissage"
                            value="Visuel"
                        >

                        <div class="option-content">

                            <div class="option-icon visual">
                                👁️
                            </div>

                            <div class="option-text">

                                <h3>Visuel</h3>

                                <p>
                                    Je retiens mieux avec des images,
                                    schémas, graphiques et vidéos.
                                </p>

                            </div>

                            <div class="check">
                                ✓
                            </div>

                        </div>

                    </label>


                    <!-- Auditif -->
                    <label class="learning-option">

                        <input
                            type="radio"
                            name="type_apprentissage"
                            value="Auditif"
                        >

                        <div class="option-content">

                            <div class="option-icon audio">
                                🎧
                            </div>

                            <div class="option-text">

                                <h3>Auditif</h3>

                                <p>
                                    Je comprends mieux grâce aux explications
                                    orales, aux discussions et à l'audio.
                                </p>

                            </div>

                            <div class="check">
                                ✓
                            </div>

                        </div>

                    </label>


                    <!-- Lecture / écriture -->
                    <label class="learning-option">

                        <input
                            type="radio"
                            name="type_apprentissage"
                            value="Lecture/Écriture"
                        >

                        <div class="option-content">

                            <div class="option-icon reading">
                                📖
                            </div>

                            <div class="option-text">

                                <h3>Lecture / Écriture</h3>

                                <p>
                                    Je retiens mieux en lisant des textes,
                                    en prenant des notes et en écrivant.
                                </p>

                            </div>

                            <div class="check">
                                ✓
                            </div>

                        </div>

                    </label>


                    <!-- Pratique -->
                    <label class="learning-option">

                        <input
                            type="radio"
                            name="type_apprentissage"
                            value="Pratique"
                        >

                        <div class="option-content">

                            <div class="option-icon practice">
                                🛠️
                            </div>

                            <div class="option-text">

                                <h3>Pratique</h3>

                                <p>
                                    Je comprends mieux en faisant des exercices,
                                    des projets et des activités pratiques.
                                </p>

                            </div>

                            <div class="check">
                                ✓
                            </div>

                        </div>

                    </label>

                </div>

            </section>


            <!-- ================= TEMPS D'APPRENTISSAGE ================= -->
            <section class="learning-card">

                <div class="card-title">

                    <div class="title-icon green">
                        ⏱️
                    </div>

                    <div>

                        <h2>Ton rythme d'apprentissage</h2>

                        <p>
                            Indique le moment où tu es généralement
                            le plus efficace pour étudier.
                        </p>

                    </div>

                </div>


                <div class="time-options">

                    <label class="time-option">

                        <input
                            type="radio"
                            name="moment_etude"
                            value="Matin"
                        >

                        <div class="time-content">

                            <span class="time-icon">
                                🌅
                            </span>

                            <div>

                                <strong>Le matin</strong>

                                <small>
                                    Je suis plus concentré(e) le matin.
                                </small>

                            </div>

                        </div>

                    </label>


                    <label class="time-option">

                        <input
                            type="radio"
                            name="moment_etude"
                            value="Après-midi"
                        >

                        <div class="time-content">

                            <span class="time-icon">
                                ☀️
                            </span>

                            <div>

                                <strong>L'après-midi</strong>

                                <small>
                                    Je travaille mieux dans l'après-midi.
                                </small>

                            </div>

                        </div>

                    </label>


                    <label class="time-option">

                        <input
                            type="radio"
                            name="moment_etude"
                            value="Soir"
                        >

                        <div class="time-content">

                            <span class="time-icon">
                                🌙
                            </span>

                            <div>

                                <strong>Le soir</strong>

                                <small>
                                    Je suis plus concentré(e) le soir.
                                </small>

                            </div>

                        </div>

                    </label>


                    <label class="time-option">

                        <input
                            type="radio"
                            name="moment_etude"
                            value="Variable"
                        >

                        <div class="time-content">

                            <span class="time-icon">
                                🔄
                            </span>

                            <div>

                                <strong>Variable</strong>

                                <small>
                                    Mon rythme dépend de mon emploi du temps.
                                </small>

                            </div>

                        </div>

                    </label>

                </div>

            </section>


            <!-- ================= DUREE ================= -->
            <section class="learning-card">

                <div class="card-title">

                    <div class="title-icon purple">
                        📚
                    </div>

                    <div>

                        <h2>Combien de temps étudies-tu généralement ?</h2>

                        <p>
                            Cette information aidera l'IA à adapter
                            tes recommandations.
                        </p>

                    </div>

                </div>


                <div class="duration-options">

                    <label class="duration-option">

                        <input
                            type="radio"
                            name="duree_etude"
                            value="Moins de 30 minutes"
                        >

                        <span>Moins de 30 min</span>

                    </label>


                    <label class="duration-option">

                        <input
                            type="radio"
                            name="duree_etude"
                            value="30 à 60 minutes"
                        >

                        <span>30 à 60 min</span>

                    </label>


                    <label class="duration-option">

                        <input
                            type="radio"
                            name="duree_etude"
                            value="1 à 2 heures"
                        >

                        <span>1 à 2 heures</span>

                    </label>


                    <label class="duration-option">

                        <input
                            type="radio"
                            name="duree_etude"
                            value="Plus de 2 heures"
                        >

                        <span>Plus de 2 heures</span>

                    </label>

                </div>

            </section>


            <!-- ================= PREFERENCES IA ================= -->
            <section class="learning-card">

                <div class="card-title">

                    <div class="title-icon orange">
                        🤖
                    </div>

                    <div>

                        <h2>Comment veux-tu que ton IA t'aide ?</h2>

                        <p>
                            Choisis les types d'aide que tu préfères recevoir.
                        </p>

                    </div>

                </div>


                <div class="ai-preferences">


                    <label class="preference-item">

                        <input
                            type="checkbox"
                            name="preference[]"
                            value="Explications simples"
                        >

                        <span class="custom-checkbox">
                            ✓
                        </span>

                        <div>

                            <strong>Explications simples</strong>

                            <small>
                                Des explications courtes et faciles à comprendre.
                            </small>

                        </div>

                    </label>


                    <label class="preference-item">

                        <input
                            type="checkbox"
                            name="preference[]"
                            value="Exemples"
                        >

                        <span class="custom-checkbox">
                            ✓
                        </span>

                        <div>

                            <strong>Exemples pratiques</strong>

                            <small>
                                Des exemples concrets pour mieux comprendre.
                            </small>

                        </div>

                    </label>


                    <label class="preference-item">

                        <input
                            type="checkbox"
                            name="preference[]"
                            value="Exercices"
                        >

                        <span class="custom-checkbox">
                            ✓
                        </span>

                        <div>

                            <strong>Exercices</strong>

                            <small>
                                Des exercices pour vérifier mes connaissances.
                            </small>

                        </div>

                    </label>


                    <label class="preference-item">

                        <input
                            type="checkbox"
                            name="preference[]"
                            value="Resume"
                        >

                        <span class="custom-checkbox">
                            ✓
                        </span>

                        <div>

                            <strong>Résumés</strong>

                            <small>
                                Des résumés des points essentiels du cours.
                            </small>

                        </div>

                    </label>

                </div>

            </section>


            <!-- ================= APERCU IA ================= -->
            <section class="ai-preview">

                <div class="ai-preview-icon">
                    🤖
                </div>

                <div class="ai-preview-content">

                    <span class="preview-label">
                        EDUNOVA IA
                    </span>

                    <h2>
                        Ton profil permettra à l'IA de s'adapter à toi.
                    </h2>

                    <p>
                        Par exemple, si tu apprends mieux avec des images,
                        l'IA pourra privilégier les schémas, illustrations
                        et supports visuels dans ses explications.
                    </p>

                </div>

            </section>


            <!-- ================= ACTIONS ================= -->
            <div class="form-actions">

                <button
                    type="reset"
                    class="cancel-btn"
                >
                    Réinitialiser
                </button>

                <button
                    type="submit"
                    class="save-btn"
                >
                    💾 Enregistrer mon profil
                </button>

            </div>

        </form>

    </main>

</div>

</body>

</html>