@extends('layouts.data.app')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit volunteer <a href="{{ route('volunteer.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('volunteer.update', $volunteer->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >StudentID</label>
                        <div class="col-sm-10">
                            <input type="text" name="std_id" id="std_id" class="form-control" value="{{ $volunteer->std_id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >name</label>
                        <div class="col-sm-10">
                            <textarea name="name" id="name" class="form-control">{{ $volunteer->name }}</textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" >nickname</label>
                        <div class="col-sm-10">
                            <textarea name="nickname" id="nickname" class="form-control">{{ $volunteer->nickname }}</textarea>
                        </div>
                    </div>

                    

                     <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                            <textarea name="email" id="email" class="form-control">{{ $volunteer->email}}</textarea>
                        </div>
                    </div>


                     



                    


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


