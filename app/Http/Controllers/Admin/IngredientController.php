<?php

namespace PizzaApp\Http\Controllers\Admin;  

use Illuminate\Http\Request;
<<<<<<< HEAD
use PizzaApp\App\Http\Requests\IngredientRequest;
use PizzaApp\Http\Requests;
=======
use App\Http\Requests;
>>>>>>> parent of 5f08a81... cambios_a_171212
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

<<<<<<< HEAD
	/**
	 * @param IngredientRequest $ingredientRequest
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(IngredientRequest $ingredientRequest)
    {
        Ingredient::create($ingredientRequest->input());
        return redirect('admin/ingredients/index')->with('message','El ingrediente se ha creado!!');
=======
    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\IngredientRequest $ingredientRequest
     * @return \Illuminate\Http\Response
     * @internal param \Illuminate\Http\Request $request
     */
    public function store(Requests\IngredientRequest $ingredientRequest)
    {

>>>>>>> parent of 5f08a81... cambios_a_171212
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
