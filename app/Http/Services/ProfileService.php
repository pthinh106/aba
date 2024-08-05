<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Profile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class ProfileService
{
    public function getProfile()
    {
        $profile = Profile::where('active', 1)->first();
        return $profile;
    }

    public function updateProfile($request)
    {
        try {
            $profile = Profile::where('active', 1)->first();
            $profile = $profile ?? new Profile();
            $profile->name = $request->name;
            $profile->seo_title = $request->seo_title;
            $profile->description = $request->description;
            $profile->content = $request->content;
            $profile->name_vn = $request->name_vn;
            $profile->seo_title_vn = $request->seo_title_vn;
            $profile->description_vn = $request->description_vn;
            $profile->content_vn = $request->content_vn;
            $profile->slug = Str::slug($request->name);
            $profile->save();
            Session::flash('success', 'Profile updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Profile: ' . $e->getMessage());
        }
    }
}