<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - JMPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="formulaire-section">
        <div class="container formulaire-container">
            <h1>Formulaire d'Événement</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('formulaire.submit') }}" method="POST" id="formulaire">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required class="form-control" placeholder="Nom de l'événement">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" required class="form-control" placeholder="Description de l'événement"></textarea>
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="start_date">Date de début</label>
                    <input type="date" id="start_date" name="start_date" required class="form-control">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="end_date">Date de fin</label>
                    <input type="date" id="end_date" name="end_date" required class="form-control">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="location">Lieu</label>
                    <input type="text" id="location" name="location" required class="form-control" placeholder="Lieu de l'événement">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="participants_count">Nombre de participants</label>
                    <input type="number" id="participants_count" name="participants_count" min="0" required class="form-control">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" name="status" required class="form-control">
                        <option value="ongoing">En cours</option>
                        <option value="completed">Terminé</option>
                        <option value="cancelled">Annulé</option>
                    </select>
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="form-group">
                    <label for="comite">Comité</label>
                    <input type="text" id="comite" name="comite" required class="form-control" placeholder="Comité d'organisation">
                    <div class="invalid-feedback d-none"></div>
                </div>
                <div class="formulaire-buttons">
                    <button type="submit" class="btn btn-primary">
                        <span>Soumettre</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                   
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>