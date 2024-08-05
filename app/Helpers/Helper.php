<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 3:28 PM
 */

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class Helper
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;

    }
    public static function newsHome($news){
        $html ='';
        foreach ($news as $key=>$val){
            $slug = "tin-tuc/".$val['slug'].".".$val['id'].".html";

            $html .='<div class="col-12 col-lg-4">
                            <a href="'.$slug.'">
                                <div class="home-news-item">
                                    <div class="home-news-image">
                                        <img src="'.$val['thumb'].'" width="350" height="233.33" class="auto-size" loading="lazy">
                                    </div>
                                    <div class="home-news-content">
                                        <p class="home-news-content-title">'.$val['name'].'</p>
                                    </div>
                                </div>
                            </a>
                        </div>';
//            <p class="home-news-content-description"></p>
        }

        return $html;
    }
    public function itemNews($item){

        $slug_menu['slug'] = "";
        $slug_menu['name'] = "";
        if ($item['menu_id']>0){
            $menu = DB::table('menus')
                ->select('menus.*')
                ->where("id",$item['menu_id'])
                ->first();
            if ($menu->active==1){
                $slug_menu['slug'] = $menu->slug;
                $slug_menu['name'] = $menu->name;
            }
        }

        return $slug_menu;


    }



    public static function menu($menus, $parent_id = 0, $char = ''){
        $html ='';
        foreach ($menus as $key=>$menu){

            if ($menu->parent_id==$parent_id){
                $token = md5($menu->id."EditMenuHuongdang");
                $html .='
                    <tr>
                        <td>'.$menu->id.'</td>
                        <td>'.$char.$menu->name.'</td>
                        <td>'.self::active($menu->active).'</td>
                        <td>'.$menu->updated_at.'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/menus/edit/'.$menu->id.'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" onclick="removeRow('.$menu->id.',\'/admin/menus/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                ';
                unset($menus[$key]);
                $html.= self::menu($menus,$menu->id, $char . '--');
            }
        }
        return $html;
    }
    public function active($active = 0){
        return $active==0 ? '<span class="btn btn-danger btn-xs">No</span>' : '<span class="btn btn-success btn-xs">Yes</span>';
    }


    public static function menusSite($data, $parent_id= 0,$stt=1, $slug_item = ""){
        $html = "";
        foreach ($data as $key=>$item){
            if ($item->parent_id == $parent_id){
                if (self::isChild($data,$item->id)){

                    $html .="<url>";
                    $html .='<loc>https://huongdang.vn/'.$slug_item.'/'.$item->slug.'</loc>';
                    $html .='<lastmod>'.$item->created_at.'</lastmod>';
                    $html .='<changefreq>hourly</changefreq>';
                    $html .='<priority>1</priority>';
                    $html .="</url>";
                    $html .= self::menusSite($data,$item->id,$stt+1,"/".$item->slug);

                }else{
                    $html .="<url>";
                    $html .='<loc>https://huongdang.vn/'.$slug_item.'/'.$item->slug.'</loc>';
                    $html .='<lastmod>'.$item->created_at.'</lastmod>';
                    $html .='<changefreq>hourly</changefreq>';
                    $html .='<priority>1</priority>';
                    $html .="</url>";

                }

            }
        }
        return $html;
    }
    public static function menus($data, $parent_id= 0,$stt=1, $slug_item = ""){
        $html = "";
        foreach ($data as $key=>$item){
            if ($item->parent_id == $parent_id){
                if (self::isChild($data,$item->id)){
                    $html .='<li class="has-child"><a href="'.$slug_item.'/'.$item->slug.'">'.$item->name.'</a>';
                    $html .='<button class="main-menu-sub-icon" role="button" aria-label="Mở menu cấp '.$stt.'"></button>';
                    $html .='<ul class="main-menu-sub main-menu-sub-'.$stt.'">';
                    $html .= self::menus($data,$item->id,$stt+1,"/".$item->slug);
                    $html .='</ul></li>';

                }else{
                    $html .='<li class=""><a href="'.$slug_item.'/'.$item->slug.'">'.$item->name.'</a></li>';

                }

            }
        }
        return $html;
    }
    public static function isChild($menu, $id){
        foreach ($menu as $k => $item){
            if ($item->parent_id==$id){
                return true;
            }
        }
        return false;
    }



}