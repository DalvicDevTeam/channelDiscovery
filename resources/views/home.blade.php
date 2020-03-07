@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <form action="{{ route('filter') }}" method="GET">

            <div class="row">
                <div class="col"> <h4 class="font-weight-bold mb-4">Filter</h4></div>
                <div class="col-md-auto"><input type="submit" class="btn btn-outline-primary rounded-0" value="Filter" onclick="filter()"></div>
            </div>
            <div class="members-count border rounded p-2">
                <strong class="">Members Count</strong><br>
                <div class="pl-3">
                    <div class="">
                        <p class="mb-0">Min(<span id="min_members_span">0</span>)</p>
                        <input type="range" min="1" max="100000" class="slider form-control-range" value="1" name="min_members" id="minrange">
                    </div>
                    <div class="">
                        <p class="mb-0">Max(<span id="max_members_span">1000000</span>)</p>
                        <input type="range" min="5000" max="1000000" value="1000000" class="slider form-control-range" name="max_members" id="maxrange">
                    </div>
                </div>
            </div>
            <div class="categories mt-4 border rounded p-2">
                <strong class="">Categories</strong>
                <div class="pl-3">
                    @foreach ($categories as $category)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="{{$category->id}}" name="cat[]" value="{{$category->id}}">
                            <label for="{{$category->id}}">{{ $category->name }}</label><br>
                        </div>
                    @endforeach
                </div>
            </form>
                
            </div>
            
            
        </div>
        <div class="col-md-9">
            <h4 class="font-weight-bold mb-4">Channels</h4>
            <div class="channels card">
                @if (count($channels) > 0)
                @foreach ($channels as $channel)
                <div class="channel-item p-4 pb-0">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="{{ $channel->photo->path }}" class="rounded" alt="" width="100">
                        </div>
                        <div class="col pl-0">
                            <h5 class="font-weight-bold">{{ $channel->title }}</h5>
                            <p class="m-0">{{ $channel->description }}</p>
                            <p class="m-0">{{ $channel->members }} members</p>
                            <a class="m-0 text-primary" href="https://t.me/{{$channel->username}}" target="_blank">@ {{ $channel->username }}</a>
                        </div>
                    </div>
                    <hr class="mb-0">
                </div>
                @endforeach
                @else
                <div class="channel-item p-4 pb-0">
                    <p>no result</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    
</script>
