<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class ProductService
{
    public function getProduct()
    {
        $product = Product::where('active', 1)->first();
        return $product;
    }

    public function updateProduct($request)
    {
        try {
            $product = Product::where('active', 1)->first();
            $product = $product ?? new Product();
            $product->name = $request->name;
            $product->seo_title = $request->seo_title;
            $product->description = $request->description;
            $product->content = $request->content;
            $product->name_vn = $request->name_vn;
            $product->seo_title_vn = $request->seo_title_vn;
            $product->description_vn = $request->description_vn;
            $product->content_vn = $request->content_vn;
            $product->slug = Str::slug($request->name);
            $product->save();
            Session::flash('success', 'Product updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Product: ' . $e->getMessage());
        }
    }
}