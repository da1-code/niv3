<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">

    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Étudiants - EDUNOVA IA</title>

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


            <li class="active">

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


            <!-- DÉCONNEXION -->

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

                    Gestion des étudiants 👨‍🎓

                </h2>


                <p>

                    Consultez et gérez les étudiants inscrits sur EDUNOVA IA.

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
             MESSAGE DE SUCCÈS
        ================================================== -->

        @if(session('success'))

            <div class="success-message">

                ✅ {{ session('success') }}

            </div>

        @endif



        <!-- =================================================
             CARTES STATISTIQUES
        ================================================== -->

        <section class="cards">


            <!-- TOTAL -->

            <div class="card">

                <h3>
                    Total étudiants
                </h3>

                <p>
                    {{ $totalEtudiants }}
                </p>

            </div>



            <!-- ACTIFS -->

            <div class="card">

                <h3>
                    Étudiants actifs
                </h3>

                <p>
                    {{ $etudiantsActifs }}
                </p>

            </div>



            <!-- NOUVEAUX -->

            <div class="card">

                <h3>
                    Nouveaux étudiants
                </h3>

                <p>
                    {{ $nouveauxEtudiants }}
                </p>

            </div>



            <!-- DÉSACTIVÉS -->

            <div class="card">

                <h3>
                    Étudiants désactivés
                </h3>

                <p>
                    {{ $etudiantsDesactives }}
                </p>

            </div>


        </section>



        <!-- =================================================
             SECTION ÉTUDIANTS
        ================================================== -->

        <section class="students-section">


            <div class="section-header">


                <div>

                    <h3>

                        Liste des étudiants

                    </h3>


                    <p>

                        Consultez les comptes étudiants enregistrés.

                    </p>

                </div>


                <button
                    type="button"
                    class="add-btn"
                    id="ouvrirEtudiant"
                >

                    + Ajouter un étudiant

                </button>


            </div>



            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="search-box">


                <input
                    type="text"
                    id="rechercheEtudiant"
                    placeholder="🔍 Rechercher un étudiant..."
                >


                <select id="filtreStatut">

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="actif">
                        Actif
                    </option>

                    <option value="inactif">
                        Désactivé
                    </option>

                </select>


            </div>



            <!-- =================================================
                 TABLEAU
            ================================================== -->

            <div class="table-container">


                <table>


                    <thead>

                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                Étudiant
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Classe
                            </th>

                            <th>
                                Statut
                            </th>

                            <th>
                                Date d'inscription
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>



                    <tbody id="listeEtudiants">


                        @forelse($etudiants as $etudiant)


                            <tr
                                data-nom="{{ strtolower($etudiant->name ?? '') }}"
                                data-email="{{ strtolower($etudiant->email ?? '') }}"
                                data-statut="{{ $etudiant->actif ? 'actif' : 'inactif' }}"
                            >


                                <!-- ID -->

                                <td>

                                    #{{ str_pad(
                                        $etudiant->id,
                                        3,
                                        '0',
                                        STR_PAD_LEFT
                                    ) }}

                                </td>



                                <!-- NOM -->

                                <td>

                                    <strong>

                                        {{ $etudiant->name ?? 'Nom non renseigné' }}

                                    </strong>

                                </td>



                                <!-- EMAIL -->

                                <td>

                                    {{ $etudiant->email }}

                                </td>



                                <!-- CLASSE -->

                                <td>

                                    @if($etudiant->classe)

                                        {{ $etudiant->classe->nom }}

                                    @elseif($etudiant->idclasse)

                                        Classe #{{ $etudiant->idclasse }}

                                    @else

                                        <span class="not-defined">
                                            Non renseignée
                                        </span>

                                    @endif

                                </td>



                                <!-- STATUT -->

                                <td>


                                    @if($etudiant->actif)

                                        <span class="status active-status">

                                            Actif

                                        </span>

                                    @else

                                        <span class="status inactive-status">

                                            Désactivé

                                        </span>

                                    @endif


                                </td>



                                <!-- DATE -->

                                <td>

                                    @if($etudiant->created_at)

                                        {{ $etudiant->created_at->format('d/m/Y H:i') }}

                                    @else

                                        Non renseignée

                                    @endif

                                </td>



                                <!-- ACTIONS -->

                                <td class="actions">


                                    <button
                                        type="button"
                                        class="view-btn"
                                        title="Voir"
                                    >

                                        👁

                                    </button>


                                    <button
                                        type="button"
                                        class="edit-btn"
                                        title="Modifier"
                                    >

                                        ✏️

                                    </button>


                                    @if($etudiant->actif)

                                        <button
                                            type="button"
                                            class="disable-btn"
                                            title="Désactiver"
                                        >

                                            ⛔

                                        </button>

                                    @else

                                        <button
                                            type="button"
                                            class="enable-btn"
                                            title="Réactiver"
                                        >

                                            ✓

                                        </button>

                                    @endif


                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td
                                    colspan="7"
                                    style="text-align:center; padding:40px;"
                                >

                                    Aucun étudiant inscrit.

                                </td>

                            </tr>


                        @endforelse


                    </tbody>


                </table>


            </div>


        </section>


    </main>


</div>



<!-- =========================================================
     MODAL AJOUTER UN ÉTUDIANT
========================================================= -->

<div
    class="modal-overlay"
    id="modalEtudiant"
>


    <div class="student-modal">


        <div class="modal-header">


            <div>

                <h3>
                    Ajouter un étudiant
                </h3>


                <p>
                    Créez un nouveau compte étudiant.
                </p>

            </div>


            <button
                type="button"
                class="close-modal"
                id="fermerEtudiant"
            >

                ×

            </button>


        </div>



        <form
            class="student-form"
            action="#"
            method="POST"
        >

            @csrf


            <div class="form-row">


                <div class="form-group">

                    <label for="nom">
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nom"
                        name="nom"
                        placeholder="Ex : Dupont"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="prenom">
                        Prénom
                    </label>

                    <input
                        type="text"
                        id="prenom"
                        name="prenom"
                        placeholder="Ex : Jean"
                        required
                    >

                </div>


            </div>



            <div class="form-group">

                <label for="email">
                    Adresse email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="exemple@edunova.com"
                    required
                >

            </div>



            <div class="form-group">

                <label for="password">
                    Mot de passe
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Entrez un mot de passe"
                    required
                >

            </div>



            <div class="form-group">

                <label for="classe">

                    Classe

                </label>


                <select
                    id="classe"
                    name="classe"
                >

                    <option value="">

                        Sélectionner une classe

                    </option>


                    @foreach(\App\Models\Classe::orderBy('nom')->get() as $classe)

                        <option value="{{ $classe->id }}">

                            {{ $classe->nom }}

                        </option>

                    @endforeach


                </select>

            </div>



            <div class="form-group">

                <label for="statut">

                    Statut du compte

                </label>


                <select
                    id="statut"
                    name="statut"
                    required
                >

                    <option value="1">
                        Actif
                    </option>

                    <option value="0">
                        Désactivé
                    </option>

                </select>

            </div>



            <div class="modal-footer">


                <button
                    type="button"
                    class="btn-cancel"
                    id="annulerEtudiant"
                >

                    Annuler

                </button>


                <button
                    type="submit"
                    class="btn-submit"
                >

                    Ajouter l'étudiant

                </button>


            </div>


        </form>


    </div>

</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


/* =====================================================
   MODAL
===================================================== */

const ouvrirEtudiant =
    document.getElementById("ouvrirEtudiant");


const modalEtudiant =
    document.getElementById("modalEtudiant");


const fermerEtudiant =
    document.getElementById("fermerEtudiant");


const annulerEtudiant =
    document.getElementById("annulerEtudiant");


ouvrirEtudiant.addEventListener(
    "click",
    function () {

        modalEtudiant.classList.add("active");

        document.body.style.overflow = "hidden";

    }
);


function fermerModalEtudiant() {

    modalEtudiant.classList.remove("active");

    document.body.style.overflow = "";

}


fermerEtudiant.addEventListener(
    "click",
    fermerModalEtudiant
);


annulerEtudiant.addEventListener(
    "click",
    fermerModalEtudiant
);


modalEtudiant.addEventListener(
    "click",
    function (event) {

        if (event.target === modalEtudiant) {

            fermerModalEtudiant();

        }

    }
);


document.addEventListener(
    "keydown",
    function (event) {

        if (event.key === "Escape") {

            fermerModalEtudiant();

        }

    }
);



/* =====================================================
   RECHERCHE
===================================================== */

const rechercheEtudiant =
    document.getElementById("rechercheEtudiant");


const filtreStatut =
    document.getElementById("filtreStatut");


const lignesEtudiants =
    document.querySelectorAll(
        "#listeEtudiants tr[data-nom]"
    );


function filtrerEtudiants() {


    const recherche =
        rechercheEtudiant.value
            .toLowerCase()
            .trim();


    const statut =
        filtreStatut.value
            .toLowerCase();


    lignesEtudiants.forEach(
        function (ligne) {


            const nom =
                ligne.dataset.nom || "";


            const email =
                ligne.dataset.email || "";


            const statutEtudiant =
                ligne.dataset.statut || "";


            const correspondRecherche =
                nom.includes(recherche) ||
                email.includes(recherche);


            const correspondStatut =
                statut === "" ||
                statutEtudiant === statut;


            if (
                correspondRecherche &&
                correspondStatut
            ) {

                ligne.style.display = "";

            }
            else {

                ligne.style.display = "none";

            }

        }
    );

}


rechercheEtudiant.addEventListener(
    "input",
    filtrerEtudiants
);


filtreStatut.addEventListener(
    "change",
    filtrerEtudiants
);


</script>


</body>

</html>