<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - JMPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
@include('layouts.navigation')
    <!-- Events Header -->
    <section class="events-header">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="floating-elements">
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="page-header">
                        <span class="page-badge" data-key="events-badge">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Événements</span>
                        </span>
                        <h1 class="page-title" data-key="events-title">Nos Événements</h1>
                        <p class="page-subtitle" data-key="events-subtitle">Découvrez nos prochains événements et rejoignez notre communauté dynamique pour des moments enrichissants</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Filter -->
    <section class="events-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-container">
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-filter="all" data-key="all-events">
                                <i class="fas fa-th"></i>
                                <span>Tous les événements</span>
                            </button>
                            <button class="filter-btn" data-filter="upcoming" data-key="upcoming">
                                <i class="fas fa-calendar-plus"></i>
                                <span>À venir</span>
                            </button>
                            <button class="filter-btn" data-filter="ongoing" data-key="ongoing">
                                <i class="fas fa-spinner"></i>
                                <span>En cours</span>
                            </button>
                            <button class="filter-btn" data-filter="finished" data-key="finished">
                                <i class="fas fa-check-circle"></i>
                                <span>Terminé</span>
                            </button>
                        </div>
                        <div class="search-container">
                            <div class="search-box">
                                <i class="fas fa-search"></i>
                                <input type="text" id="searchInput" data-key-placeholder="search-events" placeholder="Rechercher un événement...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events List -->
    <section class="section-padding">
        <div class="container">
            <div class="events-grid" id="eventsGrid">
                @foreach($events as $event)
                    <div class="event-card-horizontal" data-status="{{ $event->status }}" onclick="openEventDetail({{ $event->id }})">
                        <div class="event-date-badge {{ $event->status === 'upcoming' ? 'green' : ($event->status === 'ongoing' ? 'blue' : 'orange') }}">
                            <div class="date-day">{{ \Carbon\Carbon::parse($event->start_date)->format('d') }}</div>
                            <div class="date-month">{{ \Carbon\Carbon::parse($event->start_date)->format('M') }}</div>
                            <div class="date-year">{{ \Carbon\Carbon::parse($event->start_date)->format('Y') }}</div>
                        </div>
                        <div class="event-image">
                            <div class="event-category {{ $event->status }}">
                                <i class="fas fa-{{ $event->status === 'upcoming' ? 'calendar-plus' : ($event->status === 'ongoing' ? 'spinner' : 'check-circle') }}"></i>
                                <span>
                                    @if($event->status === 'upcoming')
                                        À venir
                                    @elseif($event->status === 'ongoing')
                                        En cours
                                    @elseif($event->status === 'finished')
                                        Terminé
                                    @else
                                        {{ ucfirst($event->status) }}
                                    @endif
                                </span>
                            </div>
                            <div class="event-overlay"></div>
                            <div class="event-pattern"></div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">
                                    <i class="fas fa-clock"></i>
                                    {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }} - {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                                </span>
                                <span class="event-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $event->location }}
                                </span>
                            </div>
                            <h3 class="event-title">{{ $event->name }}</h3>
                            <p class="event-description">{{ Str::limit($event->description, 100) }}</p>
                            <div class="event-footer">
                                <div class="event-attendees">
                                    <div class="attendees-avatars">
                                        <div class="avatar green"><i class="fas fa-user"></i></div>
                                        <div class="avatar blue"><i class="fas fa-user"></i></div>
                                        <div class="avatar orange"><i class="fas fa-user"></i></div>
                                    </div>
                                    <span class="attendees-count">+{{ $event->participants_count }} participants</span>
                                </div>
                                <a href="{{ route('jmpi-website.show', $event->id) }}" class="btn btn-primary" data-key="view-more">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Voir plus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Event Detail Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title-container">
                        <h5 class="modal-title" id="eventModalTitle"></h5>
                        <div class="modal-meta">
                            <span id="eventModalDate"></span>
                            <span id="eventModalTime"></span>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="event-detail-container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="event-detail-content">
                                    <div class="event-info-section">
                                        <h6 data-key="event-details">
                                            <i class="fas fa-info-circle"></i>
                                            Détails de l'événement
                                        </h6>
                                        <div class="detail-grid">
                                            <div class="detail-item green">
                                                <i class="fas fa-calendar"></i>
                                                <div>
                                                    <strong data-key="date">Date</strong>
                                                    <span id="eventDate"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item blue">
                                                <i class="fas fa-clock"></i>
                                                <div>
                                                    <strong data-key="time">Heure</strong>
                                                    <span id="eventTime"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item orange">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div>
                                                    <strong data-key="location">Lieu</strong>
                                                    <span id="eventLocation"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item cyan">
                                                <i class="fas fa-users"></i>
                                                <div>
                                                    <strong data-key="capacity">Capacité</strong>
                                                    <span id="eventCapacity"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="event-description-section">
                                        <h6 data-key="description">
                                            <i class="fas fa-align-left"></i>
                                            Description
                                        </h6>
                                        <p id="eventDescription"></p>
                                    </div>

                                    <div class="event-program-section">
                                        <h6 data-key="program">
                                            <i class="fas fa-list-ul"></i>
                                            Programme
                                        </h6>
                                        <div id="eventProgram"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="event-sidebar">
                                    <div class="organization-committee">
                                        <h6 data-key="organization-committee">
                                            <i class="fas fa-user-friends"></i>
                                            Comité d'Organisation
                                        </h6>
                                        <div id="committeeList"></div>
                                    </div>
                                    
                                    <div class="event-sponsors">
                                        <h6 data-key="sponsors">
                                            <i class="fas fa-handshake"></i>
                                            Sponsors
                                        </h6>
                                        <div class="sponsors-grid">
                                            <div class="sponsor-slot">
                                                <i class="fas fa-plus"></i>
                                                <span data-key="become-sponsor">Devenez sponsor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sponsor btn-lg" data-key="sponsor-event">
                        <i class="fas fa-handshake"></i>
                        <span>Sponsoriser cet événement</span>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-key="register">
                        <i class="fas fa-user-plus"></i>
                        <span>S'inscrire</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        // Update filter functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelector('.filter-btn.active').classList.remove('active');
                button.classList.add('active');
                
                const filter = button.dataset.filter;
                const eventCards = document.querySelectorAll('.event-card-horizontal');
                
                eventCards.forEach(card => {
                    if (filter === 'all' || card.dataset.status === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const eventCards = document.querySelectorAll('.event-card-horizontal');
            
            eventCards.forEach(card => {
                const title = card.querySelector('.event-title').textContent.toLowerCase();
                const description = card.querySelector('.event-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>