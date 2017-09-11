<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Isolator;
use App\Substrat;
use App\Raiser;
use App\Storage;
use App\Divisi;
use App\Classes;
use App\State;
use App\Province;
use App\City;
use App\District;
use App\Ordo;
use App\Family;
use App\Genus;
use App\Isolat;
use App\Location;
use App\Photo;
use App\Species;
// use App\Updating;
use Validator;

class FungiController extends Controller
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
    public function entri(Request $request)
    {
        $id_isolat = $request->id;
        $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
        $species = Species::where('id_species', $isolat_cendawan->species_id)->first();
        $substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
        $location = Location::where('id_location', $isolat_cendawan->location_id)->first();
        // $photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
        $storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
        // $updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        $states = State::orderBy('name_state', 'asc')->get();
        $divisi = Divisi::orderBy('name_divisi', 'asc')->get();

        return view('admin/fungi-edit', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'storage' => $storage, 'substrat' => $substrat, 'states' => $states, 'divisi', $divisi]);
    }

    public function postentri(Request $request)
    {
        $data = array(
            'name_cendawan' => Input::get('nama_cendawan'),



            );
    }

    public function entri2()
    {
        $states = State::orderBy('name_state', 'asc')->get();

        return view('admin/fungi-add', ['states' => $states]);
    }
    public function index()
    {

        $isolat_cendawan = DB::table('isolat_cendawan')->get();
        return view('admin/fungi-mng', compact('isolat_cendawan'));
    }

    public function unverified()
    {

        $isolat_cendawan = DB::table('isolat_cendawan')->where('status_verifiedData', 0)->orderBy('name_cendawan')->get();
        return view('admin/unverified', compact('isolat_cendawan'));
    }

    public function index2()
    {
        // $form_substrat = set_include_path('form_substrat');

        $states = State::orderBy('name_state', 'asc')->get();
        return view('admin/db-mng', ['states' => $states]);
    }

    public function postEntri2(Request $request)
    {
        $input = $request->all();

        // $isolate = new Isolat;

        $error_msg = "";

        if ($request->isMethod('post')) {


            $isolate = new Isolat;

            if($isolate->validate($input)) {
                try {
                    if(isset($input["id_cendawan"])){
                        $isolate = Isolat::where('id_cendawan', $input['id_cendawan'])->first();
                    }
                    else{
                        $isolate = new Isolat;
                    }

                    // $isolate = new Isolat;
                    $isolate->code_cendawan = $input["code_cendawan"];
                    $isolate->name_cendawan = $input["name_cendawan"];
                    $isolate->quantity_cendawan = $input["quantity_cendawan"];
                    $isolate->label_cendawan = $input["label_cendawan"];
                    // $isolate->utilization = $input["utilization"];


                    $location = new Location;
                    $location->latitude = $input["latitude"];
                    $location->longitude = $input["longitude"];
                    $location->atitude = $input["atitude"];
                    $location->district_id = $input["id_district"];
                    $location->save();



                    $substrat = new Substrat;
                    $substrat->name_substrat = $input["name_substrat"];
                    $substrat->ecology = $input["ecology"];
                    $substrat->biology = $input["biology"];
                    $substrat->physiology = $input["physiology"];
                    $substrat->mycotoxin = $input["mycotoxin"];
                    $substrat->save();

                    $species = new Species;
                    $species->name_species = $input["name_cendawan"];
                    // $species->description_species = $input["description_species"];
                    $species->substrat_id = $substrat->id_substrat;

                    if(!isset($input['name_genus'])) $species->genus_id = $input["id_genus"];
                    else {
                        $genus = new Genus;
                        $genus->name_genus = $input["name_genus"];
                        if(!isset($input['name_family'])) $genus->family_id = $input["id_family"];
                        else {
                            $family = new Family;
                            $family->name_family = $input["name_family"];
                            if(!isset($input['name_ordo'])) $family->ordo_id = $input["id_ordo"];
                            else {
                                $ordo = new Ordo;
                                $ordo->name_ordo = $input["name_ordo"];
                                if(!isset($input['name_class'])) $ordo->class_id = $input["id_class"];
                                else {
                                    $class = new Classes;
                                    $class->name_class = $input["name_class"];
                                    if(!isset($input['name_divisi'])) $class->divisi_id = $input["id_divisi"];
                                    else {
                                        $divisi = new Divisi;
                                        $divisi->name_divisi = $input["name_divisi"];
                                        $divisi->save();
                                        $class->divisi_id = $divisi->id_divisi;
                                    }
                                    $class->save();
                                    $ordo->class_id = $class->id_class;

                                }
                                $ordo->save();
                                $family->ordo_id = $ordo->id_ordo;

                            }
                            $family->save();
                            $genus->family_id = $family->id_family;
                        }
                        $genus->save();
                        $species->genus_id = $genus->id_genus;
                    }

                    $species->save();

                    $isolator = new Isolator;
                    $isolator->name_isolator = $input["name_isolator"];
                    $isolator->instansi_isolator = $input["instansi_isolator"];
                    $isolator->expertise_isolator = $input["expertise_isolator"];
                    $isolator->date_isolator = date('Y-m-d H:i:s', strtotime($input["date_isolator"]));
                    $isolator->save();

                    $raiser = new Raiser;
                    $raiser->name_raiser = $input["name_raiser"];
                    $raiser->instansi_raiser = $input["instansi_raiser"];
                    $raiser->expertise_raiser = $input["expertise_raiser"];
                    $raiser->save();

                    $storage = new Storage;
                    $storage->no_tube = $input["no_tube"];
                    $storage->rack = $input["rack"];
                    $storage->isolator_id = $isolator->id_isolator;
                    $storage->raiser_id = $raiser->id_raiser;
                    $storage->save();


                    $isolate->species_id = $species->id_species;

                    $isolate->location_id = $location->id_location;

                    $isolate->storage_id = $storage->id_storage;
                    $isolate->save();





                    $files = $request->file('biakan_photo');

                    if($request->hasFile('biakan_photo'))
                    {
                        foreach ($files as $k=>$file) {
                            if (is_null ($file)) continue;
                          // dd($file);
                            $filename = time() . uniqid() . "_" . $file->getClientOriginalName();
                            // return $destinationPath
                            // $filename = $photo->store('photos');;
                            $urlfile = $file->move('image/biakan', $filename);

                            $photo = new Photo;
                            $photo->url_photo = $urlfile;
                            $photo->label_photo = 'biakan_photo';
                            $photo->id_cendawan = $isolate->id_cendawan;
                            $photo->save();
                        }
                    }



                    $files = $request->file('micrograph_photo');

                    if($request->hasFile('micrograph_photo'))
                    {
                        foreach ($files as $k=>$file) {
                            if (is_null ($file)) continue;
                          // dd($file);
                            $filename = time() . uniqid() . "_" . $file->getClientOriginalName();
                            // return $destinationPath
                            // $filename = $photo->store('photos');;
                            $urlfile = $file->move('image/micrograph', $filename);

                            $photo = new Photo;
                            $photo->url_photo = $urlfile;
                            $photo->label_photo = 'micrograph_photo';
                            $photo->id_cendawan = $isolate->id_cendawan;
                            $photo->save();
                        }
                    }


                    $input = [];








                    // return redirect('fungi-add');
                }
                catch(\Exception $e){
                   // do task when error
                   $error_msg = $e->getMessage();   // insert query
                }
            }
            else $error_msg = $isolate->v->messages()->first();
            $isolate_data= DB::table('isolat_cendawan')->orderBy('name_cendawan')->get();

            // $result = $isolate->update($request->all());


        }

        $states = State::orderBy('name_state', 'asc')->get();

        return view('admin/fungi-add', ['input' => $input, 'error_msg' => $error_msg, 'states' => $states]);
    }




    public function state()
    {
        $states = State::orderBy('name_state', 'asc')->get();

        return view('add-location', ['states' => $states]);
    }
    public function findProv(Request $request)
    {
        $data = Province::select('name_province', 'id_province')->where('state_id', $request->id)->get();

        return response()->json($data);
    }
    public function findCity(Request $request)
    {
        $data = City::select('name_city', 'id_city')->where('province_id', $request->id)->get();

        return response()->json($data);
    }
    public function findDistrict(Request $request)
    {
        $data = District::select('name_district', 'id_district')->where('id_city', $request->id)->get();

        return response()->json($data);
    }

    public function divisi()
    {
        $divisi = Divisi::orderBy('name_divisi', 'asc')->get();

         return response()->json($divisi);
    }
    public function findClass(Request $request)
    {
        $data = Classes::select('name_class', 'id_class')->where('divisi_id', $request->id)->get();

        return response()->json($data);
    }
    public function findOrdo(Request $request)
    {
        $data = Ordo::select('name_ordo', 'id_ordo')->where('class_id', $request->id)->get();

        return response()->json($data);
    }
    public function findFamily(Request $request)
    {
        $data = Family::select('name_family', 'id_family')->where('ordo_id', $request->id)->get();

        return response()->json($data);
    }
    public function findGenus(Request $request)
    {
        $data = Genus::select('name_genus', 'id_genus')->where('family_id', $request->id)->get();

        return response()->json($data);
    }


    public function postEntri3(Request $request)
    {
        $fungi = new Fungi;
    }

    public function destroy($id_cendawan)
    {
        DB::table('isolat_cendawan')->where('id_cendawan', $id_cendawan)->delete();
        return redirect('fungi-mng')->with(['message' => 'Successfuly deleted!']);
    }
    public function destroy2($id_cendawan)
    {
        DB::table('isolat_cendawan')->where('id_cendawan', $id_cendawan)->delete();
        return redirect('unverified')->with(['message' => 'Successfuly deleted!']);
    }

}

// public function destination(){
//         $state = State::orderBy('name', 'asc')->get();
//         return view('herbarium.weedherba.createAuthor', ['state' => $state]);
//     }

//     public function findProv(Request $request)
//     {
//         $data= Province::select('name', 'id_prov')->where('state_id', $request->id)->get();
//         return response()->json($data);
//     }


// $file = $request->file('image');
//         $fileName = $file->getClientOriginalName();
//         $request->file('image')->move("ias/",$fileName);

//         if ($request->file('image2') != null){
//             $file1 = $request->file('image2');
//             $fileName1 = $file1->getClientOriginalName();
//             $request->file('image2')->move("ias/",$fileName1);
//         }else{
//             $fileName1 =null;
//         }

//         if ($request->file('image3') != null){
//             $file2 = $request->file('image3');
//             $fileName2 = $file2->getClientOriginalName();
//             $request->file('image3')->move("ias/",$fileName2);
//         }else{
//             $fileName2 =null;
//         }

//         if ($request->file('image4') != null){
//             $file3 = $request->file('image4');
//             $fileName3 = $file3->getClientOriginalName();
//             $request->file('image4')->move("ias/",$fileName3);
//         }else{
//             $fileName3 =null;
//         }

//         if ($request->file('image5') != null){
//             $file4 = $request->file('image5');
//             $fileName4 = $file4->getClientOriginalName();
//             $request->file('image5')->move("ias/",$fileName4);
//         }else{
//             $fileName4 =null;
//         }

//         if ($request->file('image6') != null){
//              $file5 = $request->file('image6');
//             $fileName5 = $file5->getClientOriginalName();
//             $request->file('image6')->move("ias/",$fileName5);
//         }else{
//             $fileName5 =null;
//         }

//         $charac   = new CharacterSpecies;
//         $charac   -> picture_species                                = $fileName;
//         $charac   -> picture_species2                               = $fileName1;
//         $charac   -> picture_species3                               = $fileName2;
//         $charac   -> picture_species4                               = $fileName3;
//         $charac   -> picture_species5                               = $fileName4;
//         $charac   -> picture_species6                               = $fileName5;
//         $charac   -> save();
