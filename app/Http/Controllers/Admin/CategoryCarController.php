<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCarRequest;
use App\Models\CategoryCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryCarController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        if($name){
            $categoryCar = CategoryCar::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $categoryCar = CategoryCar::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } elseif ($email){
            $categoryCar = CategoryCar::where('email','like','%'.$email.'%')
        ->paginate(10);
        } else{
            $categoryCar = CategoryCar::select('id', 'name', 'status')->orderBy('id','desc')
        ->paginate(10);
            // $categoryCar = User::with('service')->orderBy('id', 'desc')->paginate(10);
        }   

        return view('admin.category_car.index', compact('categoryCar'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Category_Car_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:40',
            ], [
                'name.required' => 'Tên danh mục bắt buộc nhập!',
                'name.max' => 'Tên tối đa là 40 ký tự!',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);

            $modelTes = new CategoryCar();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Category_Car_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.category_car.create');
    }

    public function edit($id, Request $request) {
        $modelcategoryCar = new CategoryCar();
        $categoryCar = $modelcategoryCar->loadOne($id);
        $this->v['categoryCar'] = $categoryCar;
        return view('admin.category_car.edit', $this->v);
    }

    public function update($id, CategoryCarRequest $request) {

        $method_route = 'route_BackEnd_Category_Car_Edit';
        $params = [];

        $params['cols'] = $request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelcategoryCar = new CategoryCar();
        $res = $modelcategoryCar->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Category_Car_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
}
