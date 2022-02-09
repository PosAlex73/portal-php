<?php

namespace App\Providers;

use App\Composers\AdminMenuComposer;
use App\Composers\CommonStatusComposer;
use App\Composers\FrontCommonComposer;
use App\Composers\MessageComposer;
use App\Composers\PortfolioComposer;
use App\Composers\SettingsComposer;
use App\Composers\SimpleUserComposer;
use App\Composers\UserComposer;
use App\Composers\UserMenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', SettingsComposer::class);
        View::composer('admin.users.*', UserComposer::class);
        View::composer(['admin.articles.*', 'admin.threads.*', 'admin.skills.*', 'admin.contacts.*', 'admin.links.*', 'admin.users.*'], CommonStatusComposer::class);
        View::composer('admin.threads.*', MessageComposer::class);
        View::composer('front.*', FrontCommonComposer::class);
        View::composer('admin.*', AdminMenuComposer::class);
        View::composer('front.users.*', PortfolioComposer::class);

        View::composer(['admin.threads.edit', 'admin.threads.create', 'admin.portfolios.edit', 'admin.portfolios.create'], SimpleUserComposer::class);
        View::composer(['admin.users.edit', 'admin.users.views.*', 'front.profile.*'], UserMenuComposer::class);
    }
}
