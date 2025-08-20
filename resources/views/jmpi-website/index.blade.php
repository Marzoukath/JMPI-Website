<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMPI - Jeunesse Musulmane pour la Promotion de l'Islam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="floating-elements">
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>
                <div class="floating-shape shape-4"></div>
                <div class="floating-shape shape-5"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="hero-badge" data-key="hero-badge">
                            <i class="fas fa-star"></i>
                            <span>Organisation Islamique</span>
                        </div>
                        <h1 class="hero-title" data-key="hero-title">Jeunesse Musulmane pour la Promotion de l'Islam</h1>
                        <p class="hero-subtitle" data-key="hero-subtitle">Ensemble, nous bâtissons un avenir radieux en promouvant les valeurs islamiques authentiques et en développant le potentiel de notre jeunesse dynamique.</p>
                        <div class="hero-buttons">
                            <a href="#presentation" class="btn btn-primary btn-lg" data-key="discover">
                                <span>Découvrir</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('events') }}" class="btn btn-outline-light btn-lg" data-key="events">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Événements</span>
                            </a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">50+</div>
                                    <div class="stat-label" data-key="members">Membres</div>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">5+</div>
                                    <div class="stat-label" data-key="events-count">Événements</div>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">3+</div>
                                    <div class="stat-label" data-key="years">Années</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual">
                        <div class="hero-cards">
                            <div class="hero-card card-primary">
                                <div class="card-icon">
                                    <i class="fas fa-mosque"></i>
                                </div>
                                <h3 data-key="mission">Mission</h3>
                                <p data-key="mission-short">Promouvoir l'Islam authentique</p>
                            </div>
                            <div class="hero-card card-secondary">
                                <div class="card-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h3 data-key="community">Communauté</h3>
                                <p data-key="community-short">Rassembler la jeunesse</p>
                            </div>
                            <div class="hero-card card-tertiary">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 data-key="education">Éducation</h3>
                                <p data-key="education-short">Former et sensibiliser</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-text" data-key="scroll-down">Découvrir plus</div>
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Presentation Section -->
    <section id="presentation" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <div class="section-header">
                        <span class="section-badge" data-key="about-badge">À propos</span>
                        <h2 class="section-title" data-key="about-title">Découvrez JMPI</h2>
                        <p class="section-subtitle" data-key="about-subtitle">Une organisation dédiée à l'épanouissement spirituel et social de la jeunesse musulmane</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="content-card">
                            <div class="content-icon green">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="content-text">
                                <h3 data-key="mission-title">Notre Mission</h3>
                                <p data-key="mission-text">La Jeunesse Musulmane pour la Promotion de l'Islam (JMPI) œuvre pour transmettre les valeurs islamiques authentiques aux jeunes générations, en créant un environnement propice à leur développement spirituel, intellectuel et social.</p>
                            </div>
                        </div>
                        
                        <div class="content-card">
                            <div class="content-icon blue">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="content-text">
                                <h3 data-key="vision-title">Notre Vision</h3>
                                <p data-key="vision-text">Être une référence dans l'éducation islamique des jeunes et contribuer à former une génération consciente, responsable et engagée dans la construction d'une société meilleure.</p>
                            </div>
                        </div>

                        <div class="content-card">
                            <div class="content-icon orange">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content-text">
                                <h3 data-key="values-title">Nos Valeurs</h3>
                                <p data-key="values-text">Authenticité, solidarité, excellence, respect et engagement sont les piliers qui guident toutes nos actions et initiatives au service de la communauté.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-visual">
                        <div class="stats-grid">
                            <div class="stat-card green">
                                <div class="stat-icon">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="stat-number">50+</div>
                                <div class="stat-label" data-key="active-members">Membres Actifs</div>
                            </div>
                            <div class="stat-card blue">
                                <div class="stat-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="stat-number">5+</div>
                                <div class="stat-label" data-key="annual-events">Événements Annuels</div>
                            </div>
                            <div class="stat-card cyan">
                                <div class="stat-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="stat-number">3+</div>
                                <div class="stat-label" data-key="experience-years">Années d'Expérience</div>
                            </div>
                            <div class="stat-card orange">
                                <div class="stat-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="stat-number">25+</div>
                                <div class="stat-label" data-key="programs">Programmes</div>
                            </div>
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
                <div class="section-header">
                    <span class="section-badge cyan" data-key="team-badge">Équipe</span>
                    <h2 class="section-title" data-key="bureau-title">Notre Bureau Exécutif</h2>
                    <p class="section-subtitle" data-key="bureau-subtitle">Une équipe dévouée et expérimentée au service de la communauté</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card">
                    <div class="team-image green">
                        <div class="image-placeholder">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="team-overlay">
                            <div class="social-links">
                                {{-- Lien WhatsApp --}}
                                <a href="https://wa.me/2290196927520" class="social-link" target="_blank" aria-label="Contactez sur WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                {{-- Lien Email --}}
                                <a href="habibchabi11@gmail.com" class="social-link" aria-label="Envoyer un email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                {{-- Lien Téléphone --}}
                                <a href="tel:+2290195830948" class="social-link" aria-label="Appeler">
                                    <i class="fas fa-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>CHABI Habib</h4>
                        <p class="position" data-key="president">Président</p>
                    </div>
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
                    <div class="section-header">
                        <span class="section-badge orange" data-key="inspiration-badge">Inspiration</span>
                        <h2 class="section-title" data-key="daily-word">Mot du Jour</h2>
                        <p class="section-subtitle" data-key="daily-word-subtitle">Une réflexion quotidienne pour nourrir l'âme et l'esprit</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="daily-word-container">
                        <div class="quote-card">
                            <div class="quote-decoration">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="quote-pattern"></div>
                            </div>
                            <blockquote class="daily-quote" data-key="daily-quote">
                                {{ $quote->text }}
                            </blockquote>
                            <div class="quote-footer">
                                <cite class="quote-source" data-key="quote-source">{{ $quote->reference }}</cite>
                                <div class="quote-date" id="current-date">{{ $currentDate }}</div>
                            </div>
                        </div>
                        <div class="reflection-card">
                            <div class="reflection-header">
                                <div class="reflection-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4 data-key="reflection-title">Réflexion</h4>
                            </div>
                            <p data-key="reflection-text">{{ $quote->reflexion }}</p>
                        </div>
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
                    <div class="section-header">
                        <span class="section-badge blue" data-key="contact-badge">Contact</span>
                        <h2 class="section-title" data-key="contact-title">Contactez-nous</h2>
                        <p class="section-subtitle" data-key="contact-subtitle">Nous sommes là pour répondre à vos questions et vous accompagner</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-card">
                            <div class="contact-item">
                                <div class="contact-icon green">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h5 data-key="address">Adresse</h5>
                                    <p>Parakou, Okédama</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon blue">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h5 data-key="phone">Téléphone</h5>
                                    <p>+229 0196927520</p>
                                    <p>+229 0144906072</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon cyan">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h5>Email</h5>
                                    <p>habibchabi11@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon orange">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-details">
                                    <h5 data-key="hours">Horaires</h5>
                                    <p data-key="hours-text">8h00 - 12h00<br> 15h00 - 18h00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="contact-form-container">
                         <div class="contact-form-container">
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
                       <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" data-key="name-label">Nom complet</label>
                                <input type="text" id="name" name="name" class="form-control" data-key-placeholder="your-name" placeholder="Votre nom complet" required>
                            </div>
                            <div class="form-group">
                                <label for="email" data-key="email-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" data-key-placeholder="your-email" placeholder="votre.email@exemple.com" required>
                            </div>
                            <div class="form-group">
                                <label for="subject" data-key="subject-label">Sujet</label>
                                <input type="text" id="subject" name="subject" class="form-control" data-key-placeholder="subject" placeholder="Sujet de votre message" required>
                            </div>
                            <div class="form-group">
                                <label for="message" data-key="message-label">Message</label>
                                <textarea id="message" name="message" class="form-control" rows="5" data-key-placeholder="your-message" placeholder="Votre message..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100" data-key="send">
                                <span>Envoyer le message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js')  }}"></script>
</body>
</html>
