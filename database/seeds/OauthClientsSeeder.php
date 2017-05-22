<?php

use Illuminate\Database\Seeder;

class OauthClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            [
                'name' => 'Laravel Personal Access Client',
                'secret' => env('PERSONAL_ACCESS_CLIENT','gjHVKz2MyEp9h26sBxeDt9URsLlEqy526bKBt7KH'),
                'redirect' => env('REDIRECT_PERSONAL_ACCESS_CLIENT','http://localhost'),
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0
            ],
            [
                'name' => 'Laravel Password Grant Client',
                'secret' => env('GRANT_ACCESS_CLIENT','gjHVKz2MyEp9h26sBxeDt9URsLlEqy526bKBt7KH'),
                'redirect' => env('REDIRECT_GRANT_ACCESS_CLIENT','http://localhost'),
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0
            ]
        ]);

        DB::table('oauth_personal_access_clients')->insert([
            [
                'id' => 1,
                'client_id' => 1
            ]
        ]);
    }
}
