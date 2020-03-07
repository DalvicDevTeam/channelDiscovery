@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <h4 class="font-weight-bold text-primary">Create new channel</h4>
            <form id="add-channel-form">
                <div class="form-group">
                    <label for="username">Channel username</label>
                    <input type="text" class="form-control" id="channel_username" required>
                    <small class="form-text text-muted">only public channels are allowed for registration</small>
                </div>
                <div class="form-group">
                    <label for="username">Channel owner name</label>
                    <input type="text" class="form-control" id="channel_owner_name" required>
                </div>
                <div class="form-group">
                    <label for="username">Channel owner phone</label>
                    <input type="tel" class="form-control" id="channel_owner_phone" required>
                </div>
                <div class="form-group">
                    <label for="username">Channel owner address</label>
                    <input type="text" class="form-control" id="channel_owner_address" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Add">
                </div>
            </form>
        </div>
        
    </div>
@endsection