<?php

namespace Database\Seeders;

use App\Models\ArtistGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fifty-fifty
        ArtistGroup::insert([
            'group_name' => 'Fifty-Fifty',
            'group_photo_url' => '/images/artist_group/original/fifty_fifty.png',
            'group_photo_url_hovered' => '/images/artist_group/hovered/fifty_fifty.png'
        ]);

        // new jeans
        ArtistGroup::insert([
            'group_name' => 'New Jeans',
            'group_photo_url' => '/images/artist_group/original/new_jeans.png',
            'group_photo_url_hovered' => '/images/artist_group/hovered/new_jeans.png'
        ]);

        // itzy
        ArtistGroup::insert([
            'group_name' => 'Itzy',
            'group_photo_url' => '/images/artist_group/original/itzy.png',
            'group_photo_url_hovered' => '/images/artist_group/hovered/itzy.png'
        ]);

        // aespa
        ArtistGroup::insert([
            'group_name' => 'Aespa',
            'group_photo_url' => '/images/artist_group/original/aespa.png',
            'group_photo_url_hovered' => '/images/artist_group/hovered/aespa.png'
        ]);
    }
}
