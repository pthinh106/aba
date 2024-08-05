<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\HomeBox;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Exception;

class HomeBoxService
{
    public function getListHomeBox()
    {
        $homeBox = HomeBox::where('active', 1)->get();
        return $homeBox;
    }

    public function getListHomeBoxAll()
    {
        $homeBox = HomeBox::all();
        return $homeBox;
    }

    public function updateHomeBox($request)
    {
        try {
            $homeBox = HomeBox::where('active', 1)->first();
            $homeBox = $homeBox ?? new HomeBox();
            $homeBox->name = $request->name;
            $homeBox->description = $request->description;

            if ($request->hasFile('image')) {
                // Xóa hình ảnh cũ nếu có
                if ($homeBox->image) {
                    Storage::disk('public')->delete($homeBox->image);
                }

                // Lưu hình ảnh mới với tên UUID
                $image = $request->file('image');
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('images', $imageName, 'public');
                $homeBox->image = $imagePath;
            }

            $homeBox->save();
            Session::flash('success', 'Home Box updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Home Box: ' . $e->getMessage());
        }
    }

    public function deleteHomeBox($id)
    {
        try {
            $homeBox = HomeBox::find($id);
            if ($homeBox->image) {
                Storage::disk('public')->delete($homeBox->image);
            }
            $homeBox->delete();
            Session::flash('success', 'Home Box deleted successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to delete Home Box: ' . $e->getMessage());
        }
    }

    public function updateListHomeBox($request)
    {
            $nameBox_US = $request->input('nameBox_US', []);
            $descriptionBox_US = $request->input('descriptionBox_US', []);
            $nameBox_VN = $request->input('nameBox_VN', []);
            $descriptionBox_VN = $request->input('descriptionBox_VN', []);
            $target_url = $request->input('target_url', []);
            $activeBox = $request->input('activeBox', []);
            $idBox = $request->input('idBox', []);
            $images = $request->file('image', []);

            
            
            for ($i = 0; $i < count($nameBox_US); $i++) {
                if(!$nameBox_US[$i] || !$descriptionBox_US[$i] || !$nameBox_VN[$i] || !$descriptionBox_VN[$i] || !$target_url[$i]){
                    continue;
                }
                $homeBox = HomeBox::find($idBox[$i]);
                
                $homeBox = $homeBox ?? new HomeBox();
                $homeBox->nameBox_US = $nameBox_US[$i];
                $homeBox->descriptionBox_US = $descriptionBox_US[$i];
                $homeBox->nameBox_VN = $nameBox_VN[$i];
                $homeBox->descriptionBox_VN = $descriptionBox_VN[$i];
                $homeBox->target_url = $target_url[$i];
                
                if (isset($images[$i]) && $images[$i]) {
                    // Xóa hình ảnh cũ nếu có
                    if ($homeBox->image) {
                        Storage::disk('public')->delete($homeBox->image);
                    }
                
                    // Lưu hình ảnh mới với tên UUID
                    $image = $images[$i];
                    $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                    $imagePath = $image->storeAs('images', $imageName, 'public');
                    $homeBox->image = $imagePath;
                }
                
                $homeBox->active = $activeBox[$i] == 'on' ? 1 : 0;
                $homeBox->save();
            }
        
    }
}