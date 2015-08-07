<?php namespace App\Http\Controllers;

use App\Dega;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Qytet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DegaController extends Controller {

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
		$deget = Dega::all();
		return view('dega.index', compact('deget'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$qyteti = Qytet::lists('qyteti','qyteti');
		$varet_nga = Dega::lists('dega','dega');
		return view('dega.create',compact('qyteti','varet_nga'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$qytet = Qytet::where('qyteti',Input::get('qyteti'))->first();
		if(Input::has('varet_nga')){
			$varet_nga = Dega::where('dega', Input::get('dega'))->first();
			Dega::create([
				'dega' => Input::get('dega'),
				'qyteti' => $qytet['id'],
				'varet_nga' => $varet_nga['id']
			]);
		}else{
			Dega::create([
				'dega' => Input::get('dega'),
				'qyteti' => $qytet['id']
			]);
		}
		return redirect('dega');
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
		$dega = Dega::findOrFail($id);
		$qyteti = Qytet::lists('qyteti','qyteti');
		$varet_nga = Dega::lists('dega','dega');
		return view('dega.edit',compact('dega','qyteti','varet_nga'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$dega = Dega::findOrFail($id);
		$qytet = Qytet::where('qyteti',Input::get('qyteti'))->first();
		if(Input::has('varet_nga')){
			$varet_nga = Dega::where('dega', Input::get('dega'))->first();
			$dega->update([
				'dega' => Input::get('dega'),
				'qyteti' => $qytet->id,
				'varet_nga' => $varet_nga->id
			]);
		}else{
			$dega->update([
				'dega' => Input::get('dega'),
				'qyteti' => $qytet->id
			]);
		}
		return redirect('dega');

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
