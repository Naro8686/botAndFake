<?php

namespace App\Console\Commands;

use App\Models\Fake;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Command\Command as CommandAlias;

class CheckExpiryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Expiry';

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
        $expiry = Carbon::now()->subHours(5)->toDateTimeString();
        $fakes = Fake::where('created_at', '<=', $expiry)->orderBy('created_at','desc')->limit(25)->get();

        $bar = $this->output->createProgressBar(count($fakes));
        $bar->start();
        foreach ($fakes as $fake) {
            $this->processing($fake);
            $bar->advance();
        }
        $bar->finish();

        return CommandAlias::SUCCESS;
    }

    private function processing(Fake $fake)
    {
        $img = $fake->img;
        if ($fake->delete()) if (file_exists($img)) unlink($img);
    }
}


