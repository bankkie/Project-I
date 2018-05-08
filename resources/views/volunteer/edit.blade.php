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
                <form action="{{ route('volunteer.updatevol', $users->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >StudentID</label>
                        <div class="col-sm-10">
                            <input type="text" name="std_id" id="std_id" class="form-control" value="{{ $users->std_id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >name</label>
                        <div class="col-sm-10">
                            <textarea name="name" id="name" class="form-control">{{ $users->name }}</textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" >nickname</label>
                        <div class="col-sm-10">
                            <textarea name="nickname" id="nickname" class="form-control">{{ $users->nickname }}</textarea>
                        </div>
                    </div>

                    

                     <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                            <textarea name="email" id="email" class="form-control">{{ $users->email}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Facebook</label>
                        <div class="col-sm-10">
                            <textarea name="facebook" id="email" class="form-control">{{ $users->facebook}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" >Phone</label>
                        <div class="col-sm-10">
                            <textarea name="phone" id="email" class="form-control">{{ $users->phone}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Reason</label>
                        <div class="col-sm-10">
                            <textarea name="reason" id="email" class="form-control">{{ $users->reason}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Remarks</label>
                        <div class="col-sm-10">
                            <textarea name="remarks" id="email" class="form-control">{{ $users->remarks}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Comment</label>
                        <div class="col-sm-10">
                            <textarea name="comment" id="email" class="form-control">{{ $users->comment}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >history</label>
                        <div class="col-sm-10">
                            <textarea name="history" id="email" class="form-control">{{ $users->history}}</textarea>
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="control-label col-sm-2" >level</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="level" value="Excellent" /> Excellent
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="level" value="Good" /> Good
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="level" value="Fair" /> Fair
                            </div>
                        </div>
                        </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Complete</label>
                        <div class="col-sm-10">
                        <div class="radio">
                                <label>
                                    <input type="radio" name="complete" value="true" /> true
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="complete" value="false" /> false
                                </label>
                            </div>
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


