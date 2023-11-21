@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.video.title') }}
    </div>

    <div class="card-body">
        <div class="mb-3">
            <div class="mb-3">
                <a class="btn btn-light" href="{{ route('admin.videos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.video.fields.id') }}
                        </th>
                        <td>
                            {{ $video->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.video.fields.channel') }}
                        </th>
                        <td>
                            {{ $video->channel->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.video.fields.title') }}
                        </th>
                        <td>
                            {{ $video->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.video.fields.youtube_embed') }}
                        </th>
                        <td>
                            {{ $video->youtube_embed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.video.fields.description') }}
                        </th>
                        <td>
                            {{ $video->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-0">
                <a class="btn btn-light" href="{{ route('admin.videos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection