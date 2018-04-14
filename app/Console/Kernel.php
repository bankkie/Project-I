<?php
namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
class Kernel extends ConsoleKernel
{
/**
* The Artisan commands provided by your application.
*
* @var array
*/
protected $commands = [
Commands\emailUser::class,
Commands\alertStaff::class,
Commands\alertStudent::class,
];
/**
* Define the application's command schedule.
*
* @param \Illuminate\Console\Scheduling\Schedule $schedule
* @return void
*/
protected function schedule(Schedule $schedule)
{
// $schedule->command('email:user')
// // ->everyFiveMinutes();
// ->everyMinute();
$schedule->command('email:alertStaff')->everyMinute();
$schedule->command('email:alertStudent')->everyMinute();
}
}