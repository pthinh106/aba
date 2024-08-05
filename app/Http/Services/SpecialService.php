<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Special;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class SpecialService
{
    public function getSpecial()
    {
        $special = Special::where('active', 1)->first();
        return $special;
    }

    public function updateSpecial($request)
    {
        try {
            $special = Special::where('active', 1)->first();
            $special = $special ?? new Special();
            $special->name = $request->name;
            $special->seo_title = $request->seo_title;
            $special->description = $request->description;
            $special->content = $request->content;
            $special->name_vn = $request->name_vn;
            $special->seo_title_vn = $request->seo_title_vn;
            $special->description_vn = $request->description_vn;
            $special->content_vn = $request->content_vn;
            $special->slug = Str::slug($request->name);
            $special->save();
            Session::flash('success', 'Special updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Special: ' . $e->getMessage());
        }
    }
}