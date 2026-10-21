<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all()->keyBy('id');
        return view('dishes.index', compact('dishes'));
    }

    public function create()
    {
        return view('dishes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|max:100',
            'main_ingredient' => 'required|max:150',
            'origin'          => 'required|in:Naga City,Camarines Sur,Albay,Camarines Norte',
        ]);

        Dish::create($validated);

        return redirect()->route('dishes.index')->with('success', 'Dish added successfully!');
    }

    public function show(string $id)
    {
        $dish = Dish::findOrFail($id);
        return view('dishes.show', compact('dish', 'id'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        return view('dishes.show', ['dish' => Dish::findOrFail(1), 'id' => 1]);
    }

    public function filter($origin = null)
    {
        $query = Dish::query();

        if ($origin !== null) {
            $query->where('origin', $origin);
        }

        return view('dishes.filter', [
            'dishes' => $query->get()->keyBy('id'),
            'origin' => $origin,
        ]);
    }
}