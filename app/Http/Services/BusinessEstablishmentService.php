<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\BusinessEstablishment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class BusinessEstablishmentService
{
    public function getBusinessEstablishment()
    {
        $businessEstablishment = BusinessEstablishment::where('active', 1)->first();
        return $businessEstablishment;
    }

    public function updateBusinessEstablishment($request)
    {
        try {
            $businessEstablishment = BusinessEstablishment::where('active', 1)->first();
            $businessEstablishment = $businessEstablishment ?? new BusinessEstablishment();
            $businessEstablishment->name = $request->name;
            $businessEstablishment->seo_title = $request->seo_title;
            $businessEstablishment->description = $request->description;
            $businessEstablishment->content = $request->content;
            $businessEstablishment->name_vn = $request->name_vn;
            $businessEstablishment->seo_title_vn = $request->seo_title_vn;
            $businessEstablishment->description_vn = $request->description_vn;
            $businessEstablishment->content_vn = $request->content_vn;
            $businessEstablishment->slug = Str::slug($request->name);
            $businessEstablishment->save();
            Session::flash('success', 'Business Establishment updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Business Establishment: ' . $e->getMessage());
        }
    }
}