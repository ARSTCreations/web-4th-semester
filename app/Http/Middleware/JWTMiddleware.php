<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware
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
        if (isset($_COOKIE['token'])) {
            try{
                $user = JWTAuth::parseToken()->authenticate();
            }catch(TokenExpiredException $e){
                // return response()->json(['error' => 'Token Expired'], 401);
                return redirect('/login?error=token_expired');
            }catch(TokenInvalidException $e){
                // return response()->json(['error' => 'Token Invalid'], 401);
                return redirect('/login?error=token_invalid');
            }catch(TokenBlacklistedException $e){
                // return response()->json(['error' => 'Token Blacklisted'], 401);
                return redirect('/login?error=token_blacklisted');
            }catch(\Exception $e){
                // return response()->json(['error' => 'Error On Processing Authorization'], 303);
                return redirect('/login?error=unkown_error');
            }
            return $next($request);
        } else {
            // return response()->json(['error' => 'Token Starvation'], 401);
            return redirect('/login?error=token_starvation');
        }
    }
}
