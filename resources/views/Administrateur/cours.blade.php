<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">

    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Cours - EDUNOVA IA</title>


    <!-- =====================================================
         STYLE DU MODAL
    ====================================================== -->

    <style>

        /* =================================================
           MODAL
        ================================================= */

        .modal-overlay {

            display: none;

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background: rgba(15, 23, 50, 0.60);

            backdrop-filter: blur(4px);

            z-index: 9999;

            align-items: center;

            justify-content: center;

            padding: 20px;

        }


        .modal-overlay.active {

            display: flex;

        }


        .course-modal {

            width: 100%;

            max-width: 600px;

            max-height: 90vh;

            overflow-y: auto;

            background: #ffffff;

            border-radius: 20px;

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.25);

            animation: modalAppear 0.25s ease;

        }


        @keyframes modalAppear {

            from {

                opacity: 0;

                transform:
                    translateY(-25px)
                    scale(0.97);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);

            }

        }


        /* =================================================
           HEADER MODAL
        ================================================= */

        .modal-header {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            padding: 25px 30px;

            border-bottom: 1px solid #eeeeee;

        }


        .modal-header h2 {

            margin: 0 0 6px;

            color: #182957;

            font-size: 24px;

        }


        .modal-header p {

            margin: 0;

            color: #7a849d;

            font-size: 14px;

        }


        .close-modal {

            width: 38px;

            height: 38px;

            border: none;

            border-radius: 10px;

            background: #f1f2f7;

            color: #59647d;

            font-size: 25px;

            cursor: pointer;

        }


        .close-modal:hover {

            background: #e5e7ef;

        }


        /* =================================================
           FORMULAIRE
        ================================================= */

        .course-form {

            padding: 28px 30px 30px;

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


        .required {

            color: #e14d5b;

        }


        .form-group input,
        .form-group select,
        .form-group textarea {

            width: 100%;

            box-sizing: border-box;

            border: 1px solid #dce1ed;

            border-radius: 10px;

            background: #fafbfe;

            color: #29385f;

            font-size: 15px;

            font-family: inherit;

            outline: none;

        }


        .form-group input,
        .form-group select {

            height: 52px;

            padding: 0 15px;

        }


        .form-group textarea {

            min-height: 110px;

            padding: 14px 15px;

            resize: vertical;

        }


        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {

            border-color: #6257f5;

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(98, 87, 245, 0.10);

        }


        .form-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;

        }


        /* =================================================
           FICHIER PDF
        ================================================= */

        .file-upload {

            display: block;

            border: 2px dashed #d8ddec;

            border-radius: 12px;

            padding: 22px;

            text-align: center;

            background: #fafbfe;

            cursor: pointer;

        }


        .file-upload:hover {

            border-color: #6257f5;

            background: #f7f6ff;

        }


        .file-upload-icon {

            font-size: 32px;

            margin-bottom: 8px;

        }


        .file-upload strong {

            display: block;

            color: #29385f;

            margin-bottom: 5px;

        }


        .file-upload p {

            margin: 0;

            color: #7a849d;

            font-size: 13px;

        }


        .file-upload input {

            display: none;

        }


        /* =================================================
           FOOTER
        ================================================= */

        .modal-footer {

            display: flex;

            justify-content: flex-end;

            gap: 12px;

            padding-top: 20px;

            margin-top: 25px;

            border-top: 1px solid #eeeeee;

        }


        .btn-cancel {

            padding: 13px 22px;

            border: 1px solid #d8dce7;

            border-radius: 10px;

            background: #ffffff;

            color: #66718b;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

        }


        .btn-submit {

            padding: 13px 22px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #6257f5,
                    #5146df
                );

            color: white;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

        }


        /* =================================================
           AUCUN COURS
        ================================================= */

        .empty-courses {

            text-align: center;

            padding: 50px 20px;

            color: #7a849d;

        }


        .empty-courses-icon {

            font-size: 50px;

            margin-bottom: 15px;

        }


        .empty-courses h3 {

            margin-bottom: 8px;

            color: #26365f;

        }


        .empty-courses p {

            margin: 0;

        }


        /* =================================================
           PDF
        ================================================= */

        .pdf-link {

            color: #6257f5;

            text-decoration: none;

            font-weight: 600;

        }


        .pdf-link:hover {

            text-decoration: underline;

        }


        /* =================================================
           RESPONSIVE
        ================================================= */

        @media (max-width: 600px) {

            .course-modal {

                max-height: 95vh;

            }


            .modal-header {

                padding: 20px;

            }


            .course-form {

                padding: 22px 20px;

            }


            .form-row {

                grid-template-columns: 1fr;

                gap: 0;

            }


            .modal-footer {

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

                <a href="/admin/dashdoard">
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


            <li>

                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
                </a>

            </li>


            <li class="active">

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

                <a href="#">
                    🚪 Déconnexion
                </a>

            </li>


        </ul>

    </aside>



    <!-- =====================================================
         CONTENU
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             TOPBAR
        ================================================== -->

        <header class="topbar">


            <div>

                <h2>
                    Gestion des cours 📚
                </h2>


                <p>
                    Consultez et gérez les cours disponibles
                    sur EDUNOVA IA.
                </p>

            </div>


            <div class="profile">


                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Administrateur"
                >


                <span>

                    {{ Auth::user()->prenom ?? '' }}

                    {{ Auth::user()->nom ?? Auth::user()->name ?? 'Administrateur' }}

                </span>


            </div>


        </header>



        <!-- =================================================
             SECTION COURS
        ================================================== -->

        <section class="courses-section">


            <div class="section-header">


                <div>

                    <h3>
                        Liste des cours
                    </h3>


                    <p>
                        Consultez les cours publiés par les enseignants.
                    </p>

                </div>


                <button
                    type="button"
                    class="add-btn"
                    id="ouvrirCours"
                >

                    + Ajouter un cours

                </button>


            </div>



            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="search-box">


                <input
                    type="text"
                    id="rechercheCours"
                    placeholder="🔍 Rechercher un cours..."
                >


                <select id="filtreCategorie">

                    <option value="">
                        Toutes les catégories
                    </option>

                    <option value="Informatique">
                        Informatique
                    </option>

                    <option value="Mathématiques">
                        Mathématiques
                    </option>

                    <option value="Anglais">
                        Anglais
                    </option>

                    <option value="Intelligence Artificielle">
                        Intelligence Artificielle
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

                            <th>ID</th>

                            <th>Titre</th>

                            <th>Description</th>

                            <th>Classe</th>

                            <th>Série</th>

                            <th>Enseignant</th>

                            <th>Document</th>

                            <th>Date de publication</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody id="tableauCours">


                        @forelse($cours as $cour)


                            <tr class="course-row">


                                <!-- ID -->

                                <td>

                                    #{{ str_pad($cour->id, 3, '0', STR_PAD_LEFT) }}

                                </td>



                                <!-- TITRE -->

                                <td>

                                    <strong>

                                        {{ $cour->titre ?? 'Sans titre' }}

                                    </strong>

                                </td>



                                <!-- DESCRIPTION -->

                                <td>

                                    {{ $cour->description ?? 'Aucune description' }}

                                </td>



                                <!-- CLASSE -->

                                <td>

                                    {{ $cour->classe ?? 'Non définie' }}

                                </td>



                                <!-- SERIE -->

                                <td>

                                    {{ $cour->serie ?? 'Non définie' }}

                                </td>



                                <!-- ENSEIGNANT -->

                                <td>

                                    @if(!empty($cour->idprof))

                                        @php

                                            $professeurCours = $enseignants
                                                ->firstWhere('id', $cour->idprof);

                                        @endphp


                                        @if($professeurCours)

                                            {{ $professeurCours->prenom ?? '' }}
                                            {{ $professeurCours->nom ?? $professeurCours->name ?? '' }}

                                        @else

                                            Enseignant #{{ $cour->idprof }}

                                        @endif

                                    @else

                                        Non défini

                                    @endif

                                </td>



                                <!-- DOCUMENT -->

                                <td>

                                    @if(!empty($cour->document))

                                        <a
                                            href="{{ asset('storage/' . $cour->document) }}"
                                            class="pdf-link"
                                            target="_blank"
                                        >

                                            📄 Voir le PDF

                                        </a>

                                    @else

                                        Aucun document

                                    @endif

                                </td>



                                <!-- DATE -->

                                <td>

                                    @if($cour->created_at)

                                        {{ $cour->created_at->format('d/m/Y') }}

                                    @else

                                        Non définie

                                    @endif

                                </td>



                                <!-- ACTIONS -->

                                <td class="actions">


                                    <button
                                        type="button"
                                        class="view-btn"
                                        title="Voir le cours"
                                    >

                                        👁

                                    </button>


                                    <button
                                        type="button"
                                        class="edit-btn"
                                        title="Modifier"
                                    >

                                        ✏

                                    </button>


                                    <button
                                        type="button"
                                        class="delete-btn"
                                        title="Supprimer"
                                    >

                                        🗑

                                    </button>


                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td colspan="9">


                                    <div class="empty-courses">


                                        <div class="empty-courses-icon">
                                            📚
                                        </div>


                                        <h3>
                                            Aucun cours disponible
                                        </h3>


                                        <p>
                                            Aucun cours n'a encore été publié sur EDUNOVA IA.
                                        </p>


                                    </div>


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
     MODAL AJOUTER UN COURS
========================================================= -->

<div
    class="modal-overlay"
    id="modalCours"
>


    <div class="course-modal">


        <!-- HEADER -->

        <div class="modal-header">


            <div>

                <h2>
                    Ajouter un cours 📚
                </h2>


                <p>
                    Ajoutez un nouveau cours sur EDUNOVA IA.
                </p>

            </div>


            <button
                type="button"
                class="close-modal"
                id="fermerCours"
            >

                ×

            </button>


        </div>



        <!-- FORMULAIRE -->

        <form
            class="course-form"
            action="#"
            method="POST"
            enctype="multipart/form-data"
        >


            @csrf


            <!-- TITRE -->

            <div class="form-group">


                <label for="titre">

                    Titre du cours

                    <span class="required">
                        *
                    </span>

                </label>


                <input
                    type="text"
                    id="titre"
                    name="titre"
                    placeholder="Exemple : Introduction à Laravel"
                    required
                >


            </div>



            <!-- DESCRIPTION -->

            <div class="form-group">


                <label for="description">

                    Description

                    <span class="required">
                        *
                    </span>

                </label>


                <textarea
                    id="description"
                    name="description"
                    placeholder="Décrivez brièvement le contenu du cours..."
                    required
                ></textarea>


            </div>



            <!-- CLASSE + SERIE -->

            <div class="form-row">


                <!-- CLASSE -->

                <div class="form-group">


                    <label for="classe">

                        Classe

                        <span class="required">
                            *
                        </span>

                    </label>


                    <select
                        id="classe"
                        name="classe"
                        required
                    >

                        <option value="">
                            Sélectionner
                        </option>


                        <option value="6 eme">
                            6 eme
                        </option>


                        <option value="5 eme">
                            5 eme
                        </option>


                        <option value="4 eme">
                            4 eme
                        </option>


                        <option value="3 eme">
                            3 eme
                        </option>


                        <option value="2 nde">
                            2 nde
                        </option>


                        <option value="1 ere">
                            1 ere
                        </option>


                        <option value="Tle">
                            Tle
                        </option>


                    </select>


                </div>



                <!-- SERIE -->

                <div class="form-group">


                    <label for="serie">

                        Série

                        <span class="required">
                            *
                        </span>

                    </label>


                    <select
                        id="serie"
                        name="serie"
                        required
                    >

                        <option value="">
                            Sélectionner
                        </option>


                        <option value="Scientifique">
                            Scientifique
                        </option>


                        <option value="Litteraire">
                            Littéraire
                        </option>


                    </select>


                </div>


            </div>



            <!-- ENSEIGNANT -->

            <div class="form-group">


                <label for="enseignant">

                    Enseignant

                    <span class="required">
                        *
                    </span>

                </label>


                <select
                    id="enseignant"
                    name="enseignant"
                    required
                >


                    <option value="">
                        Sélectionner un enseignant
                    </option>


                    @forelse($enseignants as $enseignant)


                        <option value="{{ $enseignant->id }}">

                            {{ $enseignant->prenom ?? '' }}

                            {{ $enseignant->nom ?? $enseignant->name ?? 'Enseignant' }}

                        </option>


                    @empty


                        <option value="">
                            Aucun enseignant disponible
                        </option>


                    @endforelse


                </select>


            </div>



            <!-- DOCUMENT -->

            <div class="form-group">


                <label>

                    Document du cours

                    <span class="required">
                        *
                    </span>

                </label>


                <label
                    for="document"
                    class="file-upload"
                >


                    <div class="file-upload-icon">
                        📄
                    </div>


                    <strong id="fileName">
                        Ajouter le document PDF
                    </strong>


                    <p id="fileText">
                        Cliquez ici pour sélectionner
                        un fichier PDF
                    </p>


                    <input
                        type="file"
                        id="document"
                        name="document"
                        accept=".pdf,application/pdf"
                        required
                    >


                </label>


            </div>



            <!-- BOUTONS -->

            <div class="modal-footer">


                <button
                    type="button"
                    class="btn-cancel"
                    id="annulerCours"
                >

                    Annuler

                </button>


                <button
                    type="submit"
                    class="btn-submit"
                >

                    ✓ Ajouter le cours

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

    const ouvrirCours =
        document.getElementById("ouvrirCours");


    const modalCours =
        document.getElementById("modalCours");


    const fermerCours =
        document.getElementById("fermerCours");


    const annulerCours =
        document.getElementById("annulerCours");


    ouvrirCours.addEventListener(
        "click",
        function () {

            modalCours.classList.add("active");

            document.body.style.overflow = "hidden";

        }
    );


    function fermerModalCours() {

        modalCours.classList.remove("active");

        document.body.style.overflow = "";

    }


    fermerCours.addEventListener(
        "click",
        fermerModalCours
    );


    annulerCours.addEventListener(
        "click",
        fermerModalCours
    );


    modalCours.addEventListener(
        "click",
        function (event) {

            if (event.target === modalCours) {

                fermerModalCours();

            }

        }
    );


    document.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Escape") {

                fermerModalCours();

            }

        }
    );



    /* =====================================================
       NOM DU FICHIER PDF
    ===================================================== */

    const documentInput =
        document.getElementById("document");


    const fileName =
        document.getElementById("fileName");


    const fileText =
        document.getElementById("fileText");


    documentInput.addEventListener(
        "change",
        function () {

            if (this.files.length > 0) {

                fileName.textContent =
                    this.files[0].name;

                fileText.textContent =
                    "Document sélectionné ✓";

            }

        }
    );



    /* =====================================================
       RECHERCHE
    ===================================================== */

    const rechercheCours =
        document.getElementById("rechercheCours");


    const filtreCategorie =
        document.getElementById("filtreCategorie");


    function filtrerCours() {

        const recherche =
            rechercheCours.value
                .toLowerCase()
                .trim();


        const categorie =
            filtreCategorie.value
                .toLowerCase()
                .trim();


        const lignes =
            document.querySelectorAll(
                "#tableauCours .course-row"
            );


        lignes.forEach(
            function (ligne) {

                const texte =
                    ligne.textContent
                        .toLowerCase();


                const correspondRecherche =
                    texte.includes(recherche);


                const correspondCategorie =
                    categorie === "" ||
                    texte.includes(categorie);


                if (
                    correspondRecherche &&
                    correspondCategorie
                ) {

                    ligne.style.display = "";

                } else {

                    ligne.style.display = "none";

                }

            }
        );

    }


    rechercheCours.addEventListener(
        "input",
        filtrerCours
    );


    filtreCategorie.addEventListener(
        "change",
        filtrerCours
    );

</script>


</body>

</html>