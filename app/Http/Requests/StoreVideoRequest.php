<?php

namespace App\Http\Requests;

use App\Models\Video;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVideoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'channel_id'    => [
                'required',
                'integer'],
            'title'         => [
                'required'],
            'youtube_embed' => [
                'required'],
        ];

    }
}
