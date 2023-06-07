<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fifty-fifty --> artist_group_id = 1
        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'JEONG EUNAH / Aran (아란)',
            'date_of_birth' => 'October 11, 2004',
            'photo_url' => '/images/artist/original/aran.png',
            'photo_url_hovered' => '/images/artist/hovered/aran.png',
            'biodata' => "Well, it turns out our beloved maknae is a big fan of Ariana Grande! In addition to the Western singer, she also idolizes John K, Loco, DEAN, and Crush.\n
            Not only focused on her career as an idol, Aran is also known as an ambitious individual in the academic field. Rumor has it that this beloved maknae is smart in English as well!"
        ]);

        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'JEONG JIHO / Sio (시오)',
            'date_of_birth' => 'October 6, 2004',
            'photo_url' => '/images/artist/original/sio.png',
            'photo_url_hovered' => '/images/artist/hovered/sio.png',
            'biodata' => "Eits, despite being quite young, the main vocalist of FIFTY FIFTY possesses a distinctive and melodious voice. Not only that, Sio's high notes are also deemed quite stable by netizens.\n
            Interestingly, this eggplant hater has a unique hobby! Every day, Sio writes in her journal or diary. Sio has also mentioned that if she didn't debut as an idol, she would like to become a writer."
        ]);



        // new jeans --> artist_group_id = 2


        // itzy --> artist_group_id = 3


        // aespa --> artist_group_id = 4

    }
}
