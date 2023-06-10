<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewTrack($album_id)
    {
        $albumQuery = DB::table('albums')
            ->join('artist_groups', static function (JoinClause $c) {
                $c->on('albums.artist_group_id', '=', 'artist_groups.artist_group_id');
                $c->whereNull('albums.deleted_at');
                $c->whereNull('artist_groups.deleted_at');
            })
            ->where('albums.album_id', '=', $album_id)
            ->orderBy('albums.album_id')->get();

        $trackQuery = DB::table('tracks')
            ->join('albums', static function (JoinClause $c) {
                $c->on('tracks.album_id', '=', 'albums.album_id');
                $c->whereNull('tracks.deleted_at');
                $c->whereNull('albums.deleted_at');
            })
            ->where('albums.album_id', '=', $album_id)
            ->orderBy('tracks.track_id')->get();

        $gridRowColTrack = ceil(count($trackQuery) / 2);

        // saat ini ambil value album paling pertama karena albumnya hanya ada 1 per artist_group
        // apabila ada banyak album, ->first() bisa dihilangkan
        $albumItems = collect($albumQuery)->map(function($item) use ($trackQuery) {
            $item->track_list = $trackQuery;
            return $item;
        })->first();

        return view('/main/home', [
            'active' => 'album',
            'active_track' => true,
            'albumItems' => $albumItems,
            'albumId' => $album_id,
            'artistGroupName' => $albumItems->group_name,
            'gridRowColTrack' => $gridRowColTrack
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
    public function store(StoreTrackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackRequest $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
