<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert 3 Kategori Event
        $catTeknologi = \App\Models\Category::create(['name' => 'Teknologi', 'slug' => 'teknologi']);
        $catHiburan = \App\Models\Category::create(['name' => 'Hiburan', 'slug' => 'hiburan']);
        $catKreatif = \App\Models\Category::create(['name' => 'Kreatif & Desain', 'slug' => 'kreatif-desain']);

        // 3. Insert 6 Sampel Events
        // Event 1 (Teknologi)
        \App\Models\Event::create([
            'category_id' => $catTeknologi->id,
            'title' => 'Hackathon: Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        // Event 2 (Teknologi)
        \App\Models\Event::create([
            'category_id' => $catTeknologi->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 75000,
            'stock' => 150,
            'poster_path' => 'posters/event-3.png',
        ]);

        // Event 3 (Hiburan)
        \App\Models\Event::create([
            'category_id' => $catHiburan->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        // Event 4 (Hiburan)
        \App\Models\Event::create([
            'category_id' => $catHiburan->id,
            'title' => 'E-Sport U-Champ: Mobile Legends',
            'description' => 'Turnamen kampus terbesar tahun ini. Buktikan timmu yang terbaik!',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Ruang Citra 1',
            'price' => 25000,
            'stock' => 500,
            'poster_path' => 'posters/esport.png',
        ]);

        // Event 5 (Kreatif)
        \App\Models\Event::create([
            'category_id' => $catKreatif->id,
            'title' => 'UI/UX Masterclass for Beginners',
            'description' => 'Belajar langsung dari praktisi industri cara merancang antarmuka aplikasi yang intuitif.',
            'date' => '2026-05-20 13:00:00',
            'location' => 'Lab Komputer 4',
            'price' => 100000,
            'stock' => 40,
            'poster_path' => 'posters/uiux.png',
        ]);

        // Event 6 (Kreatif)
        \App\Models\Event::create([
            'category_id' => $catKreatif->id,
            'title' => 'Digital Marketing Bootcamp',
            'description' => 'Kuasai teknik SEO, Ads, dan Social Media management dalam 2 hari.',
            'date' => '2026-06-01 08:00:00',
            'location' => 'Ruang Kelas 2.3',
            'price' => 150000,
            'stock' => 60,
            'poster_path' => 'posters/marketing.png',
        ]);
    }
}
