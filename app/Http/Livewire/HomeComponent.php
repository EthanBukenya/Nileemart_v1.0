<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cart;

class HomeComponent extends Component
{


    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name,$this->qty, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }


    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return;
            }
        }
    }
    public function render()
    {
        //$product = Product::where('slug', $this->slug)->first();
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale=Sale::find(1);
        $popular_products = Product::inRandomOrder()->limit(8)->get();
        if (Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
        }
        $product = Product::orderBy('created_at', 'DESC')->get()->take(8);
        return view('livewire.home-component',['sliders'=>$sliders, 'lproducts'=>$lproducts,'categories'=>$categories, 'no_of_products'=>$no_of_products, 'sproducts'=>$sproducts,'popular_products'=>$popular_products, 'sale'=>$sale, 'product'=>$product])->layout('layouts.base');
    }
}
