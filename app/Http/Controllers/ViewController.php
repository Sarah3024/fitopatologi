<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Isolat;
use App\Species;
use App\Location;
use App\Photo;
use App\Storage;
use App\Updating;
use App\Substrat;

class ViewController extends Controller
{
	// public function detail(Request $request)
 //    {
    // 	$id_isolat = $request->id;
    // 	$isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
    // 	$species = Species::where('id_species', $isolat_cendawan->species_id)->first();
    // 	$substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
    // 	$location = Location::where('id_location', $isolat_cendawan->location_id)->first();
    // 	$photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
    // 	$storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
    // 	$updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

    //     return view('admin/fungi-view', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photo' => $photo,'storage' => $storage, 'updating' => $updating, 'substrat' => $substrat]);
    // }

    public function view(Request $request)
    {
    	$id_isolat = $request->id;
    	$isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
    	$species = Species::where('id_species', $isolat_cendawan->species_id)->first();
    	$substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
    	$location = Location::where('id_location', $isolat_cendawan->location_id)->first();
    	$photos = Photo::where('id_cendawan', $isolat_cendawan->id_cendawan)->get();
    	$storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
    	$updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        return view('admin/fungi-view', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photos' => $photos,'storage' => $storage, 'updating' => $updating, 'substrat' => $substrat]);
    }
}
