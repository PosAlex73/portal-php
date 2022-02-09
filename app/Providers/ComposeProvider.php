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
        View::composer(['admin.articles.*', 'admin.thread.*', 'admin.skill.*', 'admin.contacts.*', 'admin.links.*'], CommonStatusComposer::class);
        View::composer('admin.threads.*', MessageComposer::class);
        View::composer('front.*', FrontCommonComposer::class);
        View::composer('admin.*', AdminMenuComposer::class);
        View::composer('front.users.*', PortfolioComposer::class);

        View::composer(['admin.thread.edit', 'admin.threads.create', 'admin.portfolios.edit', 'admin.portfolios.create'], SimpleUserComposer::class);
    }
}
