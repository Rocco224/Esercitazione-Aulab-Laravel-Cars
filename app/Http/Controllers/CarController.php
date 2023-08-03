<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Extra;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function cars()
    {
        $cars = Car::all();

        return view('cars-catalog', compact('cars'));
    }

    public function car($id)
    {
        $car = Car::findOrFail($id);
        $optionals = Extra::all();

        return view('car', compact('car', 'optionals', 'id'));
    }

    public function order(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $car->extras()->detach();
        $car->extras()->attach($request->optionals);

        return redirect()->back()->with(['success' => 'Grazie, auto preordinata!']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();

        return view('create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid())
        {

            $randomFileName = uniqid('image_'). "." . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/images' .$car->id , $randomFileName);
            
            $car->image = $imagePath;

            $car->save();
        }

        return redirect()->route('cars.catalog')->with(['success' => 'Auto aggiunta con successo!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());

        return redirect()->route('cars.catalog')->with(['success' => 'Auto aggiornata con successo!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.catalog')->with(['danger' => 'Auto eliminata con successo!']);
    }
}
