<form method="POST" action={{url('/create')}}>
    {{ csrf_field() }}
<p>User id</p>
<select name="user_id">
@foreach($users as $user)
<option value="{{$user->id}}" >{{$user->id}}</option>
@endforeach
</select>
<p>title</p>
  <input type="radio" name="title" value="Mr." checked> Mr.<br>
  <input type="radio" name="title" value="Miss"> Miss<br>
  <input type="radio" name="title" value="Ms."> Ms.

<p>EXP passport</p>
  <input type="date" name="exp_pass">

<p>EXP visa</p>
  <input type="date" name="exp_visa">

<p>phone</p><input name="phone" type="text" >
<p>remarks</p><input name="remarks" type="text" >
<p>hobby</p><input name="hobby" type="text" >
<p>Status</p>
  <input type="radio" name="Status" value="Employee" checked> Employee<br>
  <input type="radio" name="Status" value="Volunteer"> Volunteer<br>
  <input type="radio" name="Status" value="Student"> Student<br>
  <input type="radio" name="Status" value="admin"> admin<br>

<p>Country</p><input name="country" type="text" >
<br><br>
<input type="submit" value="send">
 
</form>