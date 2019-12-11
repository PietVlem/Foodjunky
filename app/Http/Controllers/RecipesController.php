<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipes;
use App\Categories;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipes::orderByRaw('RAND()')->take(4)->get();
        return view('recipes.index', compact('recipes'));
    }

    public function overview(){
        $categories = Categories::latest()->get();
        if(request('category')){
            $recipes = Categories::where('name', request('category'))->firstOrFail()->recipes;
        }else{
            $recipes = Recipes::latest()->where('show', true)->paginate(9);
        }
        
        return view('recipes.overview', compact('recipes', 'categories'));
    }

    public function show(Recipes $recipe){
        $related_recipes = Recipes::orderByRaw('RAND()')->where('category_id', $recipe->category_id)->take(4)->get();
        return view('recipes.show', compact(['recipe', 'related_recipes']));
    }
}
