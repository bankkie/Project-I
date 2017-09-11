<form method="POST" action={{url('/create_stf')}}>
    {{ csrf_field() }}
<p>User id</p>
<select name="user_id">
@foreach($users as $user)
<option value="{{$user->id}}" >{{$user->id}}</option>
@endforeach
</select>
<p>Country</p><input name="country" type="text" >
<p>EXP WP</p>
  <input type="date" name="exp_wp">
<p>SS card</p><input name="ss_card" type="text" >
  <p>Text No.</p><input name="tax_no" type="text" >
<p>Begin Date</p>
  <input type="date" name="begin_date">
  <p>EXT</p><input name="ext" type="text" >
  <p>Faculty</p>
  <input type="radio" name="faculty" value="FIS" checked> FIS<br>
  <input type="radio" name="faculty" value="FHT"> FHT<br>
  <input type="radio" name="faculty" value="FTE"> FTE<br>
  <input type="radio" name="faculty" value="CoE"> CoE<br>
  <input type="radio" name="faculty" value="Essand"> Essand<br>
<br><br>
<input type="submit" value="send">
</form>