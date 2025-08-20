<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample committee data
        $committees = [
            '<ul><li>Ahmed Benali - Coordinateur</li><li>Sofia Rahmani - Logistique</li><li>Youssef Amrani - Communication</li></ul>',
            '<ul><li>Fatima Zahra - Responsable</li><li>Mohammed Lamine - Trésorier</li><li>Aicha Nour - Animation</li></ul>',
        ];

        // Array of possible event statuses
        $statuses = ['upcoming', 'ongoing', 'finished'];

        // Event 1: LES JEUX CONCOURS ISLAMIQUES DES VACANCES 2025 (JCIV)
        $startDateJCIV = Carbon::create(2025, 8, 9, 8, 0, 0); // 9 août 2025, 08:00
        $endDateJCIV = Carbon::create(2025, 8, 9, 16, 0, 0);  // 9 août 2025, 16:00

        Event::create([
            'name' => 'LES JEUX CONCOURS ISLAMIQUES DES VACANCES 2025 (JCIV)',
            'description' => 'Rejoignez-nous pour les Jeux Concours Islamiques des Vacances 2025 (JCIV), une initiative vibrante organisée par la JMPI pour célébrer la foi, la connaissance et la camaraderie ! Cet événement unique offrira une journée enrichissante avec une conférence inspirante, des compétitions d\'art oratoire, le jeu Mou\'anz, une compétition coranique, une dictée française, et bien plus encore. Ouvert à tous, cet événement vise à renforcer les liens communautaires, encourager l\'excellence académique et spirituelle, et récompenser les participants avec de nombreux lots.',
            'start_date' => $startDateJCIV,
            'end_date' => $endDateJCIV,
            'location' => 'Collège Ben Rachid (Quartier Ladji Farani)',
            'participants_count' => 250,
            'status' => 'upcoming',
            'committee' => $committees[0],
            'program' => json_encode([
                ['activity' => 'Accueil et inscription', 'icon' => 'user-plus', 'time' => '08:00 - 08:30'],
                ['activity' => 'Conférence inspirante', 'icon' => 'microphone', 'time' => '08:30 - 09:15'],
                ['activity' => 'Art oratoire', 'icon' => 'book-open', 'time' => '09:15 - 10:00'],
                ['activity' => 'Jeu Mou\'anz (Culture Islamique)', 'icon' => 'gamepad', 'time' => '10:00 - 10:45'],
                ['activity' => 'Pause', 'icon' => 'coffee', 'time' => '10:45 - 11:00'],
                ['activity' => 'Compétition Coranique', 'icon' => 'quran', 'time' => '11:00 - 12:00'],
                ['activity' => 'Dictée française', 'icon' => 'pencil-alt', 'time' => '12:00 - 12:45'],
                ['activity' => 'Pause déjeuner', 'icon' => 'utensils', 'time' => '12:45 - 14:00'],
                ['activity' => 'Activités libres', 'icon' => 'ellipsis-h', 'time' => '14:00 - 15:00'],
                ['activity' => 'Remise des prix', 'icon' => 'gift', 'time' => '15:00 - 15:30'],
                ['activity' => 'Clôture et prières', 'icon' => 'hands-prayer', 'time' => '15:30 - 16:00'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Event 2: Séminaire sur l’Islam et la Modernité
        $startDateSeminar = Carbon::create(2025, 9, 15, 9, 0, 0); // 15 septembre 2025, 09:00
        $endDateSeminar = Carbon::create(2025, 9, 15, 13, 0, 0);  // 15 septembre 2025, 13:00

        Event::create([
            'name' => 'Séminaire sur l’Islam et la Modernité',
            'description' => 'Participez à notre séminaire dédié à l’exploration de la compatibilité entre les principes islamiques et les défis de la modernité. Cet événement, animé par des experts et des érudits, abordera des sujets comme la technologie, l’éducation et les valeurs éthiques dans un monde contemporain. Une session de questions-réponses et un débat interactif sont également au programme pour enrichir les échanges.',
            'start_date' => $startDateSeminar,
            'end_date' => $endDateSeminar,
            'location' => 'Centre Mosquée Al-Nour',
            'participants_count' => 150,
            'status' => 'upcoming',
            'committee' => $committees[1],
            'program' => json_encode([
                ['activity' => 'Accueil et café', 'icon' => 'coffee', 'time' => '09:00 - 09:30'],
                ['activity' => 'Conférence principale', 'icon' => 'microphone', 'time' => '09:30 - 10:45'],
                ['activity' => 'Pause', 'icon' => 'coffee', 'time' => '10:45 - 11:00'],
                ['activity' => 'Débat interactif', 'icon' => 'comments', 'time' => '11:00 - 12:00'],
                ['activity' => 'Clôture et prières', 'icon' => 'hands-prayer', 'time' => '12:00 - 13:00'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}