<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CategoryCar;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request) {

        //Danh sách dịch vụ
        $this->v['cars'] = Car::where('status', '=', 1)->paginate(8);

        $this->v['category'] = CategoryCar::where('status', '=', 1)->paginate(5);

        //Danh sách bài viết
        // $this->v['news'] = News::where('status', '=', 1)->paginate(3);

        return view('client.home', $this->v);
    }
}
