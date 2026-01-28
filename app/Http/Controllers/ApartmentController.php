<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Http\Resources\ApartmentResource;
use App\Models\Admin;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller {

    /**
     * Lista los elementos
     */
    public function index() {
        $apartments = Apartment::latest('created_at')
            ->with('admin')
            ->paginate(10);

        return view('welcome', [
            'apartments' => $apartments
        ]);
    }

    /**
     * Regresa el formulario para crear un elemento
     */
    public function create(){
        $admins = Admin::all();

        return view('apartments.create', [
            'admins' => $admins
        ]);
    }

    /**
     * Guarda los datos del form
     */
    public function store(ApartmentRequest $request) {
        Apartment::create($request->validated());
        return redirect()->route('apartments.index');
    }

    /**
     * Regresa los datos de un elemento
     */
    public function show(Apartment $apartment) {
        //...
    }

    /**
     * Regresa el formulario para editar un elemento
     */
    public function edit(Apartment $apartment) {}

    /**
     * Guarda los datos del formulario de edición
     */
    public function update(ApartmentRequest $request, Apartment $apartment) {
        //...
    }

    /**
     * Elimina un elemento
     */
    public function destroy(Apartment $apartment) {
        $apartment->delete();

        // TODO: quitar el JSON y hacer redirect a view...
        return response()->json();
    }
}
