<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\TaxLaw;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class TaxLawService
{
    public function getTaxLaw()
    {
        $taxLaw = TaxLaw::where('active', 1)->first();
        return $taxLaw;
    }

    public function updateTaxLaw($request)
    {
        try {
            $taxLaw = TaxLaw::where('active', 1)->first();
            $taxLaw = $taxLaw ?? new TaxLaw();
            $taxLaw->name = $request->name;
            $taxLaw->seo_title = $request->seo_title;
            $taxLaw->description = $request->description;
            $taxLaw->content = $request->content;
            $taxLaw->name_vn = $request->name_vn;
            $taxLaw->seo_title_vn = $request->seo_title_vn;
            $taxLaw->description_vn = $request->description_vn;
            $taxLaw->content_vn = $request->content_vn;
            $taxLaw->slug = Str::slug($request->name);
            $taxLaw->save();
            Session::flash('success', 'Tax Law updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Tax Law: ' . $e->getMessage());
        }
    }
}
