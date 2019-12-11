@extends('layout')

@section('content')
    <div>
        <div class="image image--hero" style="background-image: url({{ asset('images/index.jpg')}});">
            <div class="image--hero__text-container">
                <div class="hero-text">
                    <h1>Inspiration for the Holidays</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="#" class="button">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        <div class="bg bg--grey">
            <div class="container ">
                <div class="row row--40 justify-content-center">
                    <span class="intermediate-title">Best Recipes</span>
                    <h2>Welcome to Foodjunky</h2>
                    <p class="text-align-center">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="row row--40">
                    <div class="col-sm-4">
                        <div class="into-image-container">
                            <img class="into-image-container__image" src="{{ asset('images/strawberry.svg')}}" alt="">
                        </div>
                        <h3 class="text-align-center">Recipes with fruits</h3>
                        <p class="text-align-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="into-image-container">
                            <img class="into-image-container__image" src="{{ asset('images/carrot.svg')}}" alt="">
                        </div>
                        <h3 class="text-align-center">Recipes with Vegtables</h3>
                        <p class="text-align-center">totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="into-image-container">
                            <img class="into-image-container__image" src="{{ asset('images/cheese.svg')}}" alt="">
                        </div>
                        <h3 class="text-align-center">Recipes with Cheese</h3>
                        <p class="text-align-center">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container ">
                <div class="row row--40 justify-content-center">
                    <span class="intermediate-title">Discover</span>
                    <h2>Recipes of the week</h2>
                </div>
                @foreach (array_chunk($recipes->all(), 4) as $fourRecipes)
                <div class="row">
                    @foreach($fourRecipes as $recipe)
                        <div class="col-sm-3">
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
