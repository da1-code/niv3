<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/classes.css">

    <title>Classes - EDUNOVA IA</title>


    <style>

        /* =====================================================
           MODAL AJOUTER / MODIFIER UNE CLASSE
        ===================================================== */

        .modal {

            display: none;

            position: fixed;

            z-index: 99999;

            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background: rgba(17, 24, 50, 0.60);

            align-items: center;
            justify-content: center;

            padding: 20px;

        }


        .modal.active {

            display: flex;

        }


        .modal-content {

            width: 100%;

            max-width: 550px;

            background: white;

            border-radius: 20px;

            padding: 30px;

            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);

            animation: apparition 0.25s ease;

        }


        @keyframes apparition {

            from {

                opacity: 0;

                transform: translateY(-25px) scale(0.97);

            }

            to {

                opacity: 1;

                transform: translateY(0) scale(1);

            }

        }


        .modal-top {

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            margin-bottom: 25px;

            padding-bottom: 20px;

            border-bottom: 1px solid #eeeeee;

        }


        .modal-top h2 {

            margin: 0 0 6px;

            color: #182957;

            font-size: 25px;

        }


        .modal-top p {

            margin: 0;

            color: #7b87a2;

            font-size: 14px;

        }


        .close-modal {

            width: 38px;
            height: 38px;

            border: none;

            border-radius: 10px;

            background: #f1f2f7;

            color: #555f78;

            font-size: 25px;

            cursor: pointer;

        }


        .close-modal:hover {

            background: #e5e6ee;

        }


        .form-group {

            margin-bottom: 20px;

        }


        .form-group label {

            display: block;

            margin-bottom: 8px;

            color: #26365f;

            font-size: 15px;

            font-weight: 600;

        }


        .form-group label span {

            color: #e14d5b;

        }


        .form-group input,
        .form-group select {

            width: 100%;

            height: 52px;

            padding: 0 15px;

            border: 1px solid #dce1ed;

            border-radius: 10px;

            background: #fafbfe;

            color: #29385f;

            font-size: 15px;

            outline: none;

            box-sizing: border-box;

        }


        .form-group input:focus,
        .form-group select:focus {

            border-color: #6257f5;

            box-shadow: 0 0 0 3px rgba(98, 87, 245, 0.10);

            background: white;

        }


        .modal-buttons {

            display: flex;

            justify-content: flex-end;

            gap: 12px;

            margin-top: 28px;

            padding-top: 20px;

            border-top: 1px solid #eeeeee;

        }


        .btn-cancel {

            padding: 13px 22px;

            border: 1px solid #d8dce7;

            border-radius: 10px;

            background: white;

            color: #66718b;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

        }


        .btn-cancel:hover {

            background: #f5f6fa;

        }


        .btn-submit {

            padding: 13px 22px;

            border: none;

            border-radius: 10px;

            background: linear-gradient(135deg, #6257f5, #5146df);

            color: white;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

        }


        .btn-submit:hover {

            transform: translateY(-1px);

        }


        /* =====================================================
           MESSAGE DE SUCCÈS
        ===================================================== */

        .alert-success {

            width: 100%;

            padding: 14px 18px;

            margin-bottom: 20px;

            background: #d1fae5;

            color: #065f46;

            border: 1px solid #10b981;

            border-radius: 8px;

            font-size: 15px;

            font-weight: 500;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 600px) {

            .modal-content {

                padding: 22px;

            }


            .modal-buttons {

                flex-direction: column;

            }


            .btn-cancel,
            .btn-submit {

                width: 100%;

            }

        }

    </style>

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


            <li class="active">

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


            <li>

                <a href="/admin/parametres">
                    ⚙ Paramètres
                </a>

            </li>


            <li>

                <a href="{{ route('logout') }}">
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
                    Gestion des classes 🏫
                </h2>

                <p>
                    Créez et gérez les classes disponibles sur EDUNOVA IA.
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
             SECTION CLASSES
        ================================================== -->

        <section class="classes-section">


            <!-- =================================================
                 TITRE + BOUTON AJOUT
            ================================================== -->

            <div class="section-header">

                <div>

                    <h3>
                        Liste des classes
                    </h3>

                    <p>
                        Les classes définies ici pourront être utilisées
                        par le système EDUNOVA IA.
                    </p>

                </div>


                <button
                    type="button"
                    class="add-btn"
                    id="btnAjouterClasse"
                >

                    + Ajouter une classe

                </button>

            </div>



            <!-- =================================================
                 MESSAGE DE SUCCÈS
            ================================================== -->

            @if(session('success'))

                <div class="alert-success">

                    {{ session('success') }}

                </div>

            @endif



            <!-- =================================================
                 STATISTIQUES
            ================================================== -->

            <div class="class-stats">


                <!-- TOTAL CLASSES -->

                <div class="class-stat-card">

                    <div class="stat-icon purple">

                        🏫

                    </div>

                    <div>

                        <strong>

                            {{ $classes->count() }}

                        </strong>

                        <span>

                            Classes

                        </span>

                    </div>

                </div>



                <!-- TOTAL ETUDIANTS -->

                <div class="class-stat-card">

                    <div class="stat-icon blue">

                        👨‍🎓

                    </div>

                    <div>

                        <strong>

                            245

                        </strong>

                        <span>

                            Étudiants

                        </span>

                    </div>

                </div>



                <!-- CLASSES ACTIVES -->

                <div class="class-stat-card">

                    <div class="stat-icon green">

                        ✓

                    </div>

                    <div>

                        <strong>

                            {{ $classes->where('actif', true)->count() }}

                        </strong>

                        <span>

                            Classes actives

                        </span>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FILTRES
            ================================================== -->

            <div class="filters-box">


                <div class="search-wrapper">

                    <span>
                        🔍
                    </span>

                    <input
                        type="text"
                        placeholder="Rechercher une classe..."
                    >

                </div>


                <select>

                    <option>
                        Toutes les classes
                    </option>

                    <option>
                        6eme
                    </option>

                    <option>
                        5eme
                    </option>

                    <option>
                        4eme
                    </option>

                    <option>
                        3eme
                    </option>

                    <option>
                        2sec
                    </option>

                    <option>
                        1ere
                    </option>

                    <option>
                        TLe
                    </option>

                </select>


                <select>

                    <option>
                        Toutes les séries
                    </option>

                    <option>
                        Scientifique
                    </option>

                    <option>
                        Littéraire
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
                                Classe
                            </th>

                            <th>
                                Série
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                    @forelse($classes as $classe)


                        <tr>


                            <!-- ID -->

                            <td>

                                #{{ str_pad($classe->id, 3, '0', STR_PAD_LEFT) }}

                            </td>



                            <!-- NOM -->

                            <td>

                                <strong>

                                    {{ $classe->nom }}

                                </strong>

                            </td>



                            <!-- SERIE -->

                            <td>

                                {{ $classe->serie }}

                            </td>



                            <!-- ACTIONS -->

                            <td class="actions">


                                <!-- =================================================
                                     VOIR
                                ================================================== -->

                                <button
                                    type="button"
                                    class="view-btn"
                                    title="Voir"
                                >

                                    👁

                                </button>



                                <!-- =================================================
                                     MODIFIER
                                ================================================== -->

                                <button
                                    type="button"
                                    class="edit-btn"
                                    title="Modifier"

                                    onclick="ouvrirModification(
                                        '{{ $classe->id }}',
                                        '{{ addslashes($classe->nom) }}',
                                        '{{ addslashes($classe->serie) }}'
                                    )"
                                >

                                    ✏

                                </button>



                                <!-- =================================================
                                     SUPPRIMER
                                ================================================== -->

                                <form
                                    action="{{ route('admin.classes.destroy', $classe->id) }}"
                                    method="POST"

                                    style="display:inline;"

                                    onsubmit="return confirmerSuppression('{{ addslashes($classe->nom) }}');"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="delete-btn"
                                        title="Supprimer"
                                    >

                                        🗑

                                    </button>

                                </form>


                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td
                                colspan="4"
                                style="text-align:center; padding:30px;"
                            >

                                Aucune classe enregistrée.

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
     MODAL AJOUTER / MODIFIER
========================================================= -->

<div
    class="modal"
    id="modalClasse"
>


    <div class="modal-content">


        <!-- =================================================
             EN-TÊTE
        ================================================== -->

        <div class="modal-top">


            <div>

                <h2 id="modalTitre">

                    Ajouter une classe 🏫

                </h2>


                <p id="modalDescription">

                    Créez une nouvelle classe pour EDUNOVA IA.

                </p>

            </div>


            <button
                type="button"
                class="close-modal"
                id="fermerModal"
            >

                ×

            </button>

        </div>



        <!-- =================================================
             FORMULAIRE
        ================================================== -->

        <form
            id="formClasse"
            action="{{ route('classe.ajout') }}"
            method="POST"
        >

            @csrf


            <!-- =================================================
                 IMPORTANT POUR PUT

                 Vide = ajout POST
                 PUT  = modification
            ================================================== -->

            <input
                type="hidden"
                name="_method"
                id="methodClasse"
                value=""
            >


            <!-- =================================================
                 NOM DE LA CLASSE
            ================================================== -->

            <div class="form-group">

                <label for="nom_classe">

                    Nom de la classe

                    <span>
                        *
                    </span>

                </label>


                <input
                    type="text"
                    id="nom_classe"
                    name="nom"
                    placeholder="Exemple : GL3A"
                    required
                >

            </div>



            <!-- =================================================
                 SERIE
            ================================================== -->

            <div class="form-group">

                <label for="niveau">

                    Série

                    <span>
                        *
                    </span>

                </label>


                <select
                    id="niveau"
                    name="serie"
                    required
                >

                    <option value="">

                        Sélectionner une série

                    </option>


                    <option value="scientifique">

                        Scientifique

                    </option>


                    <option value="litteraire">

                        Littéraire

                    </option>

                </select>

            </div>



            <!-- =================================================
                 BOUTONS
            ================================================== -->

            <div class="modal-buttons">


                <button
                    type="button"
                    class="btn-cancel"
                    id="annulerModal"
                >

                    Annuler

                </button>


                <button
                    type="submit"
                    class="btn-submit"
                    id="btnSubmit"
                >

                    ✓ Ajouter la classe

                </button>


            </div>


        </form>

    </div>

</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


/* ============================================================
   ELEMENTS
============================================================ */

const boutonAjouter =
    document.getElementById("btnAjouterClasse");

const modal =
    document.getElementById("modalClasse");

const boutonFermer =
    document.getElementById("fermerModal");

const boutonAnnuler =
    document.getElementById("annulerModal");

const formulaire =
    document.getElementById("formClasse");

const titreModal =
    document.getElementById("modalTitre");

const descriptionModal =
    document.getElementById("modalDescription");

const boutonSubmit =
    document.getElementById("btnSubmit");

const champNom =
    document.getElementById("nom_classe");

const champSerie =
    document.getElementById("niveau");

const methodClasse =
    document.getElementById("methodClasse");



/* ============================================================
   OUVRIR MODAL POUR AJOUTER
============================================================ */

boutonAjouter.addEventListener("click", function () {


    /*
     * Route d'ajout
     */

    formulaire.action =
        "{{ route('classe.ajout') }}";


    /*
     * IMPORTANT :
     * aucune méthode PUT pour l'ajout
     */

    methodClasse.value = "";


    /*
     * Modifier le titre
     */

    titreModal.textContent =
        "Ajouter une classe 🏫";


    descriptionModal.textContent =
        "Créez une nouvelle classe pour EDUNOVA IA.";


    boutonSubmit.textContent =
        "✓ Ajouter la classe";


    /*
     * Vider les champs
     */

    champNom.value = "";

    champSerie.value = "";


    /*
     * Afficher le modal
     */

    modal.classList.add("active");

    document.body.style.overflow = "hidden";


    /*
     * Placer le curseur dans le champ nom
     */

    champNom.focus();

});



/* ============================================================
   OUVRIR MODAL POUR MODIFIER
============================================================ */

function ouvrirModification(id, nom, serie)
{


    /*
     * URL de modification
     */

    formulaire.action =
        "/admin/classes/" + id;


    /*
     * ========================================================
     * CORRECTION DE L'ERREUR 405
     *
     * Laravel reçoit d'abord POST parce que les formulaires
     * HTML utilisent POST.
     *
     * Grâce à _method=PUT, Laravel comprend qu'il s'agit
     * d'une requête PUT.
     * ========================================================
     */

    methodClasse.value = "PUT";


    /*
     * Modifier le titre
     */

    titreModal.textContent =
        "Modifier la classe ✏";


    descriptionModal.textContent =
        "Modifiez les informations de cette classe.";


    boutonSubmit.textContent =
        "✓ Enregistrer les modifications";


    /*
     * Remplir les champs
     */

    champNom.value = nom;

    champSerie.value = serie;


    /*
     * Afficher le modal
     */

    modal.classList.add("active");

    document.body.style.overflow = "hidden";


    /*
     * Curseur dans le nom
     */

    champNom.focus();

}



/* ============================================================
   FERMER LE MODAL
============================================================ */

function fermerFormulaire()
{

    modal.classList.remove("active");

    document.body.style.overflow = "";

}


boutonFermer.addEventListener(
    "click",
    fermerFormulaire
);


boutonAnnuler.addEventListener(
    "click",
    fermerFormulaire
);



/* ============================================================
   FERMER EN CLIQUANT À L'EXTÉRIEUR
============================================================ */

modal.addEventListener(
    "click",
    function(event)
    {

        if (event.target === modal)
        {

            fermerFormulaire();

        }

    }
);



/* ============================================================
   FERMER AVEC ESC
============================================================ */

document.addEventListener(
    "keydown",
    function(event)
    {

        if (event.key === "Escape")
        {

            fermerFormulaire();

        }

    }
);



/* ============================================================
   CONFIRMATION SUPPRESSION
============================================================ */

function confirmerSuppression(nom)
{

    return confirm(
        "Voulez-vous vraiment supprimer la classe « "
        + nom
        + " » ?"
    );

}

</script>


</body>

</html>