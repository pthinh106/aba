<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\LegalRepresentative;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class LegalRepresentativeService
{
    public function getLegalRepresentative()
    {
        $legalRepresentative = LegalRepresentative::where('active', 1)->first();
        return $legalRepresentative;
    }

    public function updateLegalRepresentative($request)
    {
        try {
            $legalRepresentative = LegalRepresentative::where('active', 1)->first();
            $legalRepresentative = $legalRepresentative ?? new LegalRepresentative();
            $legalRepresentative->name = $request->name;
            $legalRepresentative->seo_title = $request->seo_title;
            $legalRepresentative->description = $request->description;
            $legalRepresentative->content = $request->content;
            $legalRepresentative->name_vn = $request->name_vn;
            $legalRepresentative->seo_title_vn = $request->seo_title_vn;
            $legalRepresentative->description_vn = $request->description_vn;
            $legalRepresentative->content_vn = $request->content_vn;
            $legalRepresentative->slug = Str::slug($request->name);
            $legalRepresentative->save();
            Session::flash('success', 'Legal Representative updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Legal Representative: ' . $e->getMessage());
        }
    }
}
