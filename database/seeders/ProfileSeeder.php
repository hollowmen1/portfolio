<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profileData = [
            'jobs' => json_encode(['Software Engineer', 'Web Developer']),
            'description' => 'Experienced developer with a passion for web technologies.',
            'image' => 'profile_images/default.jpg', // Replace with the path to your default image
        ];
        Profile::create($profileData);
    }
}
