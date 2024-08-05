<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//         $setting_data = DB::table('table_addon_setting')->where("id",1)->first();
//         config(['app.title' => $setting_data->company]);
//         config(['app.descriptions' => $setting_data->description]);
//         config(['app.version' => "1"]);
// //        config(['app.static_url' => $_SERVER['SERVER_NAME']]);
//         config(['app.static_url' =>""]);
//         config(['app.base_url' => ""]);
//         config(['app.company' => $setting_data->company]);
//         config(['app.copyright' => $setting_data->copyright]);
//         config(['app.author' => $setting_data->author]);
//         config(['app.og_url' => $setting_data->og_url]);
//         config(['app.og_title' => $setting_data->og_title]);
//         config(['app.og_description' => $setting_data->og_description]);
//         config(['app.canonical' => $setting_data->canonical]);
//         config(['app.link_youtube' => $setting_data->link_youtube]);
//         config(['app.link_zalo' => $setting_data->link_zalo]);
//         config(['app.link_facebook' => $setting_data->link_facebook]);
//         config(['app.is_index' => true]);
//         config(['app.is_follow' => false]);
        // Paginator::useBootstrap();
    }
}
