<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\Staff;
use DB;
class alertStaff extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:alertStaff';   //ซิกเนเจอ ของคอมมาน
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description'; 
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
    public function handle() //เป็นฟังก์ชันการทำงาน
    {
    $users = Staff::get(); //เรียกช้อมูลสตาฟทั้งหมด
 
    foreach ($users as $key => $user) {
    if(Carbon::now()->diffInDays($user->exp_passport) == 30||Carbon::now()->diffInDays($user->exp_passport) == 15) //เป็นการวนเช็คเวลา ปัจจุบัน กับ เวลาวันหมดอายุของพาสปอต //ถ้าเป็น 30-15 เข้าเงื่อนไข
    {     //->addMinutes(5)->addDay(30)
    $this->sendMail($user); //เรียกไปฟังก์ชัน sendmail แร้วส่งข้อมูลใน user ที่เข้าเงื่อนไข
    }
    if(Carbon::now()->diffInDays($user->exp_visa) == 30||Carbon::now()->diffInDays($user->exp_visa) == 15){     //->addMinutes(5)->addDay(30)
        $this->sendMail($user);
        }
    }
    }   
    private function sendMail($data){
    Mail::send(['text'=>'email.message'], ['data' => $data] , function ($m) use ($data)   //แสดงข้อความ
    { 
    $m->from('jbankkie@gmail.com'); //ส่งจาก
    $m->to($data->email,$data->getFullname())->subject('Alert Passport');   //ส่งไปถึงผู้รับ        //('jbankkie@gmail.com','BANKKiE')->subject('Alert');         
    });
    return true;
    }
}