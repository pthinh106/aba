<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\AboutUs;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class AboutUsService
{
    public function getAboutUs()
    {
        $aboutUs = AboutUs::where('active', 1)->first();
        return $aboutUs;
    }

    public function updateAboutUs($request)
    {
        try {
            $aboutUs = AboutUs::where('active', 1)->first();
            $aboutUs = $aboutUs ?? new AboutUs();
            $aboutUs->name = $request->name;
            $aboutUs->seo_title = $request->seo_title;
            $aboutUs->description = $request->description;
            $aboutUs->content = $request->content;
            $aboutUs->name_vn = $request->name_vn;
            $aboutUs->seo_title_vn = $request->seo_title_vn;
            $aboutUs->description_vn = $request->description_vn;
            $aboutUs->content_vn = $request->content_vn;
            $aboutUs->slug = Str::slug($request->name);
            $aboutUs->save();
            Session::flash('success', 'About Us updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update About Us: ' . $e->getMessage());
        }
    }

    public function deleteAboutUs($id)
    {
        try {
            $aboutUs = AboutUs::findOrFail($id);
            $aboutUs->delete();
            Session::flash('success', 'About Us deleted successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to delete About Us: ' . $e->getMessage());
        }
    }
}