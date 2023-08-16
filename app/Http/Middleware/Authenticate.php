<?php

namespace App\Http\Middleware;

use App\Traits\response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    use response;

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if(request()->hasHeader('Authorization') || $request->is('api/*')){

            $this->error('Unauthenticated',[],401);
    }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
