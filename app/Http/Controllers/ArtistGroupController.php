<?php

namespace App\Http\Controllers;

use App\Models\ArtistGroup;
use App\Http\Requests\StoreArtistGroupRequest;
use App\Http\Requests\UpdateArtistGroupRequest;

class ArtistGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistGroupItems = ArtistGroup::orderBy('artist_group_id')->get();
        $totalGroup = count($artistGroupItems);
        $gridRowCol = ceil($totalGroup / 2);

        return view('/main/home', [
            'active' => 'artist_group',
            'artistGroupItems' => $artistGroupItems,
            'totalGroup' => $totalGroup,
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
    public function store(StoreArtistGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ArtistGroup $artistGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArtistGroup $artistGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistGroupRequest $request, ArtistGroup $artistGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArtistGroup $artistGroup)
    {
        //
    }
}
