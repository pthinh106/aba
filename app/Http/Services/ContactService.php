<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class ContactService
{
    public function getContact()
    {
        $contact = Contact::where('active', 1)->first();
        return $contact;
    }

    public function updateContact($request)
    {
        try {
            $contact = Contact::where('active', 1)->first();
            $contact = $contact ?? new Contact();
            $contact->name = $request->name;
            $contact->seo_title = $request->seo_title;
            $contact->description = $request->description;
            $contact->content = $request->content;
            $contact->name_vn = $request->name_vn;
            $contact->seo_title_vn = $request->seo_title_vn;
            $contact->description_vn = $request->description_vn;
            $contact->content_vn = $request->content_vn;
            $contact->slug = Str::slug($request->name);
            $contact->save();
            Session::flash('success', 'Contact updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update Contact: ' . $e->getMessage());
        }
    }
}