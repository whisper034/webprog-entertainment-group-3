<?php

namespace Database\Seeders;

use App\Models\AboutInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // vision
        AboutInfo::insert([
            'type' => 'Vision',
            'description' => 'Unleashing the Power of K-Pop Worldwide',
            'created_at' => $nowDate
        ]);

        // mission
        AboutInfo::insert([
            'type' => 'Mission',
            'description' => "Celebrating K-Pop Excellence: Our mission is to provide a platform that celebrates the excellence of K-Pop artists, their music, and their performances. We aim to showcase the diverse talents and captivating entertainment that K-Pop has to offer.\n
            Global Engagement: We strive to connect K-Pop enthusiasts from around the world by delivering high-quality content, fostering a sense of community, and promoting cross-cultural exchange. Through our platform, we aim to bridge the gap between K-Pop artists and their international fanbase.\n
            Discovering New Talent: We are dedicated to scouting and nurturing emerging K-Pop talents, providing them with the guidance, resources, and opportunities needed to shine in the highly competitive industry. We aim to be a catalyst for discovering the next generation of K-Pop superstars.\n
            Elevating Fan Experiences: Our mission is to create unforgettable experiences for K-Pop fans by organizing interactive events, concerts, and fan meet-ups. We aim to cultivate an engaging and immersive environment that allows fans to connect with their favorite artists and fellow enthusiasts.\n
            Promoting Cultural Exchange: We believe in the power of K-Pop to transcend borders and promote cultural understanding. Through collaborations, partnerships, and philanthropic initiatives, we aim to contribute to the global appreciation and recognition of Korean culture.",
            'created_at' => $nowDate
        ]);
    }
}
