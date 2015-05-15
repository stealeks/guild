<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $orders = $this->getOrders();

        return $this->render('home.index', [
            'orders' => $orders,
        ]);
    }

    private function getOrders()
    {
        $orders = [];

        $curr = ['EUR', 'GBP', 'USD'];

        $count = rand(10, 20);
        for ($i = 1; $i < $count; $i++) {
            $orders[] = (object)[
                'id' => $i,
                'title' => 'Lorem ipsum dolor sit amet, consectetur',
                'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a augue malesuada, sagittis quam sed, tempus sem. Etiam sit amet nisi sed eros euismod vestibulum. Integer eget egestas felis. Fusce eu tempus augue. Nam congue leo eu nulla tristique, et pellentesque nisi pellentesque. Nunc sodales nisl vitae tortor sollicitudin faucibus. Quisque non nulla malesuada, facilisis dolor sed, interdum est.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a augue malesuada, sagittis quam sed, tempus sem. Etiam sit amet nisi sed eros euismod vestibulum. Integer eget egestas felis. Fusce eu tempus augue. Nam congue leo eu nulla tristique, et pellentesque nisi pellentesque. Nunc sodales nisl vitae tortor sollicitudin faucibus. Quisque non nulla malesuada, facilisis dolor sed, interdum est. Proin pulvinar neque at interdum pretium. Nam vehicula ligula sed urna egestas, in lobortis elit semper. Suspendisse lorem diam, sollicitudin eu justo vel, rutrum interdum massa. Proin odio leo, varius a imperdiet id, dictum at eros. Suspendisse ut risus at ipsum tempus fermentum. Cras nisi arcu, viverra ut accumsan non, tempor sed urna.',
                'price' => rand(1, 15)*100 ,
                'currency' => $curr[array_rand($curr)],
            ];
        }

        return $orders;
    }
}