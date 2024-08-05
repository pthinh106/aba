<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Warranty;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class WarrantyService
{
    public function getWarranty()
    {
        $warranty = Warranty::where('active', 1)->first();
        return $warranty;
    }

    public function updateWarranty($request)
    {
        try {
            $warranty = Warranty::where('active', 1)->first();
            $warranty = $warranty ?? new Warranty();
            $warranty->name = $request->name;
            $warranty->seo_title = $request->seo_title;
            $warranty->description = $request->description;
            $warranty->content = $request->content;
            $warranty->name_vn = $request->name_vn;
            $warranty->seo_title_vn = $request->seo_title_vn;
            $warranty->description_vn = $request->description_vn;
            $warranty->content_vn = $request->content_vn;
            $warranty->slug = Str::slug($request->name);
            $warranty->save();
            Session::flash('success', 'Warranty updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Warranty: ' . $e->getMessage());
        }
    }
}
