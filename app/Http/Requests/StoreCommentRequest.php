<?php

namespace App\Http\Requests;

use App\Models\Comment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'video_id'     => [
                'required',
                'integer'],
            'name'         => [
                'required'],
            'comment_text' => [
                'required'],
        ];

    }
}
