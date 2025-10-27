<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Subscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $websitesCount = $user->websites()->count();

        if (! $user) {
            return redirect()->route('login');
        }

        $planLimits = [
            'free' => 3,
            'company' => 5,
            'enterprise' => PHP_INT_MAX,
        ];

        if (auth()->user()->subscribedToProduct('prod_TGa42zsUEijf3p')) {
            $limit = $planLimits['company'];
        } elseif (auth()->user()->subscribedToProduct('prod_TGa6prGUN4PrDp')) {
            $limit = $planLimits['enterprise'];
        } else {
            $limit = $planLimits['free'];
        }
        if ($websitesCount >= $limit) {
            return redirect()->route('billing.plan')->with('message', 'You have reached your limit, please upgrade!');
        }

        return $next($request);
    }
}
