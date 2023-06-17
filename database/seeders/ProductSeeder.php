<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // albums
        Product::insert([
            'product_category_id' => 1,
            'product_photo_url' => '/images/products/albums/aespa-girls.png',
            'product_name' => 'AESPA 2ND MINI ALBUM - GIRLS',
            'product_description' => "AESPA GIRLS 2nd MINI ALBUM
            [Track List]
            1. Girls *Title*
            2. Illusion
            3. Lingo
            4. Life’s Too Short
            5. ICU
            6. (Bonus Track) Life’s Too Short (English Ver.)\n
            [Album Spec]
            1. Size: 203*267*6mm
            2. Weight: 335g
            3. Cover: 1 version (KWANGYA Ver.)
            4. Character Card: 1ea (Random 1 out of 4)
            5. Folded Poster: 1ea (Random 1 out of 4)
            6. *Deco Sticker: 1ea (1 version)
            7. *Photo Card: 1ea (Random 1 out of 4)
            8. *US-exclusive Photo Card: 1ea (random 1 out of 4 with artist-written English message)
            9. English Lyric Book",
            'product_price' => 300000,
            'created_at' => $nowDate
        ]);

        Product::insert([
            'product_category_id' => 1,
            'product_photo_url' => '/images/products/albums/fifty-album.png',
            'product_name' => 'FIFTY FIFTY 1st EP Album - THE FIFTY',
            'product_description' => "FIFTY FIFTY - [THE FIFTY] 1st EP Album
            Track List
            DISK(CD) 1.
            01. Tell Me
            02. Lovin' Me
            03. Higher
            04. Log in",
            'product_price' => 270000,
            'created_at' => $nowDate
        ]);

        Product::insert([
            'product_category_id' => 1,
            'product_photo_url' => '/images/products/albums/guess-who.png',
            'product_name' => 'ITZY - GUESS WHO',
            'product_description' => "ITZY - GUESS WHO
            TRACKLIST:
            1. 마.피.아. In the morning
            2. Sorry Not Sorry
            3. KIDDING ME
            4. Wild Wild West
            5. SHOOT!
            6. TENNIS\n
            INCLUDED:
            Photobook
            CD
            Photocard
            Mini Folding Poster
            Sticker Pack
            Newspaper",
            'product_price' => 300000,
            'created_at' => $nowDate
        ]);

        Product::insert([
            'product_category_id' => 1,
            'product_photo_url' => '/images/products/albums/New_Jeans_(EP).jpg',
            'product_name' => 'NEW JEANS - NEW JEANS (New Jeans 1st EP Album)',
            'product_description' => "NEW JEANS - NEW JEANS (1st EP Album)
            Detail:
            - Outbox
            - CD-R (CD plate sesuai versi)
            - Log Book (68 halaman)
            - Pin-Up Book (72 halaman)
            - Phoning Manual Book (7 pcs per set)
            - ID card (sesuai versi)
            - Sticker Set (sesuai versi +amplop)
            - Photocard Set (5 photocards per set sesuai versi)
            - Mini Poster\n
            《TRACK LIST》
            1. Attention
            2. Hype Boy
            3. Cookie
            4. Hurt",
            'product_price' => 250000,
            'created_at' => $nowDate
        ]);

        // others
        Product::insert([
            'product_category_id' => 2,
            'product_photo_url' => '/images/products/others/aespa-lightstick.png',
            'product_name' => 'AESPA OFFICIAL LIGHTSTICK',
            'product_description' => "This official aespa Fanlight is a must-haves for any aespa tour. Represent your love for the group with the vibrant and colorful fanlight. Shine and cheer for aespa together!",
            'product_price' => 830000,
            'created_at' => $nowDate
        ]);

        Product::insert([
            'product_category_id' => 2,
            'product_photo_url' => '/images/products/others/NewJeans-lightstick.jpg',
            'product_name' => 'NEWJEANS - OFFICIAL LIGHTSTICK',
            'product_description' => "NEWJEANS Official Light Stick
            Contents
            - Out Box
            - Light Stick
            - Strap
            - Dust Bag
            - Photo Cards 5 each
            - Manual",
            'product_price' => 970000,
            'created_at' => $nowDate
        ]);

        Product::insert([
            'product_category_id' => 2,
            'product_photo_url' => '/images/products/others/itzy-lightstick.jpg',
            'product_name' => 'ITZY - Official Light Ring',
            'product_description' => "ITZY Official Light Ring
            - Light Mode : On - Blink - Flicker - Rainbow Flow - Off
            - Light Ring Power : AAA * 3EA
            - Light Ring Size : 171 * 171 * 34 mm
            - Out Box, Light Ring, Cradle, QSG, Stray",
            'product_price' => 700000,
            'created_at' => $nowDate
        ]);
    }
}
