<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Immigration;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class ImmigrationService
{
    public function getImmigration()
    {
        $immigration = Immigration::where('active', 1)->first();
        return $immigration;
    }
    
    public function updateImmigration($request)
    {
        try {
            $immigration = Immigration::where('active', 1)->first();
            $immigration = $immigration ?? new Immigration();
            $immigration->name = $request->name;
            $immigration->seo_title = $request->seo_title;
            $immigration->description = $request->description;
            $immigration->content = $request->content; 
            $immigration->name_vn = $request->name_vn;
            $immigration->seo_title_vn = $request->seo_title_vn;
            $immigration->description_vn = $request->description_vn;
            $immigration->content_vn = $request->content_vn;
            $immigration->slug = Str::slug($request->name);
            $immigration->save();
            Session::flash('success', 'Immigration updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Immigration: ' . $e->getMessage());
        }
    }
}