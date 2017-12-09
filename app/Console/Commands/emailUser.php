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

//if(Carbon::now()->addMinutes(5) >= $user->time){
$data = array(
'email' => "bank_boy55@hotmail.com"
);
$this->sendMail($data);
//}
}
private function sendMail($data){

Mail::send('email.message', $data , function ($m) use ($data) {
$m->from('jbankkie@gmail.com');
$m->to($data['email'])->subject('Alert');
});
return true;
}
}