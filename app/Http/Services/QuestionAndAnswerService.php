<?php
/**
 * Created by PhpStorm.
 * User: 84975
 * Date: 3/26/2022
 * Time: 2:12 PM
 */

namespace App\Http\Services;

use App\Models\QuestionAndAnswer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;

class QuestionAndAnswerService
{
    public function getQuestionAndAnswer()
    {
        $questionAndAnswer = QuestionAndAnswer::where('active', 1)->first();
        return $questionAndAnswer;
    }

    public function updateQuestionAndAnswer($request)
    {
        try {
            $questionAndAnswer = QuestionAndAnswer::where('active', 1)->first();
            $questionAndAnswer = $questionAndAnswer ?? new QuestionAndAnswer();
            $questionAndAnswer->name = $request->name;
            $questionAndAnswer->seo_title = $request->seo_title;
            $questionAndAnswer->description = $request->description;
            $questionAndAnswer->content = $request->content;
            $questionAndAnswer->name_vn = $request->name_vn;
            $questionAndAnswer->seo_title_vn = $request->seo_title_vn;
            $questionAndAnswer->description_vn = $request->description_vn;
            $questionAndAnswer->content_vn = $request->content_vn;
            $questionAndAnswer->slug = Str::slug($request->name);
            $questionAndAnswer->save();
            Session::flash('success', 'QuestionAndAnswer updated successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Failed to update QuestionAndAnswer: ' . $e->getMessage());
        }
    }
}