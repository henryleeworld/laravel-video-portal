@extends('layouts.mainTable')

@section('content')

<!--==========================================
=            All Channels Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>全部頻道</h2>
					<p>打造精采多元的數位影音生活，不只提供高速光纖上網及多樣性的數位家庭娛樂，更整合上網、有線電視、數位電視等內容，提供您豐富多樣的數位匯流服務。</p>
				</div>
                <div class="row">
                    @foreach ($channels->take(8) as $channel)
                        <!-- Channel list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="category-block">
                                <div class="header">
                                    <i class="fas fa-video icon-bg-{{ $channel->id }}"></i>
                                    <h4>
                                        <a href="{{ route('channel', [$channel->id]) }}">{{ $channel->name }} <p style="display: inline">({{ $channel->videos->count() }})</p></a>

                                    </h4>
                                </div>
                                <ul class="category-list">
                                    @foreach ( $channel->videos->shuffle()->take(5) as $singleVideo)
                                        <li><a href="{{ route('video', [$singleVideo->id]) }}">{{ $singleVideo->title}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- /Channel List -->
                    @endforeach
                </div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


@stop