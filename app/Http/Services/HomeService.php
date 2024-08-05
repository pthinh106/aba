<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Home;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Http\Services\HomeBoxService;
use Exception;

class HomeService
{
    protected $homeBoxService;

    public function __construct(HomeBoxService $homeBoxService)
    {
        $this->homeBoxService = $homeBoxService;
    }

    public function getHome()
    {
        $home = Home::where('active', 1)->first();
        $arrHomeBox = $this->homeBoxService->getListHomeBox();
        return ['home' => $home, 'arrHomeBox' => $arrHomeBox];
    }

    public function getHomeAll()
    {
        $home = Home::where('active', 1)->first();
        $arrHomeBox = $this->homeBoxService->getListHomeBoxAll();
        return ['home' => $home, 'arrHomeBox' => $arrHomeBox];
    }



    public function updateHome($request)
    {
        try {
            $home = Home::where('active', 1)->first();
            $home = $home ?? new Home();
            $home->name = $request->name;
            $home->seo_title = $request->seo_title;
            $home->description = $request->description;
            $home->content = $request->content;
            $home->name_vn = $request->name_vn;
            $home->seo_title_vn = $request->seo_title_vn;
            $home->description_vn = $request->description_vn;
            $home->content_vn = $request->content_vn;
            $home->slug = Str::slug($request->name);
            $home->save();
            $this->homeBoxService->updateListHomeBox($request);
            Session::flash('success', 'Home updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Home: ' . $e->getMessage());
        }
    }
}