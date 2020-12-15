<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Video;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index()
    {
        $channels = Channel::all();

        return view('mainTable.index', compact('channels'));
    }

    public function channel(Channel $channel)
    {
        $videos = Video::with('channel')
            ->where('channel_id', $channel->id)
            ->paginate(9);

        return view('mainTable.channel', compact('videos', 'channel'));
    }

    public function video(Video $video)
    {
        $video->load('channel.videos');

        return view('mainTable.video', compact ('video'));
    }

}