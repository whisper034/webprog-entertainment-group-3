<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // fifty-fifty --> artist_group_id = 1
        Album::insert([
            'artist_group_id' => 1,
            'artist_album_photo_url' => '/images/album/artist_album_original/fifty_fifty.png',
            'artist_album_photo_url_hovered' => '/images/album/artist_album_hovered/fifty_fifty.png',
            'album_photo_url' => '/images/album/album_photo/fifty_fifty.png',
            'artist_group_photo_url' => '/images/album/artist_photo/fifty_fifty.png',
            'album_info' => "Introducing \"FIFTY\", the highly anticipated album from the sensational girl group, Fifty-Fifty! With their magnetic presence and undeniable talent, Fifty-Fifty has taken the music industry by storm, capturing the hearts of fans around the world. This album represents a significant milestone in their musical journey, showcasing their growth, maturity, and artistic prowess.
            \"FIFTY\" is a musical masterpiece that delivers an exhilarating blend of infectious pop beats, heartfelt ballads, and empowering anthems. With each track, Fifty-Fifty effortlessly weaves together captivating melodies, powerful vocals, and dynamic choreography, creating an immersive listening experience that resonates deeply with their audience.
            From the electrifying title track that showcases their fierce energy and captivating stage presence to the introspective ballads that tug at the heartstrings, \"FIFTY\" displays the remarkable range and versatility of Fifty-Fifty as a group. The album is a testament to their dedication, hard work, and artistic vision, as they effortlessly navigate different genres and emotions, leaving an indelible impression on listeners.
            With \"FIFTY\", Fifty-Fifty solidifies their position as trendsetters in the K-pop industry. The album represents their unique style, showcasing their individual strengths while also highlighting the powerful synergy and harmony that exists within the group. Each member brings their own charisma and distinct vocal color, creating a seamless and captivating blend that sets Fifty-Fifty apart from the rest.
            Prepare to be enchanted as you delve into the world of \"FIFTY\" and experience the magic that Fifty-Fifty has crafted. Their infectious energy, exceptional talent, and undeniable charisma will keep you captivated from the very first note to the final chord. Join the ride and witness the unstoppable rise of Fifty-Fifty with their groundbreaking album, \"FIFTY\".",
            'created_at' => $nowDate
        ]);

        // new jeans --> artist_group_id = 2
        Album::insert([
            'artist_group_id' => 2,
            'artist_album_photo_url' => '/images/album/artist_album_original/new_jeans.png',
            'artist_album_photo_url_hovered' => '/images/album/artist_album_hovered/new_jeans.png',
            'album_photo_url' => '/images/album/album_photo/new_jeans.png',
            'artist_group_photo_url' => '/images/album/artist_photo/new_jeans.png',
            'album_info' => "Introducing \"NWJNS\", the groundbreaking album from the phenomenal girl group, NewJeans! Comprised of a talented and accomplished lineup of young members, NewJeans has taken the music scene by storm with their incredible achievements and remarkable talent.
            \"NWJNS\" showcases the immense growth and musical prowess of NewJeans. This album presents a captivating blend of catchy beats, heartfelt lyrics, and mesmerizing vocals that will leave listeners enchanted. Each track tells a unique story, reflecting the passion, determination, and relatable experiences of the members.
            NewJeans has proven themselves to be a force to be reckoned with, pushing boundaries and redefining the K-pop landscape. Their youthful energy, dynamic performances, and undeniable stage presence have captivated fans worldwide. With \"NWJNS\", they further solidify their position as rising stars, ready to make their mark on the industry.
            From the infectious title track to the introspective ballads, \"NWJNS\" takes listeners on a sonic journey that showcases NewJeans' versatility and artistry. Their harmonious vocals, impressive dance routines, and captivating visuals come together to create an immersive and unforgettable experience.
            Join NewJeans on this exhilarating musical adventure as they continue to make waves in the industry. Brace yourself for the impact of \"NWJNS\" and witness the rise of NewJeans as they carve their path to success, leaving an indelible mark on the world of K-pop. Get ready to groove, feel, and be inspired by the incredible talent of NewJeans and their groundbreaking album, \"NWJNS\".",
            'created_at' => $nowDate
        ]);

        // itzy --> artist_group_id = 3
        Album::insert([
            'artist_group_id' => 3,
            'artist_album_photo_url' => '/images/album/artist_album_original/itzy.png',
            'artist_album_photo_url_hovered' => '/images/album/artist_album_hovered/itzy.png',
            'album_photo_url' => '/images/album/album_photo/itzy.png',
            'artist_group_photo_url' => '/images/album/artist_photo/itzy.png',
            'album_info' => "GUESS WHO
            - \"Never ceasing to amaze you\" Wilder and bolder! Captivating K-pop fandom
            - The new song \"In the morning\" completes the K-pop representative performers, ITZY! Shows off
        ever-changing concepts!
            - A collection of JYP's head producer J. Y. Park, and internationally recognized song writers! A comeback with the all-time best album!
            On April 30th, ITZY makes a worldwide comeback with their new album 'GUESS WHO' and title song 'In the morning'.
            ITZY's been getting love from Millennials and Gen-Z with their confidence in expressing themselves and has been captivating K-pop fans worldwide with impeccable singing and performance. Their unrivalled existence as the 'representative of the 4th gen girl groups' once again resonates their stardom with the new, wild, and sensational album 'GUESS WHO'.
            'In the morning' which derives interest by the name itself, completes the unique color of ITZY, enhancing each member’s character individually. The curious song inspired by the party game, Mafia game, sings a message of approaching with their emotions under a veil and capturing the heart of their loved one.
            The new visual concept which exceeds our expectation is entertaining to look at, seizing the eyes of worldwide fans. The 5 members show two drastically different versions of themselves, 'DAY' and 'NIGHT', with bold outfits that will heighten your excitement. ITZY's been captivating us with their ever-changing looks, but this time they depict their emotions more delicately than ever, completing the more dramatic album.
            The music video sets a high-tension mood, which is based on the Mafia game, showing psychological warfare between various appearance of ITZY. The members arouse the viewers’ curiosity by hiding their true emotions in the daytime and then doing a one eighty in the nighttime, entertaining us with different forms of themselves like movie characters. It throws hidden clues throughout the music video, and asks the viewers to 'GUESS WHO' the mafia is.",
            'created_at' => $nowDate
        ]);

        // aespa --> artist_group_id = 4
        Album::insert([
            'artist_group_id' => 4,
            'artist_album_photo_url' => '/images/album/artist_album_original/aespa.png',
            'artist_album_photo_url_hovered' => '/images/album/artist_album_hovered/aespa.png',
            'album_photo_url' => '/images/album/album_photo/aespa.png',
            'artist_group_photo_url' => '/images/album/artist_photo/aespa.png',
            'album_info' => "GIRLS
            The 'Metaverse Girl Group', aespa (SM Entertainment), is releasing a new album, 'Girls', on July 8th.
            The new album lists nine songs, including 'Girls', the single that captures the story of their universe, six new songs in various genres, and previous releases, such as 'Black Mamba', 'Forever', and 'Dreams Come True'. These songs will definitely be a chance to experience the unique music style of aespa.
            Previously, aespa released three mega-hit songs in a row, starting with the debut song, 'Black Mamba' followed by the single, 'Next Level', and the first mini-album single, 'Savage', achieved 100 million views in the shortest time in the history of K-pop group debut music video, and came twentieth on the US 'Billboard 20', which is the highest ranking in history achieved by a K-pop girl group with the first album. Since aespa has caused a global syndrome with exceptional results, expectations are high with this new album.
            Their single, 'Girls', is a dance song that features the intense wobble bass and the rough texture of synth sound. The confident vocals and rapping of the aespa members are impressive. The lyrics capture the last episode of season 1 of the SMCU aespa universe, which continues with a new story with the helper, nævis, with a more mature image after aespa and ae-aespa waged a full-fledged battle with 'Black Mamba'.
            'Life's Too Short' is a medium-tempo pop song featuring a catchy guitar riff and bright and hopeful vocals. It captures the positive aspiration to enjoy life in the way they want without regrets, for they only live once. This song was presented at the largest outdoor music festival in the United States, 'Coachella', and its English version, aespa's first US single, is also included as a bonus track in the album.
            'Illusion', pre-released on June 1st, is a hip-hop dance song with a powerful 808 bass and an ear-catching kick sound. The combination of minimal but trendy track sound and restrained rap stand out while the lyrics compare the desire to seduce and make someone theirs to will-o' the-wisp and express it in aespa’s unique style.",
            'created_at' => $nowDate
        ]);
    }
}
