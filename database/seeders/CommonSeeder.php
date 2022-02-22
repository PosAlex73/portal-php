<?php

namespace Database\Seeders;

use App\Enums\CommonStatuses;
use App\Enums\UserTypes;
use App\Models\Article;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Thread;
use App\Models\ThreadMessage;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserLinks;
use App\Models\UserProfile;
use App\Models\UserSetting;
use Database\Seeders\Settings\SettingsInitial;
use Database\Seeders\Settings\UserSettingInitial;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@admin.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'type' => UserTypes::ADMIN,
            'status' => CommonStatuses::ACTIVE
        ]);

        Event::dispatch(new Registered($user));

        $user = User::create([
            'name' => 'User User',
            'email' => 'user@user.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'type' => UserTypes::SIMPLE,
            'status' => CommonStatuses::ACTIVE
        ]);

        Event::dispatch(new Registered($user));

        Article::factory()->count(50)->create();

        $users = User::factory()->count(150)->create();

        $threads = new Collection();
        foreach ($users as $user) {
            $threads->add(Thread::factory()->count(1)->for($user)->create());
            UserLinks::factory()->count(5)->for($user)->create();
            UserContact::factory()->count(3)->for($user)->create();
            Skill::factory()->count(5)->hasAttached($user)->create();
            Portfolio::factory()->count(5)->for($user)->create();
            UserProfile::factory()->count(1)->for($user)->create();
            UserSetting::factory()->count(1)->for($user)->create();
        }

        $threads = Thread::all();
        foreach ($threads as $thread) {
            ThreadMessage::factory()->count(3)->for($thread, 'thread')->create();
        }

        Category::factory()->count(30)->create();
        DB::table('settings')->insert(SettingsInitial::getSettings());
    }
}
