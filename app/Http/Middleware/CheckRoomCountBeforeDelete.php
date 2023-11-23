<?php

namespace App\Http\Middleware;

use App\Models\Room;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoomCountBeforeDelete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $roomCount = Room::count();

        // Vérifie si le nombre de chambres est inférieur à 3 et que la route n'est pas 'rooms.create'
        if ($roomCount < 3 && 
    !in_array($request->route()->getName(), ['rooms.index','rooms.create', 'rooms.show', 'rooms.edit', 'rooms.update', 'rooms.store'])) {
        abort(403, 'Vous devez avoir au moins 3 chambres pour effectuer cette action.');
}


        return $next($request);
    }
}
