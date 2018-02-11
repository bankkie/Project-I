@extends('layouts.app')

@section('content')
<link rel="style" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($members))<br>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>members List </h2>
                    <div class="h_search">

            <form action="search_mem" method="POST">
              <tr>
                  <td><input type="text" name="search_mem"></td>
                  {{{ csrf_field() }}}
                  <td><input type="submit" name="Submit" value="search"></td>
              </tr>
             
            </form>
        </div>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('/InsertMember')}}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="10%">id</th>
                        <th width="10%">Title</th>
                        <th width="15%">first_name</th>
                        <th width="20%">middle</th>
                        <th width="15%">last</th>
                        <th width="15%">status</th>
                        <th width="20%">Action</th>
                          
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td class="table-text">
                                <div>{{$member->user_id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$member->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$member->first_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$member->middle_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$member->last_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$member->Status}}</div>
                            </td>

                       
                            <td>
                                <a href="{{ route('member.details', $member->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('member.edit', $member->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('member.delete', $member->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>                
                    </table>

            </div>
            

        </div>

    @endif
    
    </div>
</div>

@endsection