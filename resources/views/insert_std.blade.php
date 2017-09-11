<form method="POST" action={{url('/create_std')}}>
    {{ csrf_field() }}
<p>User id</p>
<select name="user_id">
@foreach($users as $user)
<option value="{{$user->id}}" >{{$user->id}}</option>
@endforeach
</select>
<p>Student id</p><input name="std_id" type="text" >
<p>Country</p><input name="country" type="text" >
<p>Birthday</p>
  <input type="date" name="birthday">
<p>Study date</p>
  <input type="date" name="study_date">
  <p>Section</p><input name="section" type="text" >
<p>Activity Hour</p>
  <input type="radio" name="activity_hour" value="complete" checked> complete<br>
  <input type="radio" name="activity_hour" value="incomplete"> incomplete<br>
  <p>Graduate</p>
  <input type="radio" name="graduate" value="0" checked> ungraduate<br>
  <input type="radio" name="graduate" value="1"> graduate<br>
<br><br>
<input type="submit" value="send">
</form>