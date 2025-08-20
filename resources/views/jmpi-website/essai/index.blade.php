<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMPI - Jeunesse Musulmane pour la Promotion de l'Islam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#" id="logo">
                <div class="logo-container">
                     <i class="fas fa-mosque"></i>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <span data-key="jmpi">JMPI</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#presentation" data-key="presentation">Présentation</a></li>
                            <li><a class="dropdown-item" href="#bureau" data-key="bureau">Bureau</a></li>
                            <li><a class="dropdown-item" href="#mot-du-jour" data-key="mot-du-jour">Mot du jour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('events') }}" data-key="events">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-key="contact">Contactez-nous</a>
                    </li>
                </ul>
                
                <div class="language-selector">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i> <span id="current-lang">FR</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('fr')">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">🇬🇧 English</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">🇸🇦 العربية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title" data-key="hero-title">Jeunesse Musulmane pour la Promotion de l'Islam</h1>
                        <p class="hero-subtitle" data-key="hero-subtitle">Ensemble pour promouvoir les valeurs islamiques et construire un avenir meilleur pour notre communauté</p>
                        <div class="hero-buttons">
                            <a href="#presentation" class="btn btn-primary btn-lg me-3" data-key="discover">Découvrir</a>
                            <a href="events.html" class="btn btn-outline-light btn-lg" data-key="events">Événements</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="floating-card">
                            <i class="fas fa-mosque"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Presentation Section -->
    <section id="presentation" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title" data-key="about-title">À propos de JMPI</h2>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 data-key="mission-title">Notre Mission</h3>
                        <p data-key="mission-text">La Jeunesse Musulmane pour la Promotion de l'Islam (JMPI) est une organisation dédiée à la promotion des valeurs islamiques authentiques parmi les jeunes. Nous œuvrons pour créer un environnement d'apprentissage et de développement spirituel.</p>
                        
                        <h3 data-key="vision-title">Notre Vision</h3>
                        <p data-key="vision-text">Être une référence dans l'éducation islamique des jeunes et contribuer à former une génération consciente de ses responsabilités religieuses et sociales.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="stats-container">
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label" data-key="members">Membres</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label" data-key="events-count">Événements</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10+</div>
                            <div class="stat-label" data-key="years">Années</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bureau Section -->
    <section id="bureau" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title" data-key="bureau-title">Notre Bureau</h2>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Ahmed Benali</h4>
                        <p class="position" data-key="president">Président</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Fatima Zahra</h4>
                        <p class="position" data-key="vice-president">Vice-Présidente</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Omar Khalil</h4>
                        <p class="position" data-key="secretary">Secrétaire Général</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mot du Jour Section -->
    <section id="mot-du-jour" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title" data-key="daily-word">Mot du Jour</h2>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="daily-word-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <blockquote class="daily-quote" data-key="daily-quote">
                            "Et quiconque craint Allah, Il lui donnera une issue favorable, et lui accordera Ses dons par [des moyens] sur lesquels il ne comptait pas."
                        </blockquote>
                        <cite class="quote-source" data-key="quote-source"></cite>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title" data-key="contact-title">Contactez-nous</h2>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5 data-key="address">Adresse</h5>
                                <p>123 Rue de la Mosquée, Ville, Pays</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h5 data-key="phone">Téléphone</h5>
                                <p>+33 1 23 45 67 89</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5>Email</h5>
                                <p>contact@jmpi.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Votre nom" data-key-placeholder="your-name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Votre email" data-key-placeholder="your-email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Votre message" data-key-placeholder="your-message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" data-key="send">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 JMPI - Jeunesse Musulmane pour la Promotion de l'Islam. <span data-key="rights">Tous droits réservés.</span></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js')  }}"></script>
</body>
</html>
