<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
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
            $customer = Customer::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $customer = Customer::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } elseif ($email){
            $customer = Customer::where('email','like','%'.$email.'%')
        ->paginate(10);
        } else{
            $customer = Customer::select('id', 'name', 'phone', 'address',  'email',  'status')->orderBy('id','desc')
        ->paginate(10);
            // $customer = Customer::with('service')->orderBy('id', 'desc')->paginate(10);
        }   

        return view('admin.customer.index', compact('customer'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Customers_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:40',
                'phone' => 'required|numeric|min:10',
                'address' => 'required',
                'email' => 'required',
            ], [
                'name.required' => 'Tên khách hàng bắt buộc nhập!',
                'name.max' => 'Tên tối đa là 40 ký tự!',
                'phone.required' => 'Số điện thoại bắt buộc nhập!',
                'phone.numeric' => 'Số điện thoại phải là số!',
                'phone.min' => 'Số điện thoại tối thiểu 10 số!',
                'email.required' => 'Email bắt buộc nhập!',
                'email.unique' => 'Email đã tồn tại!',
                'email.email' => 'Email không đúng định dạng!',
                'email.max' => 'Email tối đa 50 ký tự!',
                'status.required' => 'Bạn chưa chọn trạng thái',
                'address.required' => 'Bạn chưa nhập địa chỉ',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);

            $modelTes = new Customer();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Customers_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.customer.create');
    }

    public function edit($id, Request $request) {
        $modelCustomer = new Customer();
        $customer = $modelCustomer->loadOne($id);
        $this->v['customer'] = $customer;
        return view('admin.customer.edit', $this->v);
    }

    public function update($id, CustomerRequest $request) {

        $method_route = 'route_BackEnd_Customers_Edit';
        $params = [];

        $params['cols'] = $request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelCustomer = new Customer();
        $res = $modelCustomer->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Customers_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
}
