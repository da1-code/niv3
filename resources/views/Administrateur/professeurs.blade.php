<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enseignants - EDUNOVA IA</title>

    <link rel="stylesheet" href="/admin/dashboard.css">

    <link rel="stylesheet" href="/admin/professeurs.css">

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

                <a href="/admin/classes">
                    🏫 Classes
                </a>

            </li>


            <li>

                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>

            </li>


            <li class="active">

                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
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


            <li>

                <a href="/admin/parametres">
                    ⚙️ Paramètres
                </a>

            </li>


            <li>

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

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


        <!-- =================================================
             TOPBAR
        ================================================== -->

        <header class="topbar">

            <div>

                <h2>
                    Gestion des enseignants 👨‍🏫
                </h2>

                <p>
                    Gérez les enseignants de la plateforme EDUNOVA IA.
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
             SECTION PROFESSEURS
        ================================================== -->

        <section class="professeurs-section">


            <!-- =================================================
                 STATISTIQUES
            ================================================== -->

            <div class="prof-stats">


                <!-- TOTAL -->

                <div class="prof-stat-card">

                    <div class="prof-stat-icon">
                        👨‍🏫
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            {{ $totalProfesseurs }}
                        </span>

                        <p>
                            Total enseignants
                        </p>

                    </div>

                </div>



                <!-- ACTIFS -->

                <div class="prof-stat-card">

                    <div class="prof-stat-icon active-icon">
                        🟢
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            {{ $professeursActifs }}
                        </span>

                        <p>
                            Enseignants actifs
                        </p>

                    </div>

                </div>



                <!-- INACTIFS -->

                <div class="prof-stat-card">

                    <div class="prof-stat-icon inactive-icon">
                        🔴
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            {{ $professeursInactifs }}
                        </span>

                        <p>
                            Enseignants inactifs
                        </p>

                    </div>

                </div>



                <!-- COURS -->

                <div class="prof-stat-card">

                    <div class="prof-stat-icon course-icon">
                        📚
                    </div>

                    <div>

                        <span class="prof-stat-number">
                            0
                        </span>

                        <p>
                            Cours publiés
                        </p>

                    </div>

                </div>


            </div>



            <!-- =================================================
                 BARRE D'OUTILS
            ================================================== -->

            <div class="prof-toolbar">


                <div class="search-box">

                    <span>
                        🔍
                    </span>

                    <input
                        type="text"
                        id="rechercheProfesseur"
                        placeholder="Rechercher un enseignant..."
                    >

                </div>



                <div class="toolbar-actions">


                    <select id="filtreStatut">

                        <option value="tous">
                            Tous les statuts
                        </option>

                        <option value="actif">
                            Actifs
                        </option>

                        <option value="inactif">
                            Inactifs
                        </option>

                    </select>



                    <button
                        type="button"
                        class="add-prof-btn"
                        id="ouvrirProfesseur"
                    >

                        <span>
                            ＋
                        </span>

                        Ajouter un enseignant

                    </button>


                </div>

            </div>



            <!-- =================================================
                 TABLEAU
            ================================================== -->

            <div class="prof-table-card">


                <div class="table-header">

                    <div>

                        <h3>
                            Liste des enseignants
                        </h3>

                        <p>
                            Consultez et gérez les enseignants inscrits.
                        </p>

                    </div>


                    <span class="total-label">

                        {{ $totalProfesseurs }}

                        {{ $totalProfesseurs > 1 ? 'enseignants' : 'enseignant' }}

                    </span>

                </div>



                <div class="table-wrapper">

                    <table id="tableProfesseurs">


                        <thead>

                            <tr>

                                <th>
                                    Enseignant
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Matière
                                </th>

                                <th>
                                    Cours
                                </th>

                                <th>
                                    Statut
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>



                        <tbody>


                            @forelse($professeurs as $professeur)


                                <tr
                                    data-statut="{{ $professeur->actif ? 'actif' : 'inactif' }}"
                                >


                                    <!-- ENSEIGNANT -->

                                    <td>

                                        <div class="teacher-info">


                                            <div class="teacher-avatar">

                                                {{ strtoupper(substr($professeur->name ?? 'PR', 0, 2)) }}

                                            </div>


                                            <div>

                                                <strong>

                                                    {{ $professeur->name }}

                                                </strong>

                                                <span>
                                                    Enseignant
                                                </span>

                                            </div>


                                        </div>

                                    </td>



                                    <!-- EMAIL -->

                                    <td>

                                        {{ $professeur->email }}

                                    </td>



                                    <!-- MATIERE -->

                                    <td>

                                        <span class="not-defined">
                                            Non renseignée
                                        </span>

                                    </td>



                                    <!-- COURS -->

                                    <td>

                                        <span class="course-badge">
                                            0 cours
                                        </span>

                                    </td>



                                    <!-- STATUT -->

                                    <td>

                                        @if($professeur->actif)

                                            <span class="status active">
                                                Actif
                                            </span>

                                        @else

                                            <span class="status inactive">
                                                Inactif
                                            </span>

                                        @endif

                                    </td>



                                    <!-- ACTIONS -->

                                    <td>

                                        <div class="actions">


                                            <button
                                                type="button"
                                                class="action-btn view"
                                                title="Voir"
                                            >
                                                👁️
                                            </button>


                                            <button
                                                type="button"
                                                class="action-btn edit"
                                                title="Modifier"
                                            >
                                                ✏️
                                            </button>


                                            <button
                                                type="button"
                                                class="action-btn delete"
                                                title="Désactiver"
                                            >
                                                🚫
                                            </button>


                                        </div>

                                    </td>


                                </tr>


                            @empty


                                <tr class="empty-row">

                                    <td colspan="6">

                                        <div class="empty-state">

                                            <div>
                                                👨‍🏫
                                            </div>

                                            <strong>
                                                Aucun enseignant enregistré
                                            </strong>

                                            <p>
                                                Aucun compte professeur n'est actuellement enregistré.
                                            </p>

                                        </div>

                                    </td>

                                </tr>


                            @endforelse


                        </tbody>

                    </table>

                </div>



                <!-- =================================================
                     BAS DU TABLEAU
                ================================================== -->

                <div class="pagination">


                    <span>

                        Affichage de

                        <strong>
                            {{ $totalProfesseurs }}
                        </strong>

                        enseignant(s)

                    </span>


                </div>


            </div>


        </section>


    </main>


</div>



<!-- =========================================================
     MODAL AJOUTER ENSEIGNANT
========================================================= -->

<div
    class="modal-overlay"
    id="modalProfesseur"
>


    <div class="professeur-modal">


        <!-- HEADER -->

        <div class="modal-header">


            <div>

                <h3>
                    Ajouter un enseignant
                </h3>

                <p>
                    Créez un nouveau compte enseignant sur EDUNOVA IA.
                </p>

            </div>


            <button
                type="button"
                class="close-modal"
                id="fermerProfesseur"
            >
                ×
            </button>


        </div>



        <!-- FORMULAIRE -->

        <form
            class="professeur-form"
            action="#"
            method="POST"
        >

            @csrf


            <!-- NOM -->

            <div class="form-row">


                <div class="form-group">

                    <label for="nomProf">
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nomProf"
                        name="nom"
                        placeholder="Ex : Dupont"
                        required
                    >

                </div>



                <!-- PRENOM -->

                <div class="form-group">

                    <label for="prenomProf">
                        Prénom
                    </label>

                    <input
                        type="text"
                        id="prenomProf"
                        name="prenom"
                        placeholder="Ex : Jean"
                        required
                    >

                </div>


            </div>



            <!-- EMAIL -->

            <div class="form-group">

                <label for="emailProf">
                    Adresse email
                </label>

                <input
                    type="email"
                    id="emailProf"
                    name="email"
                    placeholder="exemple@edunova.com"
                    required
                >

            </div>



            <!-- MOT DE PASSE -->

            <div class="form-group">

                <label for="passwordProf">
                    Mot de passe
                </label>

                <input
                    type="password"
                    id="passwordProf"
                    name="password"
                    placeholder="Entrez un mot de passe"
                    required
                >

            </div>



            <!-- MATIERE -->

            <div class="form-group">

                <label for="matiereProf">
                    Matière enseignée
                </label>

                <select
                    id="matiereProf"
                    name="matiere"
                >

                    <option value="">
                        Sélectionner une matière
                    </option>

                    <option value="informatique">
                        Informatique
                    </option>

                    <option value="mathematiques">
                        Mathématiques
                    </option>

                    <option value="intelligence-artificielle">
                        Intelligence Artificielle
                    </option>

                    <option value="bases-de-donnees">
                        Bases de données
                    </option>

                    <option value="anglais">
                        Anglais
                    </option>

                </select>

            </div>



            <!-- SPECIALITE -->

            <div class="form-group">

                <label for="specialiteProf">
                    Spécialité
                </label>

                <input
                    type="text"
                    id="specialiteProf"
                    name="specialite"
                    placeholder="Ex : Développement web"
                >

            </div>



            <!-- STATUT -->

            <div class="form-group">

                <label for="statutProf">
                    Statut du compte
                </label>

                <select
                    id="statutProf"
                    name="actif"
                >

                    <option value="1">
                        Actif
                    </option>

                    <option value="0">
                        Désactivé
                    </option>

                </select>

            </div>



            <!-- FOOTER -->

            <div class="modal-footer">


                <button
                    type="button"
                    class="btn-cancel"
                    id="annulerProfesseur"
                >
                    Annuler
                </button>


                <button
                    type="submit"
                    class="btn-submit"
                >
                    Ajouter l'enseignant
                </button>


            </div>


        </form>


    </div>


</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           MODAL
        ================================================= */


        const ouvrirProfesseur =
            document.getElementById("ouvrirProfesseur");


        const modalProfesseur =
            document.getElementById("modalProfesseur");


        const fermerProfesseur =
            document.getElementById("fermerProfesseur");


        const annulerProfesseur =
            document.getElementById("annulerProfesseur");



        ouvrirProfesseur.addEventListener(
            "click",
            function () {

                modalProfesseur.classList.add("active");

                document.body.style.overflow = "hidden";

            }
        );



        function fermerModalProfesseur() {

            modalProfesseur.classList.remove("active");

            document.body.style.overflow = "";

        }



        fermerProfesseur.addEventListener(
            "click",
            fermerModalProfesseur
        );



        annulerProfesseur.addEventListener(
            "click",
            fermerModalProfesseur
        );



        modalProfesseur.addEventListener(
            "click",
            function (event) {

                if (event.target === modalProfesseur) {

                    fermerModalProfesseur();

                }

            }
        );



        document.addEventListener(
            "keydown",
            function (event) {

                if (event.key === "Escape") {

                    fermerModalProfesseur();

                }

            }
        );



        /* =================================================
           RECHERCHE
        ================================================= */


        const recherche =
            document.getElementById("rechercheProfesseur");


        const filtre =
            document.getElementById("filtreStatut");


        const lignes =
            document.querySelectorAll(
                "#tableProfesseurs tbody tr:not(.empty-row)"
            );



        function filtrerProfesseurs() {


            const texte =
                recherche.value.toLowerCase().trim();


            const statut =
                filtre.value;



            lignes.forEach(
                function (ligne) {


                    const contenu =
                        ligne.textContent.toLowerCase();


                    const statutLigne =
                        ligne.dataset.statut;



                    const correspondRecherche =
                        contenu.includes(texte);



                    const correspondStatut =
                        statut === "tous"
                        ||
                        statut === statutLigne;



                    if (
                        correspondRecherche
                        &&
                        correspondStatut
                    ) {

                        ligne.style.display = "";

                    } else {

                        ligne.style.display = "none";

                    }

                }
            );

        }



        recherche.addEventListener(
            "input",
            filtrerProfesseurs
        );


        filtre.addEventListener(
            "change",
            filtrerProfesseurs
        );


    }

);

</script>


</body>

</html>