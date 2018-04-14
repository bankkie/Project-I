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
// $time = Carbon::create(2018, 4, 3, 22, 56, 0,'Asia/Bangkok');
$time = Carbon::create(2018, 4, 4);
// $time = Carbon::now();
if(Carbon::now() >= $time){     //->addMinutes(5)->addDay(30)
$data = array(
'email' => "jbankkie@gmail.com"
);
$this->sendMail($data);
}
}
private function sendMail($data){
// $time = Carbon::now();
Mail::send(['text'=>'email.message'], $data , function ($m)  { //use ($data)
$m->from('jbankkie@gmail.com');
$m->to('jbankkie@gmail.com','BANKKiE')->subject('Alert');         //($data['email'])->subject('Alert');
});
return true;
}
}