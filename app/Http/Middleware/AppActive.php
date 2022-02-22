<?php

namespace App\Http\Middleware;

use App\Enums\CommonStatuses;
use App\Enums\Settings\SettingEnums;
use App\Facades\Set;
use Closure;
use Illuminate\Http\Request;

class AppActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $app_status = Set::get(SettingEnums::SITE_ACTIVE);

        if ($app_status === CommonStatuses::ACTIVE) {
            return $next($request);
        }

        return redirect(route('app_close'));
    }
}
