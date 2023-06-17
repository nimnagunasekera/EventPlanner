<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
        //create an empty array to store the roles
        $roles = [];

        //get all the roles from the UserRole enum
        foreach (\App\Enums\UserRole::cases() as $role) {
            $roles[] = strtolower($role->name);
        }

        //validate the type to see if this exixts as a role in the UserRole enum
        //if not, throw an exception
        if (!in_array(strtolower($type), $roles)) {
            throw new \Exception('Invalid role type');
        }

        // check if the user is authenticated
        // if not, redirect to login page
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // check if the user has the role
        if (strtolower($request->user()->role->name) === $type) {
            // if yes, allow the request
            return $next($request);
        } else {
            // if not, throw an exception 403
            throw new \Exception('Sorry you cannot access this page.', 403);
        }
    }
}
