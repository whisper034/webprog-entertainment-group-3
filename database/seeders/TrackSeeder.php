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
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // fifty-fifty --> album_id = 1
        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - "Higher"',
            'composer' => 'Matt Thomson, Max Lynedoch Graham, George Tizzard, James Birt, Rick Parkhouse, Moa "Cazzi Opeia" Carlebecker (Sunshine), Ellen Berg (Sunshine)',
            'lyrics_by' => '강은유 (ARTiffect), Keena, Moa "Cazzi Opeia" Carlebecker (Sunshine), Ellen Berg (Sunshine)',
            'arranger' => 'ARCADES, Red Triangle, James Birt',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Music Video - NAIVE',
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - "Cupid"',
            'composer' => 'Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'lyrics_by' => 'SIAHN, AHIN, KEENA, Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'arranger' => 'SIAHN, Adam von Mentzer, Mac Felländer-Tsai, Louise Udin',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => null,
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jinsil Baek, Jeff Kim',
            'additional_data' => 'Music Video - Zanybros',
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - "Tell Me"',
            'composer' => 'Julia Ross, Adam Kapit, Hautboi Rich',
            'lyrics_by' => 'SIAHN, 이앵두(153joombas), Julia Allyn Ross',
            'arranger' => 'Adam Kapit, Julia Ross',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Lyric Video by Danny JY Lee',
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 1,
            'title' => 'FIFTY FIFTY (피프티피프티) - "Lovin Me"',
            'composer' => 'Albin Clern, Adam Von Mentzer, Lina Einarsson, Jonna Hall',
            'lyrics_by' => '김수민 (ARTiffect), Albin Clern, Adam Von Mentzer, Lina Einarsson, Jonna Hall',
            'arranger' => 'Albin Clern',
            'producer' => 'SIAHN @The Givers',
            'co_producer' => 'Jinsil Baek',
            'ar_director' => 'Danny JY Lee',
            'director' => 'Jeff Kim',
            'additional_data' => 'Music Video - Byunghak Park, Sujung Jee',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Wooseok Shin (DOLPHINERS FILM)',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Heewon Shin',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Dongle Shin',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Wooseok Shin (DOLPHINERS FILM)',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Heewon Shin',
            'created_at' => $nowDate
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
            'additional_data' => 'Music Video - Heewon Shin',
            'created_at' => $nowDate
        ]);

        // itzy --> album_id = 3
        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "마.피.아. In the morning"',
            'composer' => 'LYRE, J.Y. Park "The Asiansoul", earattack, KASS, Lee Hae-sol',
            'lyrics_by' => 'J.Y. Park "The Asiansoul", KASS, danke, LYRE',
            'arranger' => 'LYRE, J.Y. Park "The Asiansoul", Lee Hae-sol, earattack',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => 'Bang Jae-yeob',
            'additional_data' => 'Music Video - Bang Jae-yeob',
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "Sorry Not Sorry"',
            'composer' => 'Shim Eun-ji, Lee Min-young (EastWest), Yeul (1by1)',
            'lyrics_by' => 'JQ, J14, TOMBOY (makeumine works)',
            'arranger' => 'Lee Min-young (EastWest), Yeul (1by1)',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "KIDDING ME"',
            'composer' => 'Kobee and Holy M',
            'lyrics_by' => 'Kobee, Holy M, KASS',
            'arranger' => 'Kobee, Holy M',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "WILD WILD WEST"',
            'composer' => 'Andy Love (153/Joombas), earattack',
            'lyrics_by' => 'earattack',
            'arranger' => 'earattack',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "SHOOT!"',
            'composer' => 'Alexander Pavelich, Maria Hazell, Jerker Olov Hansson, Gigi Grombacher, Joakim Harestad Haukaas, Evard Forre Erfjord',
            'lyrics_by' => 'Lee Ha-jin, Mad Clown, Kim Seung-min',
            'arranger' => 'Joki, Erfjord',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 3,
            'title' => 'ITZY (있지) "TENNIS (0:0)"',
            'composer' => 'Coach & Sendo, Cazzi Opeia, Alex Chang Jien',
            'lyrics_by' => 'JQ, Vacation (makeumine works)',
            'arranger' => 'Coach & Sendo',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);


        // aespa --> album_id = 4
        Track::insert([
            'album_id' => 4,
            'title' => 'AESPA (에스파) "Girls"',
            'composer' => 'Ryan S. Jhun, Hanif Sabzevari (Hitmanic), Dennis "DeKo" Kordnejad (Hitmanic), Rodnae "Chikk" Bell, Pontus PJ Ljung, Yoo Young-jin',
            'lyrics_by' => 'Yoo Young-jin',
            'arranger' => 'Ryan S. Jhun, Hitmanic, Pontus "PJ" Ljung, Yoo Young-jin.',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 4,
            'title' => 'AESPA (에스파) "도깨비불 (Illusion)"',
            'composer' => 'G harah "PK" Degeddingseze, Patricia Battani',
            'lyrics_by' => 'Lee Thor (Lalala Studio)',
            'arranger' => 'G harah "PK" Degeddingseze, Patricia Battani, Steve Octave',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 4,
            'title' => 'AESPA (에스파) "Lingo"',
            'composer' => 'Alma Goodman, Gabriella Grombacher, Christina Galligan, Lisa "Lixa" Hickox',
            'lyrics_by' => 'Song Jae-ri (Joombas)',
            'arranger' => 'Lixa',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 4,
            'title' => 'AESPA (에스파) "Life’s Too Short"',
            'composer' => 'Becky Hill, Sam Klempner, Uzoechi Emenike',
            'lyrics_by' => 'Jang Jeong-won',
            'arranger' => 'Sam Klempner',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

        Track::insert([
            'album_id' => 4,
            'title' => 'AESPA (에스파) "ICU (쉬어가도 돼)"',
            'composer' => 'Ryan S. Jhun, Josh Cumbee, Nisha Asnani',
            'lyrics_by' => 'Bae Hye-jin (Joombas)',
            'arranger' => 'Ryan S. Jhun, Josh Cumbee',
            'producer' => null,
            'co_producer' => null,
            'ar_director' => null,
            'director' => null,
            'additional_data' => null,
            'created_at' => $nowDate
        ]);

    }
}
