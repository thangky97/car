<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CategoryCar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    //home
    public function home(Request $request) {
        // $cars = new Car();
        // $this->v['extParams'] = $request->all();
        // $this->v['cars'] = $cars->loadList($this->v['extParams']);
        // return view('client.layout.home', $this->v);

        $name = $request->get('name');
        $category = CategoryCar::select('id', 'name', 'price')->where('id', '>', 4)->get(); 
        if($name){
            return view('client.layout.home', 
                [    
                    'name' => $name,  
                ]); 
        }else{ 
            $cars = Car::select('id', 'name', 'image', 'status')
            //->where('status', '=', 1)
            
            ->paginate(4); 
            return view('client.layout.home', 
                [   'category' => $category,
                    'name' => $name,
                    'cars' => $cars 
                ]);
        } 

        // $name = $request->get('name');
        // if ($name) {
        //     $cars = Car::where('name', 'like', '%' . $name . '%')
        //         ->paginate(5);
        // } else {
        //     $cars = Car::select('id', 'name', 'image', 'status')
        //         ->with('category')
        //         ->paginate(5);
        // }
        // return view('client.layout.home', 
        // [
        //     'cars' => $cars,
        //     'name' => $name
        // ]);
    }

    // public function list(Request $request) {
    //     $shop = new Bds();
    //     $this->v['extParams'] = $request->all();
    //     $this->v['list'] = $shop->loadList($this->v['extParams']);
    //     return view('client.layouts.list', $this->v);
    // }

    // public function detail($id, Request $request) {
    //     $detail = new Bds();
    //     $objItem = $detail->loadOne($id);
    //     $this->v['objItem'] = $objItem;
    //     return view('client.layouts.detail', $this->v);
    // }

    // public function new(Request $request) {
    //     $new = new News();
    //     $this->v['extParams'] = $request->all();
    //     $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
    //     return view('client.layouts.home', $this->v);
    // }

    // public function contact(Request $request) {
    //     // $shop = new Bds();
    //     // $this->v['extParams'] = $request->all();
    //     // $this->v['shop'] = $shop->loadListWithPager($this->v['extParams']);
    //     return view('client.layouts.contact', $this->v);
    // }

    // public function new(Request $request) {
    //     $new = new News();
    //     $this->v['extParams'] = $request->all();
    //     $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
    //     return view('client.layouts.new', $this->v);
    // }

    // public function detail_new($id, Request $request) {
    //     $detail = new News();
    //     $objItem = $detail->loadOne($id);
    //     $this->v['objItem'] = $objItem;
    //     return view('client.layouts.detailNew', $this->v);
    // }
}
