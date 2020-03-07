@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h4 class="font-weight-bold mb-4">Filter</h4>
            <div class="members-count border rounded p-2">
                <strong class="">Members Count</strong><br>
                <div class="pl-3">
                    <div class="">
                        <p class="mb-0">Min(<span id="min_members_span">0</span>)</p>
                        <input type="range" min="1" max="100000" class="slider form-control-range" value="1" name="min_members" id="minrange">
                    </div>
                    <div class="">
                        <p class="mb-0">Max(<span id="max_members_span">5000</span>)</p>
                        <input type="range" min="5000" max="1000000" value="5000" class="slider form-control-range" name="max_members" id="maxrange">
                    </div>
                </div>
            </div>
            <div class="categories mt-4 border rounded p-2">
                <strong class="">Categories</strong>
                <div class="pl-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cat1" name="vehicle1" value="Bike">
                        <label for="cat1"> category1</label><br>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cat2" name="vehicle1" value="Bike">
                        <label for="cat2"> category2</label><br>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cat3" name="vehicle1" value="Bike">
                        <label for="cat3"> category3</label><br>
                    </div>
                </div>
                
            </div>
            
            
        </div>
        <div class="col-md-9">
            <h4 class="font-weight-bold mb-4">Channels</h4>
            <div class="channels card">
                <div class="channel-item p-4 pb-0">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="{{ asset('imgs/channelpp/channel.jpg') }}" class="rounded" alt="" width="100">
                        </div>
                        <div class="col pl-0">
                            <h5 class="font-weight-bold">Tikvah Ethiopia</h5>
                            <p class="m-0">Addis Ababa, Ethiopia @tsegabwolde, 0919743630</p>
                            <p class="m-0">557952 members</p>
                            <p class="m-0 text-primary">@tikvaheth</p>
                        </div>
                    </div>
                    <hr class="mb-0">
                </div>
                <div class="channel-item p-4 pb-0">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="{{ asset('imgs/channelpp/channel.jpg') }}" class="rounded" alt="" width="100">
                        </div>
                        <div class="col pl-0">
                            <h5 class="font-weight-bold">Tikvah Ethiopia</h5>
                            <p class="m-0">Addis Ababa, Ethiopia @tsegabwolde, 0919743630</p>
                            <p class="m-0">557952 members</p>
                            <p class="m-0 text-primary">@tikvaheth</p>
                        </div>
                    </div>
                    <hr class="mb-0">
                </div>
                <div class="channel-item p-4 pb-0">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="{{ asset('imgs/channelpp/channel.jpg') }}" class="rounded" alt="" width="100">
                        </div>
                        <div class="col pl-0">
                            <h5 class="font-weight-bold">Tikvah Ethiopia</h5>
                            <p class="m-0">Addis Ababa, Ethiopia @tsegabwolde, 0919743630</p>
                            <p class="m-0">557952 members</p>
                            <p class="m-0 text-primary">@tikvaheth</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
