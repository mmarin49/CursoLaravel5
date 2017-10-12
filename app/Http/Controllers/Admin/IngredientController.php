<?php

namespace PizzaApp\Http\Controllers\Admin;


use Illuminate\Http\Request;
use PizzaApp\Http\Requests;
use PizzaApp\Http\Controllers\Controller;
use PizzaApp\Ingredient;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ingredients.index', [
            "ingredients" => Ingredient::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredient= new Ingredient;
        return view('admin.ingredients.create')->withIngredient($ingredient);
    }

    /**
     * @param Requests\IngredientRequest $ingredientRequest
     * @return mixed
     */
    public function store(Requests\IngredientRequest $ingredientRequest)
    {
        Ingredient::create($ingredientRequest-input());
        return redirect('admin/ingredients/index')->with('message','El ingrediente se ha creado!!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
