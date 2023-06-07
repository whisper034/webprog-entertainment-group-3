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
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // fifty-fifty --> artist_group_id = 1
        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'JEONG EUNAH / Aran (아란)',
            'date_of_birth' => 'October 11, 2004',
            'photo_url' => '/images/artist/original/aran.png',
            'photo_url_hovered' => '/images/artist/hovered/aran.png',
            'biodata' => "Well, it turns out our beloved maknae is a big fan of Ariana Grande! In addition to the Western singer, she also idolizes John K, Loco, DEAN, and Crush.\n
            Not only focused on her career as an idol, Aran is also known as an ambitious individual in the academic field. Rumor has it that this beloved maknae is smart in English as well!",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'JEONG JIHO / Sio (시오)',
            'date_of_birth' => 'October 6, 2004',
            'photo_url' => '/images/artist/original/sio.png',
            'photo_url_hovered' => '/images/artist/hovered/sio.png',
            'biodata' => "Eits, despite being quite young, the main vocalist of FIFTY FIFTY possesses a distinctive and melodious voice. Not only that, Sio's high notes are also deemed quite stable by netizens.\n
            Interestingly, this eggplant hater has a unique hobby! Every day, Sio writes in her journal or diary. Sio has also mentioned that if she didn't debut as an idol, she would like to become a writer.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'JEONG SEHYUN / Saena (새나)',
            'date_of_birth' => 'March 12, 2004',
            'photo_url' => '/images/artist/original/saena.png',
            'photo_url_hovered' => '/images/artist/hovered/saena.png',
            'biodata' => "Before joining FIFTY FIFTY, Saena already possessed remarkable dance skills. The leader of FIFTY FIFTY was previously a member of a dance group called Lunatic. Additionally, at the age of 15, Saena participated in the Dancing High competition.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 1,
            'name' => 'SONG JAKYUNG / Keena (키나)',
            'date_of_birth' => 'July 9, 2002',
            'photo_url' => '/images/artist/original/keena.png',
            'photo_url_hovered' => '/images/artist/hovered/keena.png',
            'biodata' => "Behind her adorable visuals, this member of FIFTY FIFTY actually holds the position of the main rapper! Additionally, she also takes on the role of sub-vocalist within the group. Daebak!
            Prior to debuting with FIFTY FIFTY, Keena was involved in creating an OST for the drama titled The Running Mates: Human Rights. She sang a song called Take Back My Life.",
            'created_at' => $nowDate
        ]);



        // new jeans --> artist_group_id = 2
        Artist::insert([
            'artist_group_id' => 2,
            'name' => 'KANG HAERIN / Haerin (해린)',
            'date_of_birth' => 'May 15, 2006',
            'photo_url' => '/images/artist/original/haerin.png',
            'photo_url_hovered' => '/images/artist/hovered/haerin.png',
            'biodata' => "An interesting fact about Haerin is that her favorite foods are Korean cuisine and raw fish. Many people say that she resembles Tomie.
            Haerin also greatly enjoys the scent of flowers. She used to play pansori, a traditional Korean genre of musical storytelling. Her nickname during school was Voice Fairy.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 2,
            'name' => 'DANIELLE MARSH / Danielle (다니엘)',
            'date_of_birth' => 'April 11, 2005',
            'photo_url' => '/images/artist/original/danielle.png',
            'photo_url_hovered' => '/images/artist/hovered/danielle.png',
            'biodata' => "Danielle has an interesting fact: she likes the spring and fall seasons. Her favorite foods are her mother's cooking, vegetables, and fruits.
            What's unique about Danielle is her ability to make various shapes with her tongue and her habit of wearing socks before going to bed.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 2,
            'name' => 'HANNI PHAM / Hanni (하니)',
            'date_of_birth' => 'October 6, 2004',
            'photo_url' => '/images/artist/original/hanni.png',
            'photo_url_hovered' => '/images/artist/hovered/hanni.png',
            'biodata' => "An interesting fact about Hanni is that she likes all seasons except for summer. Her favorite foods are bread and meat. She is also skilled at playing the ukulele and is a big fan of One Direction.
            Additionally, a notable trait of Hanni is her ability to sleep anywhere. She also has a unique hobby of photographing clouds.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 2,
            'name' => 'LEE HYEIN / Hyein (혜인)',
            'date_of_birth' => 'April 21, 2008',
            'photo_url' => '/images/artist/original/hyein.png',
            'photo_url_hovered' => '/images/artist/hovered/hyein.png',
            'biodata' => "Hyein, the maknae, has a strong liking for strawberries. She is currently learning English as her second language.
            An interesting fact about Hyein is her skill in taking photos of the other members. She also started her career as a child model at the age of 8.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 2,
            'name' => 'KIM MINJI / Minji (민지)',
            'date_of_birth' => 'May 7, 2004',
            'photo_url' => '/images/artist/original/minji.png',
            'photo_url_hovered' => '/images/artist/hovered/minji.png',
            'biodata' => "It turns out that Minji has the ESTJ personality type according to the Myers-Briggs Type Indicator (MBTI). A brief explanation of the ESTJ type is that they are practical, realistic, fact-oriented, and decisive.
            Minji attended Hanlim Arts School. She also enjoys both the summer and winter seasons. Her favorite food is her mother's cooking and ice cream.",
            'created_at' => $nowDate
        ]);


        // itzy --> artist_group_id = 3
        Artist::insert([
            'artist_group_id' => 3,
            'name' => 'YEJI / Hwang Ye Ji (예지)',
            'date_of_birth' => 'May 26, 2000',
            'photo_url' => '/images/artist/original/yeji.png',
            'photo_url_hovered' => '/images/artist/hovered/yeji.png',
            'biodata' => "Yeji is the official leader of ITZY. She is also the oldest member of the group. In 2018, prior to to her debut with Itzy, she participated in SBS’ show The Fan but was eliminated in episode 5. Her motto is believe in yourself. Her English name is Lucy Hwang.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 3,
            'name' => 'LIA / Choi Ji Su (리아)',
            'date_of_birth' => 'July 21, 2000',
            'photo_url' => '/images/artist/original/lia.png',
            'photo_url_hovered' => '/images/artist/hovered/lia.png',
            'biodata' => "Lia is the main vocalist of ITZY. Lia is fluent in English as she lived in Canada for several years and studied in an international school. At the age of 14, while she was in middle school in Canada, she passed an audition with SM Entertainment to become a trainee; however, she ended up leaving the agency as her parents wanted her to focus on her studies.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 3,
            'name' => 'RYUJIN / Shin Ryu Jin (류진)',
            'date_of_birth' => 'April 17, 2001',
            'photo_url' => '/images/artist/original/ryujin.png',
            'photo_url_hovered' => '/images/artist/hovered/ryujin.png',
            'biodata' => "Ryujin is the main rapper of ITZY. She is a former contestant of the survival show MixNine. She caught YG’s attention during the show and received an offer from him to join his company but she rejected it and stayed loyal to JYPE. Ryujin trained for 4 years before making her official debut with ITZY.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 3,
            'name' => 'CHAERYEONG / Lee Chae Ryeong (채령)',
            'date_of_birth' => 'June 5, 2001',
            'photo_url' => '/images/artist/original/chaer.png',
            'photo_url_hovered' => '/images/artist/hovered/chaer.png',
            'biodata' => "Chaeryeong is the official main dancer of ITZY. In 2012, Chaeryeong and her older sister, Chaeyeon, auditioned for Fantagio Entertainment but failed to pass. Chaeryong and her sister, Chaeyeon, also participated in the show Kpop Star Season 3 in the following year. Chaeryeong caught JYP’s attention, who was one of the judges on the show, and was recruited to be a JYPE trainee.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 3,
            'name' => 'YUNA / Shin Yu Na (유나)',
            'date_of_birth' => 'December 9, 2003',
            'photo_url' => '/images/artist/original/yuna.png',
            'photo_url_hovered' => '/images/artist/hovered/yuna.png',
            'biodata' => "Yuna is the youngest member (maknae) of ITZY. In 2015, during a KBS Song Festival, she was offered to join JYPE by a casting staff. She was attending her first concert ever with her sister who wanted to see BTOB at the festival. While waiting on the road, a JYPE casting staff approached her and gave her a business card which lead to her JYPE audition.",
            'created_at' => $nowDate
        ]);


        // aespa --> artist_group_id = 4
        Artist::insert([
            'artist_group_id' => 4,
            'name' => 'KARINA / Yu Ji Min (카리나)',
            'date_of_birth' => 'April 11, 2000',
            'photo_url' => '/images/artist/original/karina.png',
            'photo_url_hovered' => '/images/artist/hovered/karina.png',
            'biodata' => "Karina is the official leader of aespa. She also holds the position of main dancer, lead rapper, and center. She is the tallest member in the group with a height of 167.8 cm (5'6''). Prior to her debut, Karina was a famous ulzzang (which means best face or good looking in Korean). She was a trainee for four years.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 4,
            'name' => 'GISELLE / Uchinaga Aeri (지젤)',
            'date_of_birth' => 'October 30, 2000',
            'photo_url' => '/images/artist/original/giselle.png',
            'photo_url_hovered' => '/images/artist/hovered/giselle.png',
            'biodata' => "Giselle, born Uchinaga Aeri, is the main rapper of aespa. Giselle is half Japanese (from her father) and half Korean (from her mother). She can speak fluent Korean, Japanese, and English. Prior to joining SM Entertainment, she joined AJS, an idol training academy. Giselle was a trainee with SM for just 10 months, making her the female idol with the shortest training period out of all SM idols at the time of her debut.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 4,
            'name' => 'WINTER / Kim Min Jeong (윈터)',
            'date_of_birth' => 'January 1, 2001',
            'photo_url' => '/images/artist/original/winter.png',
            'photo_url_hovered' => '/images/artist/hovered/winter.png',
            'biodata' => "Winter, born Kim Minjeong, is the official visual of aespa. She is also the lead vocalist of the group. She trained for 3 years before making her debut with aespa. Fans often compare her visuals to Taeyeon from SNSD.",
            'created_at' => $nowDate
        ]);

        Artist::insert([
            'artist_group_id' => 4,
            'name' => 'NINGNING / Ning Yizhuo (닝닝)',
            'date_of_birth' => 'October 23, 2002',
            'photo_url' => '/images/artist/original/ning.png',
            'photo_url_hovered' => '/images/artist/hovered/ning.png',
            'biodata' => "Ningning is the youngest member of aespa. Her position is the main vocalist. She is from Harbin, China. Ningning moved to Korea and joined SM rookies in 2016. She is the only member from aespa that came from SM rookies. Prior to her debut, she was a contestant in the Chinese competition Let’s Sing Kids along with Chenle from NCT.",
            'created_at' => $nowDate
        ]);

    }
}
