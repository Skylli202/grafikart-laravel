<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use App\Models\Option;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index (): View
    {
        $options = Option::paginate(1);

        return View('admin.option.index', ['options' => $options]);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create (): View
    {
        return View('admin.option.create', ['option'=>new Option()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  StoreOptionRequest  $request
     * @return RedirectResponse
     */
    public function store (StoreOptionRequest $request): RedirectResponse
    {
        $option = Option::create($request->validated());
        return redirect()->route('admin.option.show', ['option' => $option]);
    }

    /**
     * Display the specified resource.
     * @param  Option  $option
     * @return View
     */
    public function show (Option $option): View
    {
        return View('admin.option.show', ['option' => $option]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param  Option  $option
     * @return View
     */
    public function edit(Option $option): View
    {
        return View('admin.option.edit', ['option' => $option]);
    }

    /**
     * Update the specified resource in storage.
     * @param  UpdateOptionRequest  $request
     * @param  Option  $option
     * @return RedirectResponse
     */
    public function update(UpdateOptionRequest $request, Option $option): RedirectResponse
    {
        $option->update($request->validated());
        return redirect()->route('admin.option.show', ['option' => $option]);
    }

    /**
     * Remove the specified resource from storage.
     * @return RedirectResponse
     */
    public function destroy(): RedirectResponse
    {
        return redirect()->route('admin.option.index');
    }
}
