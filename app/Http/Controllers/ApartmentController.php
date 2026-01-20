<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Http\Resources\ApartmentResource;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller {
    public function index() {

        $apartments = Apartment::paginate(2);


        return view('welcome', [
            'apartments' => $apartments
        ]);
    }

    public function store(ApartmentRequest $request) {
        return new ApartmentResource(Apartment::create($request->validated()));
    }

    public function show(Apartment $apartment) {
        return new ApartmentResource($apartment);
    }

    public function update(ApartmentRequest $request, Apartment $apartment) {
        $apartment->update($request->validated());

        return new ApartmentResource($apartment);
    }

    public function destroy(Apartment $apartment) {
        $apartment->delete();

        return response()->json();
    }
}
