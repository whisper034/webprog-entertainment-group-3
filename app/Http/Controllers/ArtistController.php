<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewArtist($artist_group_id)
    {
        $artistItems = DB::table('artists')
            ->join('artist_groups', static function (JoinClause $c) {
                $c->on('artists.artist_group_id', '=', 'artist_groups.artist_group_id');
                $c->whereNull('artists.deleted_at');
            })
            ->where('artists.artist_group_id', '=', $artist_group_id)
            ->orderBy('artists.artist_id')->get();

        return view('/main/home', [
            'active' => 'artist_group',
            'active_artist_group' => false,
            'artistItems' => $artistItems,
            'artistGroupName' => $artistItems[0]->group_name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
