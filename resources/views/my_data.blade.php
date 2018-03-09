@extends('layouts.app')
@section('content')

@if (Auth::user()->Status == 'Student')
      <table>
  <tr><td>Name</td><td>{{ $members[0]->title }}&nbsp;{{$members[0]->first_name}}&nbsp;{{$members[0]->middle_name}}&nbsp;{{$members[0]->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ $members[0]->email }}</td></tr>
  <tr><td>Country</td><td>{{ $members[0]->country }}</td></tr>
  <tr><td>EXP PASSPOT</td><td>{{ $members[0]->exp_passport }}</td></tr>
  <tr><td>EXP VISA</td><td>{{ $members[0]->exp_visa }}</td></tr>
  <tr><td>Status</td><td>{{ $members[0]->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $members[0]->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $members[0]->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $members[0]->std_id }}</td></tr>
  <tr><td>Birthday</td><td>{{ $members[0]->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $members[0]->study_date }}</td></tr>
  <tr><td>Category</td><td>{{ $members[0]->category }}</td></tr>
  <tr><td>Faculty</td><td>{{ $members[0]->faculty }}</td></tr>
  <tr><td>Section</td><td>{{ $members[0]->section }}</td></tr>
  <tr><td>Activity hour</td><td>{{ $members[0]->activity_hour }}</td></tr>
  <tr><td>Buddy</td><td>{{ $members[0]->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $members[0]->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $members[0]->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $members[0]->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $members[0]->interests }}</td></tr>


@elseif (Auth::user()->Status == 'Staff')
<table>
<tr><td>Name</td><td>{{ $members[0]->title }}&nbsp;{{$members[0]->first_name}}&nbsp;{{$members[0]->middle_name}}&nbsp;{{$members[0]->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ $members[0]->email }}</td></tr>
  <tr><td>Country</td><td>{{ $members[0]->country }}</td></tr>
  <tr><td>EXP PASSPOT</td><td>{{ $members[0]->exp_passport }}</td></tr>
  <tr><td>EXP VISA</td><td>{{ $members[0]->exp_visa }}</td></tr>
  <tr><td>EXP WP</td><td>{{ $members[0]->exp_wp }}</td></tr>
  <tr><td>SS Card</td><td>{{ $members[0]->ss_card }}</td></tr>
  <tr><td>Tax No</td><td>{{ $members[0]->tax_no }}</td></tr>
  <tr><td>Status</td><td>{{ $members[0]->status }}</td></tr>
  <tr><td>Remarks</td><td>{{ $members[0]->remarks }}</td></tr>
  <tr><td>Phone</td><td>{{ $members[0]->phone }}</td></tr>
  <tr><td>Student ID</td><td>{{ $members[0]->ext }}</td></tr>
  <tr><td>Birthday</td><td>{{ $members[0]->birthday }}</td></tr>
  <tr><td>Study Date</td><td>{{ $members[0]->begin_date }}</td></tr>
  <tr><td>Faculty</td><td>{{ $members[0]->faculty }}</td></tr>
  <tr><td>Buddy</td><td>{{ $members[0]->buddy }}</td></tr>
  <tr><td>Facebook</td><td>{{ $members[0]->facebook }}</td></tr>
  <tr><td>Line</td><td>{{ $members[0]->line }}</td></tr>
  <tr><td>Hobby</td><td>{{ $members[0]->hobby }}</td></tr>
  <tr><td>Interests</td><td>{{ $members[0]->interests }}</td></tr>


@elseif (Auth::user()->Status == 'Admin')
<table>
<tr><td>Name</td><td>{{Auth::user()->first_name}}&nbsp;{{Auth::user()->middle_name}}&nbsp;{{Auth::user()->last_name}}</td></tr>
  <tr><td>E-mail</td><td>{{ Auth::user()->email }}</td></tr>
  <tr><td>Country</td><td>{{ Auth::user()->country }}</td></tr>
@else

You have no rights to this section.

@endif



@endsection