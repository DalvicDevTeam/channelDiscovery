
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
</div>


</body>

</html>




