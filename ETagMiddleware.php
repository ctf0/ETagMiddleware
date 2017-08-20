<?php

namespace App\Http\Middleware;

use Closure;

class ETagMiddleware
{
    /**
     * Implement Etag support.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->isMethodCacheable()) {
            $etag = md5($response->getContent());
            $response->setEtag($etag);
            $response->setPublic();
            $response->isNotModified($request);
        }

        return $response;
    }
}
