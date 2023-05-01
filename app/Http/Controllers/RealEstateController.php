<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRealEstateRequest;
use App\Http\Requests\UpdateRealEstateRequest;
use App\Models\RealEstate;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RealEstateController extends Controller
{
	/**
	 * Display a listing of the resource.
	 * @return View
	 */
	public function index(): View
	{
		$realEstates = RealEstate::paginate(1);

		return View('admin.realEstate.index', [
			'realEstates' => $realEstates,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 * @return View
	 */
	public function create(): View
	{
		return View('admin.realEstate.create', [
			'realEstate' => new RealEstate(),
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  StoreRealEstateRequest  $request
	 * @return RedirectResponse
	 */
	public function store(StoreRealEstateRequest $request): RedirectResponse
	{
		$realEstate = RealEstate::create($request->validated());

		return redirect()->route('admin.realEstates.show', [
			'realEstate' => $realEstate,
		]);
	}

	/**
	 * Display the specified resource.
	 * @param  RealEstate  $realEstate
	 * @return View
	 */
	public function show(RealEstate $realEstate): View
	{
		return View('admin.realEstate.show', [
			'realEstate' => $realEstate,
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  RealEstate  $realEstate
	 * @return View
	 */
	public function edit(RealEstate $realEstate): View
	{
		return View('admin.realEstate.edit', [
			'realEstate' => $realEstate,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 * @param  UpdateRealEstateRequest  $request
	 * @param  RealEstate  $realEstate
	 * @return RedirectResponse
	 */
	public function update(UpdateRealEstateRequest $request, RealEstate $realEstate): RedirectResponse
	{
		$realEstate->update($request->validated());

		return to_route('admin.realEstates.show', [
			'realEstate' => $realEstate,
		])->with('success', 'Real estate successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  RealEstate  $realEstate
	 * @return RedirectResponse
	 */
	public function destroy(RealEstate $realEstate): RedirectResponse
	{
		$realEstate->delete();

		return redirect()->route('admin.realEstates.index');
	}
}
