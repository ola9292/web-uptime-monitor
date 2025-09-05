<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\Models\Website;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class CheckWebsiteStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-website-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update website status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $websites = Website::all();

        foreach($websites as $website){
            try{
                $response = Http::get($website->url);
                $website->is_online = $response->successful();
            }catch(\Exception $e){
                $website->is_online = false;
                $user_email = $website->user->email;

                //Mail::to($user_email)->send(new NotifyEmail($website));
            }finally{
                usleep(200000);
                $website->save();
            }

            // usleep(2000000);
        }
        $this->info('Website statuses updated.');
    }
}
