<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EDUNOVA IA - Mon IA</title>

    <link rel="stylesheet" href="/etudiant/dashboard.css">
    <link rel="stylesheet" href="/etudiant/assistant.css">
</head>

<body>

<div class="student-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <div class="logo-icon">🎓</div>

            <div class="logo-text">
                <h2>EDUNOVA</h2>
                <span>Plateforme éducative</span>
            </div>
        </div>

        <div class="profile-mini">

            <div class="avatar">
                👩‍🎓
            </div>

            <div>
                <strong>
                    {{ $etudiant->prenom }}
                </strong>

                <small>
                    Étudiant(e)
                </small>
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

            <a href="/etudiant/profil_apprentissage">
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

            <a href="/etudiant/ia" class="active">
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

        <div class="sidebar-bottom">

            <form method="POST" action="/logout">

                @csrf

                <button type="submit" class="logout">
                    <span>🚪</span>
                    Déconnexion
                </button>

            </form>

        </div>

    </aside>


    <!-- CONTENU -->
    <main class="main-content">

        <header class="topbar">

            <div class="page-title">

                <h1>
                    Mon assistant IA 🤖
                </h1>

                <p>
                    Bonjour {{ $etudiant->prenom }}, ton espace d'apprentissage intelligent.
                </p>

            </div>

            <div class="student-user">

                <div class="user-avatar">
                    {{ strtoupper(substr($etudiant->prenom, 0, 1)) }}
                </div>

                <div>

                    <strong>
                        {{ $etudiant->prenom }}
                    </strong>

                    <small>
                        Étudiant(e)
                    </small>

                </div>

            </div>

        </header>


        <!-- INTRODUCTION IA -->
        <section class="ia-header">

            <div class="ia-icon">
                🤖
            </div>

            <div>

                <span>EDUNOVA IA</span>

                <h2>
                    Ton assistant pédagogique intelligent
                </h2>

                <p>
                    Pose tes questions, demande une explication,
                    génère des exercices et découvre des recommandations
                    adaptées à ton apprentissage.
                </p>

            </div>

        </section>


        <!-- INFORMATIONS RÉELLES -->
        <section class="stats-grid">

            <div class="stat-card">

                <div class="stat-icon">
                    📚
                </div>

                <div>

                    <small>
                        Cours disponibles
                    </small>

                    <strong>
                        {{ $nombreCours }}
                    </strong>

                    <p>
                        Données EDUNOVA
                    </p>

                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    📝
                </div>

                <div>

                    <small>
                        Examens disponibles
                    </small>

                    <strong>
                        {{ $nombreExamens }}
                    </strong>

                    <p>
                        Données EDUNOVA
                    </p>

                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    🧠
                </div>

                <div>

                    <small>
                        Profil d'apprentissage
                    </small>

                    <strong>
                        À compléter
                    </strong>

                    <p>
                        L'IA pourra ensuite s'adapter
                    </p>

                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    📊
                </div>

                <div>

                    <small>
                        Statistiques
                    </small>

                    <strong>
                        Données réelles
                    </strong>

                    <p>
                        Générées à partir de l'activité
                    </p>

                </div>

            </div>

        </section>


        <!-- ZONE IA -->
        <section class="ia-grid">


            <!-- CONVERSATION -->
            <div class="ia-card conversation-card">

                <div class="card-header">

                    <div>

                        <span class="card-label">
                            ASSISTANT
                        </span>

                        <h2>
                            💬 Pose ta question
                        </h2>

                        <p>
                            L'assistant pourra t'aider dans tes apprentissages.
                        </p>

                    </div>

                </div>


                <div class="chat-area" id="chat-area">

    <div class="ia-message">
        <div class="message-avatar">🤖</div>
        <div class="message-content">
            <strong>EDUNOVA IA</strong>
            <p>Bonjour {{ $etudiant->name }} 👋 Je suis ton assistant pédagogique.
               Tu peux me demander une explication, un exercice ou de l'aide sur un cours.</p>
        </div>
    </div>

</div>

                <!-- ZONE DE SAISIE -->
                <div class="chat-input">

                    <input
                        type="text"
                        name="question"
                        id="question"
                        placeholder="Écris ta question..."
                    >

                    <button type="button" id="send-question">
                        Envoyer
                    </button>

                </div>

                <small class="ia-info">
                    Écris ta question dans le champ ci-dessus pour commencer.
                </small>

            </div>


            <!-- FONCTIONNALITÉS -->
            <div class="ia-card">

                <div class="card-header">

                    <div>

                        <span class="card-label">
                            OUTILS IA
                        </span>

                        <h2>
                            🧠 Mon apprentissage
                        </h2>

                    </div>

                </div>

<div class="ia-option" data-mode="expliquer">
    <div class="option-icon">📚</div>
    <div>
        <h3>Explication de cours</h3>
        <p>Obtenir une explication adaptée à ton niveau.</p>
    </div>
</div>

<div class="ia-option" data-mode="exercices">
    <div class="option-icon">📝</div>
    <div>
        <h3>Génération d'exercices</h3>
        <p>Générer des exercices à partir des cours disponibles.</p>
    </div>
</div>

<div class="ia-option" data-mode="recommander">
    <div class="option-icon">💡</div>
    <div>
        <h3>Recommandations personnalisées</h3>
        <p>Identifier les ressources pertinentes selon ton apprentissage.</p>
    </div>
</div>

<!-- MODAL -->
<div id="modal-cours" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:9999;">
    <div style="background:#fff; max-width:650px; margin:5vh auto; padding:20px; border-radius:12px; max-height:90vh; overflow:auto;">

        <div style="display:flex; justify-content:space-between; align-items:center;">
            <h3 id="modal-titre"></h3>
            <button type="button" id="modal-fermer">✕</button>
        </div>

        <!-- Étape 1 : choix du cours -->
        <div id="vue-liste"></div>

        <!-- Étape 2 : résultat de l'IA -->
        <div id="vue-resultat" style="display:none;">
            <button type="button" id="btn-retour">← Choisir un autre cours</button>
            <h4 id="cours-choisi" style="margin:10px 0;"></h4>
            <div id="resultat-ia" style="white-space:pre-wrap;"></div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const csrf      = document.querySelector('meta[name="csrf-token"]')?.content;
    const BASE      = "{{ url('/etudiant/ia/cours') }}";
    const modal     = document.getElementById('modal-cours');
    const vueListe  = document.getElementById('vue-liste');
    const vueRes    = document.getElementById('vue-resultat');
    const resultat  = document.getElementById('resultat-ia');
    const titres = {
        expliquer:   'Quel cours veux-tu comprendre ?',
        exercices:   'Sur quel cours veux-tu des exercices ?',
        recommander: 'Pour quel cours veux-tu des recommandations ?'
    };
    let mode = null;

    function montrerListe() {
        vueRes.style.display = 'none';
        vueListe.style.display = 'block';
        document.getElementById('modal-titre').textContent = titres[mode];
    }

    // 1) clic sur une option -> ouvre le modal avec les cours
    document.querySelectorAll('.ia-option[data-mode]').forEach(opt => {
        opt.style.cursor = 'pointer';
        opt.addEventListener('click', async () => {
            mode = opt.dataset.mode;
            modal.style.display = 'block';
            montrerListe();
            vueListe.textContent = 'Chargement des cours...';

            try {
                const res = await fetch(BASE, { headers: { 'Accept': 'application/json' } });
                if (!res.ok) throw new Error('HTTP ' + res.status);
                const cours = await res.json();

                vueListe.innerHTML = '';
                if (!cours.length) {
                    vueListe.textContent = 'Aucun cours disponible pour ta classe.';
                    return;
                }

                cours.forEach(c => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.style.cssText = 'display:block; width:100%; text-align:left; margin:6px 0; padding:12px; cursor:pointer;';
                    const t = document.createElement('strong');
                    t.textContent = c.titre;
                    const d = document.createElement('small');
                    d.textContent = c.description ?? '';
                    btn.append(t, document.createElement('br'), d);
                    btn.addEventListener('click', () => lancer(c));
                    vueListe.appendChild(btn);
                });
            } catch (e) {
                console.error(e);
                vueListe.textContent = 'Impossible de charger les cours.';
            }
        });
    });

    // 2) clic sur un cours -> l'IA intervient
    async function lancer(c) {
        vueListe.style.display = 'none';
        vueRes.style.display = 'block';
        document.getElementById('cours-choisi').textContent = c.titre;
        resultat.textContent = "⏳ L'IA analyse le cours...";

        try {
            const res = await fetch(`${BASE}/${c.id}/${mode}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ nombre: 5, difficulte: 'moyen' })
            });

            const data = await res.json().catch(() => ({}));
            resultat.innerHTML = '';

            if (!res.ok || !data.success) {
                resultat.textContent = data.message ?? 'Une erreur est survenue.';
                return;
            }

            if (mode === 'exercices') {
                afficherExercices(data.exercices, resultat);
            } else {
                resultat.textContent = data.message;
            }
        } catch (e) {
            console.error(e);
            resultat.textContent = 'Erreur réseau, réessaie.';
        }
    }

    document.getElementById('btn-retour').addEventListener('click', montrerListe);
    document.getElementById('modal-fermer').addEventListener('click', () => modal.style.display = 'none');
});

function afficherExercices(exercices, conteneur) {
    exercices.forEach((ex, i) => {
        const carte = document.createElement('div');
        carte.style.cssText = 'border:1px solid #ddd; border-radius:8px; padding:12px; margin:10px 0; white-space:normal;';

        const titre = document.createElement('strong');
        titre.textContent = `Exercice ${i + 1}`;
        const enonce = document.createElement('p');
        enonce.textContent = ex.enonce;
        carte.append(titre, enonce);

        if (Array.isArray(ex.choix) && ex.choix.length) {
            const ul = document.createElement('ul');
            ex.choix.forEach(ch => {
                const li = document.createElement('li');
                li.textContent = ch;
                ul.appendChild(li);
            });
            carte.appendChild(ul);
        }

        [['💡 Indice', ex.indice], ['✅ Correction', ex.correction]].forEach(([label, texte]) => {
            if (!texte) return;
            const d = document.createElement('details');
            const s = document.createElement('summary');
            s.textContent = label;
            const p = document.createElement('p');
            p.textContent = texte;
            d.append(s, p);
            carte.appendChild(d);
        });

        conteneur.appendChild(carte);
    });
}
</script>

                <div class="ia-option">

                    <div class="option-icon">
                        📊
                    </div>

                    <div>

                        <h3>
                            Génération de statistiques
                        </h3>

                        <p>
                            Analyser les données réellement disponibles
                            sur ton activité et ta progression.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- COURS UTILISÉS PAR L'IA -->
        <section class="ia-card courses-section">

            <div class="card-header">

                <div>

                    <span class="card-label">
                        BASE DE CONNAISSANCES
                    </span>

                    <h2>
                        📚 Cours disponibles pour l'IA
                    </h2>

                    <p>
                        Ces cours proviennent directement de la base de données EDUNOVA.
                    </p>

                </div>

            </div>


            @if($cours->count() > 0)

                <div class="course-list">

                    @foreach($cours as $cour)

                        <div class="course-item">

                            <div class="course-icon">
                                📖
                            </div>

                            <div class="course-info">

                                <h3>
                                    {{ $cour->titre }}
                                </h3>

                                <p>
                                    {{ $cour->description ?: 'Aucune description disponible.' }}
                                </p>

                                @if(!empty($cour->classe))

                                    <small>
                                        Classe : {{ $cour->classe }}
                                    </small>

                                @endif

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="empty-state">

                    <div>
                        📚
                    </div>

                    <h3>
                        Aucun cours disponible
                    </h3>

                    <p>
                        L'IA ne dispose actuellement d'aucun cours publié dans EDUNOVA.
                    </p>

                </div>

            @endif

        </section>


        <!-- STATISTIQUES -->
        <section class="ia-card statistics-section">

            <div class="card-header">

                <div>

                    <span class="card-label">
                        ANALYSE IA
                    </span>

                    <h2>
                        📊 Statistiques d'apprentissage
                    </h2>

                    <p>
                        Les statistiques seront calculées uniquement à partir
                        des données réellement enregistrées.
                    </p>

                </div>

            </div>


            <div class="statistics-grid">

                <div class="statistics-item">

                    <span>
                        📚
                    </span>

                    <strong>
                        {{ $nombreCours }}
                    </strong>

                    <small>
                        cours disponibles
                    </small>

                </div>


                <div class="statistics-item">

                    <span>
                        📝
                    </span>

                    <strong>
                        {{ $nombreExamens }}
                    </strong>

                    <small>
                        examens disponibles
                    </small>

                </div>


                <div class="statistics-item">

                    <span>
                        ⏱️
                    </span>

                    <strong>
                        Non disponible
                    </strong>

                    <small>
                        temps d'étude enregistré
                    </small>

                </div>


                <div class="statistics-item">

                    <span>
                        📈
                    </span>

                    <strong>
                        Non disponible
                    </strong>

                    <small>
                        progression calculable
                    </small>

                </div>

            </div>

        </section>


    </main>

</div>


<script>
(function () {
    const input = document.getElementById('question');
    const sendBtn = document.getElementById('send-question');
    const chatArea = document.getElementById('chat-area');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    function addMessage(role, text) {
        const wrapper = document.createElement('div');
        wrapper.className = role === 'user' ? 'user-message' : 'ia-message';

        wrapper.innerHTML = `
            <div class="message-avatar">${role === 'user' ? '🧑‍🎓' : '🤖'}</div>
            <div class="message-content">
                <strong>${role === 'user' ? 'Toi' : 'EDUNOVA IA'}</strong>
                <p></p>
            </div>
        `;
        wrapper.querySelector('p').textContent = text;

        chatArea.appendChild(wrapper);
        chatArea.scrollTop = chatArea.scrollHeight;
        return wrapper;
    }

    function setLoading(isLoading) {
        input.disabled = isLoading;
        sendBtn.disabled = isLoading;
        sendBtn.textContent = isLoading ? '...' : 'Envoyer';
    }

    async function sendQuestion() {
        const question = input.value.trim();
        if (!question) return;

        addMessage('user', question);
        input.value = '';
        setLoading(true);

        const thinkingMsg = addMessage('ia', 'Je réfléchis...');

        try {
            const response = await fetch('{{ route("etudiant.ia.ask") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ question }),
            });

            const data = await response.json();
            thinkingMsg.querySelector('p').textContent = data.message;

        } catch (error) {
            thinkingMsg.querySelector('p').textContent = "Erreur de connexion, réessaie.";
        } finally {
            setLoading(false);
            input.focus();
        }
    }

    sendBtn.addEventListener('click', sendQuestion);

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendQuestion();
        }
    });
})();
</script>

</body>
</html>