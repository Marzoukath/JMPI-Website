<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event->name }} - JMPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        /* Event Detail Section - Simplified Design */
        .event-detail-section {
            background: linear-gradient(135deg, var(--green-50), var(--cyan-50));
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .event-detail-section::before {
            content: "";
            position: absolute;
            top: -40px;
            left: -40px;
            right: -40px;
            bottom: -40px;
            background: radial-gradient(circle at 50% 50%, rgba(16, 185, 129, 0.1), transparent);
            opacity: 0.7;
        }

        .event-detail-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .event-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .event-logos {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .event-logo {
            width: 80px;
            height: 80px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-md);
        }

        .event-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--green-700);
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .event-subtitle {
            font-size: 1.3rem;
            color: var(--gray-600);
            margin-bottom: 1.5rem;
        }

        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 2rem;
            justify-content: center;
        }

        .event-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            color: var(--gray-700);
            font-weight: 500;
            padding: 10px 20px;
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            transition: all var(--transition-normal);
        }

        .event-meta span:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .event-meta i {
            color: var(--blue-500);
            font-size: 1.2rem;
        }

        .event-section {
            margin-bottom: 2.5rem;
            padding: 25px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            transition: all var(--transition-normal);
        }

        .event-section:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .event-section h3 {
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--green-600);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .event-section h3 i {
            color: var(--orange-500);
            font-size: 1.5rem;
        }

        .event-program-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .event-program-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid var(--gray-100);
            color: var(--gray-800);
            font-size: 1.1rem;
            transition: all var(--transition-normal);
        }

        .event-program-item i {
            color: var(--cyan-500);
            font-size: 1.5rem;
        }

        .event-program-item:hover {
            color: var(--green-600);
            transform: translateX(5px);
        }

        .event-prizes {
            text-align: center;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--orange-600);
            padding: 15px;
            background: var(--orange-50);
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
        }

        .event-prizes i {
            font-size: 1.5rem;
            margin-right: 8px;
        }

        .event-sidebar {
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid var(--gray-100);
            box-shadow: var(--shadow-md);
            transition: all var(--transition-normal);
            position: sticky;
            top: 100px;
        }

        .event-sidebar:hover {
            box-shadow: var(--shadow-lg);
        }

        .event-sidebar h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .event-sidebar p {
            color: var(--gray-700);
            font-size: 1rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid var(--gray-100);
        }

        .event-sidebar p strong {
            color: var(--gray-900);
            font-weight: 600;
        }

        .event-sidebar .btn {
            width: 100%;
            padding: 15px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            transition: all var(--transition-normal);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: var(--shadow-sm);
        }

        .event-sidebar .btn-primary {
            background: var(--gradient-green);
            color: var(--white);
            border: none;
        }

        .event-sidebar .btn-primary:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-md);
            background: var(--green-700);
        }

        .event-sidebar .btn-sponsor {
            background: var(--gradient-orange);
            color: var(--white);
            border: none;
        }

        .event-sidebar .btn-sponsor:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-md);
            background: var(--orange-700);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .event-sidebar {
                position: static;
                top: auto;
            }
        }

        @media (max-width: 992px) {
            .event-detail-section {
                padding: 80px 0 50px;
            }

            .event-title {
                font-size: 2rem;
            }

            .event-section {
                padding: 20px;
            }

            .event-sidebar {
                padding: 25px;
                margin-top: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .event-detail-section {
                padding: 60px 0 40px;
            }

            .event-title {
                font-size: 1.8rem;
            }

            .event-meta {
                flex-direction: column;
                gap: 10px;
            }

            .event-section h3 {
                font-size: 1.4rem;
            }

            .event-sidebar {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .event-title {
                font-size: 1.5rem;
            }

            .event-subtitle {
                font-size: 1.1rem;
            }

            .event-meta span {
                font-size: 0.95rem;
                padding: 8px 15px;
            }

            .event-section h3 {
                font-size: 1.2rem;
            }

            .event-program-item {
                font-size: 1rem;
            }

            .event-prizes {
                font-size: 1.1rem;
            }

            .event-sidebar h3 {
                font-size: 1.2rem;
            }

            .event-sidebar p {
                font-size: 0.95rem;
            }
        }

        /* RTL Support */
        [dir="rtl"] .event-meta {
            flex-direction: row-reverse;
        }

        [dir="rtl"] .event-meta span {
            flex-direction: row-reverse;
        }

        [dir="rtl"] .event-section h3 {
            flex-direction: row-reverse;
        }

        [dir="rtl"] .event-program-item {
            text-align: right;
        }

        [dir="rtl"] .event-sidebar {
            text-align: right;
        }

        /* Print Styles */
        @media print {
            .event-sidebar .btn {
                display: none;
            }

            .event-detail-main,
            .event-sidebar {
                box-shadow: none;
                border: 1px solid var(--gray-300);
            }

            .event-meta,
            .event-program-item {
                break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation (same as events.blade.php) -->
    @include('layouts.navigation')
    <!-- Event Detail -->
    <section class="event-detail-section">
        <div class="event-detail-container">
            <div class="event-header">
                <div class="event-logos">
                    <div class="event-logo">
                        <i class="fas fa-mosque text-green-500 text-2xl"></i>
                    </div>
                    <div class="event-logo">
                        <i class="fas fa-users text-blue-500 text-2xl"></i>
                    </div>
                </div>
                <h1 class="event-title">{{ $event->name }}</h1>
                <p class="event-subtitle">Organisé par Jeunesse Musulmane pour la Promotion de l'Islam (JMPI)</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-section">
                        <div class="event-meta">
                            <span><i class="fas fa-calendar-day"></i> Samedi 9 Aout 2025</span>
                            <span><i class="fas fa-clock"></i> 8h 00</span>
                            <span><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</span>
                        </div>
                        <div class="event-description mt-4">
                            <h3><i class="fas fa-info-circle"></i> Description</h3>
                            <p>{{ $event->description }}</p>
                        </div>
                        <div class="event-program mt-4">
                            <h3><i class="fas fa-list-ul"></i> Au Programme</h3>
                            <ul class="event-program-list">
                                @if (isset($event->program) && is_array($event->program))
                                    @foreach ($event->program as $item)
                                        <li class="event-program-item">
                                            <i class="fas fa-{{ $item['icon'] ?? 'check' }}"></i>
                                            {{ $item['activity'] }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="event-program-item">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Aucun programme spécifié pour cet événement.
                                    </li>
                                @endif
                            </ul>
                            <div class="event-prizes mt-3">
                                <i class="fas fa-gift"></i> De nombreux lots à remporter !!!
                            </div>
                        </div>
                        <div class="event-committee mt-4">
                            <h3><i class="fas fa-user-friends"></i> Comité d'Organisation</h3>
                            {!! $event->committee ?? '<p>Aucun comité spécifié</p>' !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-sidebar">
                        <h3>Informations</h3>
                        <p><strong>Statut :</strong> 
                            @if($event->status === 'upcoming')
                                À venir
                            @elseif($event->status === 'finished')
                                Terminé
                            @elseif($event->status === 'ongoing')
                                En cours
                            @endif
                        </p>
                        <p><strong>Participants :</strong> {{ $event->participants_count }}</p>
                        <p><strong>Téléphone :</strong> +229 01 61 76 51 01 / +229 01 96 92 75 20</p>
                        {{-- <button class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> S'inscrire
                        </button>
                        <button class="btn btn-sponsor">
                            <i class="fas fa-handshake"></i> Sponsoriser
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>