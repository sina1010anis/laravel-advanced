<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test {old : test name} {new : test new name} {--l}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Command';

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
     * @return int
     */
    public function handle()
    {
        $arr = 'sina';
        $option = $this->option('l');
        $old = $this->argument('old');
        $new = $this->argument('new');
        if ($arr == $old) {
            $arr = $new;
            $this->info('Ok Edit name');
        }else {
            $this->error('Not Name');
        }
        if ($option){
            $this->info($arr);
        }
    }
}
