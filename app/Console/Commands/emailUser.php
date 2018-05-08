<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
class emailUser extends Command
{
/**
* The name and signature of the console command.
*
* @var string
*/
protected $signature = 'email:user';
/**
* The console command description.
*
* @var string
*/
protected $description = 'Test';
/**
* Create a new command instance.
*
* @return void
*/
public function __construct()
{
parent::__construct();
}
/**
* Execute the console command.
*
* @return mixed
*/
public function handle()
{

$time = Carbon::create(2018, 5, 2);

if($time >= Carbon::now()){     
$data = array(
'email' => "iacpsu@gmail.com"
);
$this->sendMail($data);
}
}
private function sendMail($data){

Mail::send(['text'=>'email.message'], $data , function ($m)  { //use ($data)
$m->from('iacpsu@gmail.com');
$m->to('jataurong@gmail.com','BANKKiE')->subject('Alert');         
});
return true;
}
}