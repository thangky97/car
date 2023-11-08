<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        // $listServices = DB::table('services')->get();
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        if ($name) {
            $car = Car::where('name', 'like', '%' . $name . '%')
                ->paginate(10);
        } elseif ($phone) {
            $car = Car::where('phone', 'like', '%' . $phone . '%')
                ->paginate(10);
        } elseif ($email) {
            $car = Car::where('email', 'like', '%' . $email . '%')
                ->paginate(10);
        } else {
            // $car = Car::select('id', 'name', 'image', 'price', 'title', 'description', 'cate_id', 'status')->orderBy('id', 'desc')
            //     ->paginate(10);
            $car = Car::with('cate_car')->orderBy('id', 'asc')->paginate(10);
        }

        // return view('admin.customer.list', compact('customer', 'listServices'));
        return view('admin.car.index', compact('car'));
    }

    public function create(Request $request)
    {
        $method_route = "route_BackEnd_Car_Create";
        // $services = DB::table('services')->where('status', '=', 1)->get();
        $category_car = DB::table('category_cars')->where('status', '=', 1)->get();

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'status' => 'required',
                'title' => 'required',
                'description' => 'required',
                'cate_id' => 'required',
                'image' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            ], [
                'name.required' => 'Tên bắt buộc nhập!',
                'price.required' => 'Số điện thoại bắt buộc nhập!',
                'price.numeric' => 'Số điện thoại phải là số!',
                'status.required' => 'Bạn chưa chọn trạng thái',
                'title.required' => 'Vui lòng nhập tiêu đề',
                'description.required' => 'Bạn chưa nhập mô tả',
                'cate_id.required' => 'Bạn chưa chọn danh mục',
                'image.image' => 'Bắt buộc phải là ảnh!',
                'image.max' => 'Ảnh không được lớn hơn 2MB!',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            // implode(',', $params['cols']['service_id']);
            // $params['cols']['service_id'] = implode(',', $params['cols']['service_id']);
            // dd(implode(',', $params['cols']['service_id']));
            unset($params['cols']['_token']);
            if ($request->hasFile('images') && $request->file('images')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('images'));
            }

            $modelTes = new Car();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Car_List');
            } else {
                Session::flash('error', 'Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.car.create', compact('category_car'));
    }

    public function edit($id, Request $request)
    {
        $cate_id = DB::table('category_cars')->get();
        $modelCar = new Car();
        $car = $modelCar->loadOne($id);
        $this->v['car'] = $car;
        return view('admin.car.edit', $this->v, compact('cate_id'));
    }

    public function update($id, CarRequest $request)
    {

        $method_route = 'route_BackEnd_Car_Edit';
        $params = [];

        $params['cols'] = $request->post();
        // $params['cols']['service_id'] = implode(',', $params['cols']['service_id']);

        if ($request->hasFile('images') && $request->file('images')->isValid()) {
            $params['cols']['image'] = $this->uploadFile($request->file('images'));
        }

        unset($params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelCar = new Car();
        $res = $modelCar->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route, ['id' => $id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Car_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route, ['id' => $id]);
        }
    }

    public function uploadFile($file)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('car', $fileName, 'public');
    }
}
