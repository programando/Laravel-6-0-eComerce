<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\ShoppingCart;
class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
            *   Creamos este middleware par que todas las rutas
            *   con el que se relacione o que sea importado dentro
            *   de un controlador almacene en el objeto request
            *   El carrito de compras.
            *   Es un manera de tener el carrito dispponible
            *   en los módulos del aplicativo
        */
        $sessionName      = 'shopping_cart_id';
        $shopping_cart_id = Session::get($sessionName);
        $shopping_cart    = ShoppingCart::findOrCreateById ( $shopping_cart_id );
        Session::put( $sessionName,  $shopping_cart->id );

        // Esta es la manera como agregamos un variable al objeto request y queda disponibl en todos los llamados en donde el objeto esté presente
        // Luego registro este middleware en kernel.php y posteriormente lo uso en el controlador o en la ruta

        $request->shopping_cart = $shopping_cart;

        return $next($request);
    }
}
