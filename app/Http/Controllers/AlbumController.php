<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewAlbum()
    {
        $albumItems = DB::table('albums')
            ->join('artist_groups', static function (JoinClause $c) {
                $c->on('albums.artist_group_id', '=', 'artist_groups.artist_group_id');
                $c->whereNull('albums.deleted_at');
                $c->whereNull('artist_groups.deleted_at');
            })
            ->orderBy('albums.album_id')->get();

        $totalGroup = count($albumItems);
        $gridRowCol = ceil($totalGroup / 2);

        return view('/main/home', [
            'active' => 'album',
            'active_track' => false,
            'albumItems' => $albumItems,
            'artistGroupName' => $albumItems[0]->group_name,
            'gridRowCol' => $gridRowCol
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
    public function store(StoreAlbumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
