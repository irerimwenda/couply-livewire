<?php

namespace App\Http\Livewire;

use App\Models\ProductCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PreviewCategories extends Component
{
    /**
     * Render the component.
     * @return Factory|\Illuminate\Foundation\Application|View|Application
     */
    public function render(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $productCategories = ProductCategory::all();
        $productCategories->transform(function ($category) {
            $faker = \Faker\Factory::create();
            $category->least_price = '$' . $faker->numberBetween(100, 500);
            return $category;
        });

        return view('livewire.preview-categories', compact('productCategories'));
    }
}
