
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>





</head>

<body id="admin-page">

<div id="wrapper">
    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif
    @if(Session::has('update_category'))
        <p class="bg-danger">{{session('update_category')}}</p>
    @endif

    <h1>Categories</h1>
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','action'=>'CategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name',"Name") !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created At</th>

            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit',$category->id)}}"> {{$category->name}}</a></td>
                        <td>{{$category->created_at?$category->created_at->diffForHumans():'not available'}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


</div>


</body>

</html>

@section('content')
    <h1>Edit Categories</h1>
    <div class="col-sm-6">

        {!! Form::model($category,['method'=>'PUT','action'=>['CategoriesController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name',"Name") !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-3" style="padding-left: 32px">
            {!! Form::model($category,['method'=>'DELETE','action'=>['CategoriesController@destroy',$category->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

