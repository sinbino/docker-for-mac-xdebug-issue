<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCode extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'test';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'execute test code';

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
    $time = microtime(true);
    $users = \App\User::all();
    $time = microtime(true) - $time;
    $this->info($users->count() . ' object readed.');
    $this->info('time=' . $time);
    $this->info('profile_1=' . $GLOBALS['profile_1']);
  }
}
