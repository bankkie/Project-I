<form method="POST" action={{url('/create_cip')}}>
    {{ csrf_field() }}
<p>User id</p>
<select name="user_id">
@foreach($users as $user)
<option value="{{$user->id}}" >{{$user->id}}</option>
@endforeach
</select>
<p>Birthday</p><input type="date" name="birthday">
  <p>Begin Date</p>
  <input type="date" name="begin_date">
  <p>EXP WP</p>
  <input type="date" name="exp_wp">
<p>Status</p><input name="status" type="text" >

<br><br>
<input type="submit" value="send">
</form>