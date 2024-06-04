<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckMentorAccess
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $mentorId = $request->route('id'); // Mengambil mentor ID dari route parameter

        if ($user && $user->role === 'Mentor' && $user->id != $mentorId) {
            // Jika user yang login adalah mentor dan mencoba mengakses data mentor lain
            return redirect()->route('course.view', ['id' => $user->id]);
        }

        return $next($request);
    }
}
