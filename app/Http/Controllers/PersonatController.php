<?php namespace App\Http\Controllers;

use App\Dega;
use App\Gatishmeria;
use App\GjendjaCivile;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\InfoRequest;
use App\Http\Requests\KontaktRequest;
use App\Http\Requests\PersonatRequest;
use App\Info;
use App\Kontakt;
use App\NjohuriShtese;
use App\Personat;
use App\Pozicioni;
use App\profesioni;
use App\Programi;
use App\Qytet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PersonatController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$personi = Personat::all();
		return view('rregjistrimi.index', compact('personi'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$vendlindja = Qytet::lists('qyteti','qyteti');
		$profesioni = Profesioni::lists('profesioni','profesioni');
		$gjendja_civile = GjendjaCivile::lists('statusi','statusi');
		$njohuri_shtese = NjohuriShtese::lists('njohuri_shtese','njohuri_shtese');
		$qendra = Dega::lists('dega','dega');
		$pozicioni = Pozicioni::lists('pozicioni','pozicioni');
		$programi = Programi::lists('programi','programi');
		$gatishmeria = Gatishmeria::lists('gatishmeria','gatishmeria');
		return view('rregjistrimi.create',compact('vendlindja','profesioni','gjendja_civile','njohuri_shtese','qendra','pozicioni','programi','gatishmeria'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PersonatRequest $person, InfoRequest $info, KontaktRequest $kontakt)
	{
		$vendlindja = Qytet::firstOrCreate(['qyteti' => $person->get('vendlindja')]);
		$profesioni = Profesioni::firstOrCreate(['profesioni' => $person->get('profesioni')]);
		$gjendja_civile =  GjendjaCivile::firstOrCreate(['statusi' => $person->get('gjendja_civile')]);
		Personat::create([
			'emer' => $person->get('emer'),
			'mbiemer' => $person->get('mbiemer'),
			'datelindja' => $person->get('datelindja'),
			'vendlindja' => $vendlindja->id,
			'profesioni' => $profesioni->id,
			'gjinia' => $person->get('gjinia'),
			'gjendja_civile' => $gjendja_civile->id
		]);

		$personi = Personat::where('emer',$person->get('emer'))->where('mbiemer',$person->get('mbiemer'))->where('datelindja', $person->get('datelindja'))->first();
		Pozicioni::firstOrCreate(['pozicioni' => $info->get('pozicioni')]);
		$pozicioni = Pozicioni::where(['pozicioni' => $info->get('pozicioni')])->first();
		Gatishmeria::firstOrCreate(['gatishmeria' => $info->get('gatishmeria')]);
		$gatishmeria = Gatishmeria::where(['gatishmeria' => $info->get('gatishmeria')])->first();
		$qendra = Dega::where(['dega' => $info->get('qendra')])->first();
		$programi = Programi::where(['programi' => $info->get('programi')])->first();
		Info::create([
			'personi' => $personi->id,
			'qendra' => $qendra->id,
			'pozicioni' => $pozicioni->id,
			'programi' => $programi->id,
			'disponimi' => $info->get('disponimi'),
			'gatishmeria' => $gatishmeria->id,
			'koha' => $info->get('koha'),
			'rregjistrimi' => $info->get('rregjistrimi'),
			'viti_i_fundit' => $info->get('viti_i_fundit')
		]);
		Kontakt::create([
			'personi' => $personi->id,
			'email' => $kontakt->get('email'),
			'telefon' => $kontakt->get('telefon'),
			'celular' => $kontakt->get('celular')
		]);
//		foreach(Input::get('njohuri_te_tjera[]') as $key => $njohuri){
			NjohuriShtese::firstOrCreate(['njohuri_shtese' => Input::get('njohuri_te_tjera')]);
			$njohuri = NjohuriShtese::where(['njohuri_shtese' => Input::get('njohuri_te_tjera')])->first();
//		}
		$personi->njohuri_shtese()->attach($njohuri->id);

		return $personi;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$person = Personat::findOrFail($id);
		$vendlindja = Qytet::lists('qyteti','id');
		$profesioni = Profesioni::lists('profesioni','id');
		$gjendja_civile = GjendjaCivile::lists('statusi','id');
		$njohuri_shtese = NjohuriShtese::lists('njohuri_shtese','id');
		$qendra = Dega::lists('dega','id');
		$pozicioni = Pozicioni::lists('pozicioni','id');
		$programi = Programi::lists('programi','id');
		$gatishmeria = Gatishmeria::lists('gatishmeria','id');
		return view('rregjistrimi.edit',compact('vendlindja','profesioni','gjendja_civile','njohuri_shtese','qendra','pozicioni','programi','gatishmeria','person'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
