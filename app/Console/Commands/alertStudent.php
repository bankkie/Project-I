<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\Student;
use DB;

class alertStudent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:alertStudent';

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
    public function handle()
    {
        $users = Student::get();
     
        foreach ($users as $key => $user) {
        if(Carbon::now()->diffInDays($user->exp_passport) == 30||Carbon::now()->diffInDays($user->exp_passport) == 15){     //->addMinutes(5)->addDay(30)
        $this->sendMail($user);
        }
        if(Carbon::now()->diffInDays($user->exp_visa) == 30||Carbon::now()->diffInDays($user->exp_visa) == 15){     //->addMinutes(5)->addDay(30)
            $this->sendMail($user);
            }
        }
        }   
        private function sendMail($data){
    
        Mail::send(['text'=>'email.message'], ['data' => $data] , function ($m) use ($data)  { 
        $m->from('jbankkie@gmail.com');
        $m->to($data->email,$data->getFullname())->subject('Alert Passport');           //('jbankkie@gmail.com','BANKKiE')->subject('Alert');         
        });
        return true;
    
    }
}
