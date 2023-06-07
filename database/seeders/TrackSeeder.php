<?php

namespace Database\Seeders;

use App\Models\Track;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fifty-fifty --> album_id = 1
        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - \'Higher\'',
            'composer' => 'Matt Thomson, Max Lynedoch Graham, George Tizzard, James Birt, Rick Parkhouse, Moa "Cazzi Opeia" Carlebecker (Sunshine), Ellen Berg (Sunshine)',
            'lyrics_by' => '강은유 (ARTiffect), Keena, Moa "Cazzi Opeia" Carlebecker (Sunshine), Ellen Berg (Sunshine)',
            'arranger' => 'ARCADES, Red Triangle, James Birt',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Music Video - NAIVE'
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - \'Cupid\'',
            'composer' => 'Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'lyrics_by' => 'SIAHN, AHIN, KEENA, Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'arranger' => 'SIAHN, Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => null,
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jinsil Baek, Jeff Kim',
            'additional_data' => 'Music Video - Zanybros'
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - \'Tell Me\'',
            'composer' => 'Julia Ross, Adam Kapit, Hautboi Rich',
            'lyrics_by' => 'SIAHN, 이앵두(153joombas), Julia Allyn Ross',
            'arranger' => 'Adam Kapit, Julia Ross',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Lyric Video by Danny JY Lee'
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - \'Lovin\' Me’',
            'composer' => 'Albin Clern, Adam Von Mentzer, Lina Einarsson, Jonna Hall',
            'lyrics_by' => '김수민 (ARTiffect), Albin Clern, Adam Von Mentzer, Lina Einarsson, Jonna Hall',
            'arranger' => 'Albin Clern',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Music Video - Byunghak Park, Sujung Jee'
        ]);

        // new jeans --> album_id = 2
        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "OMG"',
            'composer' => 'Ylva Dimberg, David Dawood, Park Jin-su',
            'lyrics_by' => 'Hanni, Gigi, and Ylva Dimberg',
            'arranger' => 'Park Jin-su',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Wooseok Shin (DOLPHINERS FILM)'
        ]);

        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "Attention"',
            'composer' => '250 and Duck Bay',
            'lyrics_by' => 'Gigi, Duckbay, Danielle',
            'arranger' => '250',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Heewon Shin'
        ]);

        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "Hype Boy"',
            'composer' => '250 and Ylva Dimberg',
            'lyrics_by' => 'Gigi, Ylva Dimberg, Hanni',
            'arranger' => 'Dimberg and 250',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Dongle Shin'
        ]);

        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "Ditto"',
            'composer' => 'Ylva Dimberg, 250',
            'lyrics_by' => 'Minji, Ylva Dimberg, the Black Skirts, and Oohyo',
            'arranger' => '250',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Wooseok Shin (DOLPHINERS FILM)'
        ]);

        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "Cookie"',
            'composer' => 'Ylva Dimberg and Park Jin-su',
            'lyrics_by' => 'Gigi, Ylva Dimberg',
            'arranger' => 'Park Jin-su',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Heewon Shin'
        ]);

        Track::insert([
            'album_id' => 2,
            'title' => 'NewJeans (뉴진스) "Hurt"',
            'composer' => '250 and Amanda Lundstedt',
            'lyrics_by' => 'Gigi, Amanda Lundstedt',
            'arranger' => '250',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Min Hee Jin',
            'additional_data' => 'Music Video - Heewon Shin'
        ]);

        // itzy --> album_id = 3


        // aespa --> album_id = 4

    }
}
