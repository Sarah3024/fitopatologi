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

class VerificatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:verificator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isolat_cendawan= DB::table('isolat_cendawan')->orderBy('name_cendawan')->where('status_verifiedData', 0)->get();
        return view('verificator/base', ['isolat_cendawan' => $isolat_cendawan]);
    }
    public function view(Request $request)
    {
        $id_isolat = $request->id;
        $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
        if ($request->isMethod('post')) {
            $isolat_cendawan->status_verifiedData=1;
            $isolat_cendawan->comment=null;
            $isolat_cendawan->save();
        }

        $species = Species::where('id_species', $isolat_cendawan->species_id)->first();
        $substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
        $location = Location::where('id_location', $isolat_cendawan->location_id)->first();
        $photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
        $storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
        $updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        return view('verificator/view', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photo' => $photo,'storage' => $storage, 'updating' => $updating, 'substrat' => $substrat]);
    }
    public function comment( $id_isolat)
    {
        // $id_isolat = $request->id;
        // $input = $request->all();
        // if(isset($input["id_cendawan"]))  $input["comment"] = "comment";
        // if()
        // $isolat_cendawan = Isolat::where('id_cendawan', $input['id_cendawan'])->first();
        // if ($request->isMethod('post')) {
        //     $isolat_cendawan->comment = $request["comment"];
        //     $isolat_cendawan->save();
        // }

        // $result = $isolat_cendawan->update($request);
        // $this -> validate($input);
        // Isolat::update([
        //     'comment' => $input('comment')
        //     ]);
        // $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat->input('id_cendawan'))->first();
        // $isolat_cendawan->comment = $id_isolat->input('comment');
        // $isolat_cendawan->save();
        DB::table('isolat_cendawan')->where('id_cendawan', $id_isolat)->update(['comment' => $input["comment"]]);
        // dd($isolat);
        // if($request->isMethod('post')) {
        //     $isolat->comment = $input["comment"];
        //     $isolat->save();
        // }
        // $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat);
        // $isolat_cendawan->comment = updateOrCreate(['comment' => $input["comment"]]);
        // $comment->comment = $input["comment"];
        // $comment->save();
        // $isolat = Isolat::where('id_cendawan', $id_isolat)->first();
        // $comment = $isolat->update(['comment' => $request->input('comment')]);
        // $comment->save();
        // $isolat_cendawan->comment = $input["comment"];
        // $isolat_cendawan->update(['comment' => $isolat_cendawan->comment]);
        // DB::table('isolat_cendawan')->where('id_cendawan', $id_isolat)->update(['comment' => $input['comment']);




        return redirect('verificator-fungi-view');
    }
}
