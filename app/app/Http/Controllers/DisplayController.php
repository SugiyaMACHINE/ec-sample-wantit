<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Company;
use App\Favorite;
use App\Item;
use App\Like;
use App\Order_detail;
use App\Order;
use App\Review;
use App\Sender;
use App\Type;
use App\User;


class DisplayController extends Controller
{
    public function index()
    {
        echo 'ようこそ';
        /*        $item = new Item;
        $items = $item->all();
    $item_with_type = $item->with('type')->first()->toArray();

        var_dump($item_with_type);
    */
        return view('home');
        /*        , [
            'items' => $items
       ]);
 */
    }
    public function search()
    {
        echo 'ようこそ';
    }
    public function item_info()
    {
        echo 'ようこそ';
    }
    public function review()
    {
        echo 'ようこそ';
    }
    public function login()
    {
        echo 'ようこそ';
    }
    public function cart()
    {
        echo 'ようこそ';
    }
    public function register_complete()
    {
        echo 'ようこそ';
    }
    public function pwd_reset()
    {
        echo 'ようこそ';
    }
    public function pwd_send()
    {
        echo 'ようこそ';
    }

    public function order_comp()
    {
        echo 'ようこそ';
    }
    public function user_info()
    {
        echo 'ようこそ';
    }
    public function buying_history()
    {
        echo 'ようこそ';
    }

    public function admin_menu()
    {
        echo 'ようこそ';
    }
}
