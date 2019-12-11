@extends('layout')

@section('content')
<div>
    <div class="image image--hero-small" style="background-image: url({{ asset('images/recipes.jpg')}});">
        <div class="image--hero__text-container">
            <div class="hero-text">
                <h1 class="text-transform-uppercase">Recipes</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2>Categories</h2>
                <ul class="categories-list">
                    @foreach($categories as $category)
                        <li class="{{ request('category') === $category->name ? 'active' : '' }}"><a href="{{ route('recipes.overview', ['category' => $category->name ]) }}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-9">
                @forelse (array_chunk($recipes->all(), 3) as $threeRecipes)
                <div class="row row--40">
                    @foreach($threeRecipes as $recipe)
                        <div class="col-sm-4">
                            <a class="recipe-block-link" href="{{ route('recipes.show', $recipe) }}"> 
                                <div class="recipe-wrapper">
                                    <div class="image" style="background-image: url({{ $recipe->image_url }});" ></div>
                                    <h3>
                                        {{ $recipe->name }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @empty
                    <p>No recipes found in this category</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection