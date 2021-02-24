<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {
        $data_hale = [
            [
                'name' => 'SEHAT HARIAN',
                'price'  => 39000,
                'source' => '/img/program-seharian.jpg'
            ],
            [
                'name' => 'PROGRAM MINGGUAN',
                'price'  => 220000,
                'source' => '/img/program-mingguan.jpg'
            ],
            [
                'name' => 'PROGRAM BULANAN',
                'price'  => 864000,
                'source' => '/img/program-sebulan.jpg'
            ],
       ];

       return response()->json([
            'code'   => 200,
            'status' => true,
            'data'   => $data_hale
       ]);
    }

    public function menus()
    {
        $menus = [
            ['name' => 'Ayam Woku', 'source' => '/assets/menu/ayam-woku.jpg', 'price' => '37.000' ],
            ['name' => 'Tan Dori', 'source' => '/assets/menu/tan-dori.jpg', 'price' => '37.000' ],
            ['name' => 'Ikan Marinara', 'source' => '/assets/menu/ikan-marinara.jpg', 'price' => '37.000' ],
            ['name' => 'Hale Kimbap', 'source' => '/assets/menu/hale-kimbap.jpg', 'price' => '37.000' ],
            ['name' => 'Blackpaper Chicken Fillet', 'source' => '/assets/menu/blackpaper_chicken_fillet.jpg', 'price' => '37.000' ],  
            ['name' => 'Hale Spaghetti Curry', 'source' => '/assets/menu/hale_spaghetti_curry.jpg', 'price' => '37.000' ]
        ];
        return response()->json([
            'code'  => 200,
            'status' => true,
            'menus'  => $menus
        ]);
    }
    
    public function menu()
    {
       $menu_hale = [
            [
                'name' => 'Tan Dori',
                'price'  => 37000,
                'photo' => '/img/tan-dori.jpg'
            ],
            [
                'name' => 'Ayam Woku',
                'price'  => 37000,
                'photo' => '/img/ayam-woku.jpg'
            ],
            [
                'name' => 'Ikan Marinara',
                'price'  => 37000,
                'photo' => '/img/ikan-marinara.jpg'
            ],
            [
                'name' => 'Hale Kimbap',
                'price'  => 37000,
                'photo' => '/img/hale-kimbap.jpg'
            ],
       ];
       return response()->json([
        'code'   => 200,
        'status' => true,
        'menus'   => $menu_hale
        ]);
    }

    public function chooseMenu(Request $request)
    {
        $menus = $this->selectMenu($request->name);
        return response()->json([
            'code'   => 200,
            'status' => true,
            'menus'  => $menus
        ]);
    }

    private function selectMenu($menu_val) {
        switch($menu_val) {
            case 'AYAM':
                $menus = [
                    ['name' => 'Ayam Woku', 'source' => '/assets/menu/ayam-woku.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Hale Spaghetti Chicken Curry', 'source' => '/assets/menu/hale_spaghetti_curry.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Tunny Spaghetti', 'source' => '/assets/menu/tunny_spaghetti.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Hale Grilled Chicken', 'source' => '/assets/menu/hale_grilled_chicken.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Grilled Chicken Macaroni', 'source' => '/assets/menu/grilled_chicken_macaroni.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Classic Potato Salad', 'source' => '/assets/menu/classic_potato_salad.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                ];
            break;
            case 'IKAN':
                $menus = [
                    ['name' => 'Ikan Marinara', 'source' => '/assets/menu/ikan-marinara.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Hale Kimbap', 'source' => '/assets/menu/hale-kimbap.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Tan Dori', 'source' => '/assets/menu/tan-dori.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Red Rice Dory Sambal Mata', 'source' => '/assets/menu/red_rice_dory_sambal_mata.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                ];
            break;
            case 'ROTI':
                $menus = [
                    ['name' => 'Sausage Cheesy Sandwich', 'source' => '/assets/menu/sausage_cheesy_sandwich.jpg', 'price' => '37.000', 'category' => 'ROTI' ],
                    ['name' => 'French Chicken Toast', 'source' => '/assets/menu/french_chicken_toast.jpg', 'price' => '37.000', 'category' => 'ROTI' ],
                    ['name' => 'Wrapped Salad with Mushroom Sauce', 'source' => '/assets/menu/wrapped_salad_with_mushroom_sauce.jpg', 'price' => '37.000', 'category' => 'ROTI']
                ];
            break;
            case 'SNACK':
                $menus = [];
            break;
            case 'MINUMAN':
                $menus = [];
            break;
            default:
                $menus = [
                    ['name' => 'Ayam Woku', 'source' => '/assets/menu/ayam-woku.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Hale Spaghetti Chicken Curry', 'source' => '/assets/menu/hale_spaghetti_curry.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Tunny Spaghetti', 'source' => '/assets/menu/tunny_spaghetti.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Hale Grilled Chicken', 'source' => '/assets/menu/hale_grilled_chicken.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Grilled Chicken Macaroni', 'source' => '/assets/menu/grilled_chicken_macaroni.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Classic Potato Salad', 'source' => '/assets/menu/classic_potato_salad.jpg', 'price' => '37.000', 'category' => 'AYAM' ],
                    ['name' => 'Ikan Marinara', 'source' => '/assets/menu/ikan-marinara.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Hale Kimbap', 'source' => '/assets/menu/hale-kimbap.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Tan Dori', 'source' => '/assets/menu/tan-dori.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Red Rice Dory Sambal Mata', 'source' => '/assets/menu/red_rice_dory_sambal_mata.jpg', 'price' => '37.000', 'category' => 'IKAN' ],
                    ['name' => 'Sausage Cheesy Sandwich', 'source' => '/assets/menu/sausage_cheesy_sandwich.jpg', 'price' => '37.000', 'category' => 'ROTI' ],
                    ['name' => 'French Chicken Toast', 'source' => '/assets/menu/french_chicken_toast.jpg', 'price' => '37.000', 'category' => 'ROTI' ],
                    ['name' => 'Wrapped Salad with Mushroom Sauce', 'source' => '/assets/menu/wrapped_salad_with_mushroom_sauce.jpg', 'price' => '37.000', 'category' => 'ROTI']
                ];
        }

        return $menus;
    }
}
