<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Isolat;
use App\Species;
use App\Location;
use App\Photo;
use App\Storage;
use App\Updating;
use App\Substrat;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('home');
    }

    public function uindex1()
    {

        $isolat_cendawan= DB::table('isolat_cendawan')->orderBy('name_cendawan')->where('status_verifiedData', 1)->get();
        $coba = "test";

        return view('user/fungi/base', ['isolat_cendawan' => $isolat_cendawan, 'coba' => $coba]);
    }
    public function uindex2()
    {
        return view('user/service/base');
    }

    public function cindex1()
    {
        return view('customer/fungi/base');
    }
    public function cindex2()
    {
        return view('customer/service/base');
    }

    public function view(Request $request)
    {
        $id_isolat = $request->id;
        $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
        $species = Species::where('id_species', $isolat_cendawan->species_id)->first();
        $substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
        $location = Location::where('id_location', $isolat_cendawan->location_id)->first();
        $photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
        $storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
        $updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        return view('user/fungi-detail', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photo' => $photo,'storage' => $storage, 'updating' => $updating, 'substrat' => $substrat]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $result = Isolat::where('name_cendawan', 'LIKE', '%' .$search. '%')->paginate(10);

        return view('user/fungi/base', ['result', $result]);
    }

}
