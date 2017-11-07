@extends('layouts.app')

@section('content_1')
<font color="#000000"> <center>The graph shows the relationship between number of people and country.<br>
*******************************************************************************************</center></font>

<canvas id="myChart" style="height:20vh; width:30vw"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var i = 0;
var lab = new Array (1);
var d = new Array (1);
@foreach($vars as $var)
lab[i] = "{{$var->country}}";
d[i] = "{{$var->user_count}}";
i++;
@endforeach
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: lab,
        datasets: [{
            label: 'People',
            data: d,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
 </script><font color="#000000"> 
All Statistic(Country)
<table>
  <tr><td>Count(id)</td><td>Country</td></tr>
  @foreach($memcous as $memcou)
  <tr><td>{{$memcou->user_count}}</td><td>{{$memcou->country}}</td></tr>
  @endforeach
</table>
<br>
All Statistic (Status)
<table>
  <tr><td>Count(id)</td><td>Status</td></tr>
  @foreach($memstts as $memstt)
  <tr><td>{{$memstt->user_count}}</td><td>{{$memstt->Status}}</td></tr>
  @endforeach
</table>
<br>
Staff Statistic (Country)
<table>
  <tr><td>Count(id)</td><td>Country</td></tr>
  @foreach($stfcous as $stfcou)
  <tr><td>{{$stfcou->user_count}}</td><td>{{$stfcou->country}}</td></tr>
  @endforeach
</table>
<br>
Staff Statistic (Faculty)
<table>
  <tr><td>Count(id)</td><td>Faculty</td></tr>
  @foreach($stffacs as $stffac)
  <tr><td>{{$stffac->user_count}}</td><td>{{$stffac->faculty}}</td></tr>
  @endforeach
</table>
<br>
Student Statistic (Country)
<table>
  <tr><td>Count(id)</td><td>Country</td></tr>
  @foreach($stdcous as $stdcou)
  <tr><td>{{$stdcou->user_count}}</td><td>{{$stdcou->country}}</td></tr>
  @endforeach
</table>
<br>
Student Statistic (Category)
<table>
  <tr><td>Count(id)</td><td>Category</td></tr>
  @foreach($stdcats as $stdcat)
  <tr><td>{{$stdcat->user_count}}</td><td>{{$stdcat->category}}</td></tr>
  @endforeach
</table>
<br>
Student Statistic (Faculty)
<table>
  <tr><td>Count(id)</td><td>Faculty</td></tr>
  @foreach($stdfacs as $stdfac)
  <tr><td>{{$stdfac->user_count}}</td><td>{{$stdfac->faculty}}</td></tr>
  @endforeach
</table>
<br>
</font>
@endsection

