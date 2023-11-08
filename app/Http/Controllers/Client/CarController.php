<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Contact;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {

        //No delete
        // $this->v['news'] = News::where('status', '=', 1)->paginate(4);

        //Danh sách dịch vụ
        $this->v['listCar'] = Car::where('status', '=', 1)->get();

        return view('client.pages.products.shop', $this->v);
    }

    public function detail($id, Request $request)
    {
        //ds service
        $this->v['listCar'] = Car::where('status', '=', 1)->get();
        //lấy detail service
        $this->v['car'] = Car::find($id);

        $this->v['id_car'] = $id;

        return view('client.pages.products.detail', $this->v);
    }

    public function create(Request $request)
    {
        // $rules = [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'content' => 'required',
        // ];

        // $messages = [
        //     'name.required' => 'Không được bỏ trống tên!',
        //     'phone.required' => 'Không được bỏ trống số điện thoại!',
        //     'email.required' => 'Không được bỏ trống email!',
        //     'content.required' => 'Không được bỏ trống nội dung!',
        // ];
        // $validatedData = $request->validate($rules, $messages);

        $idCar =  $request->car_id;

        $data = new Contact(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'content' => $request->content,
                'email' => $request->email,
                'car_id' => $idCar

            ]
        );
        $data->save();

        return redirect()->route('route_FrontEnd_Car_Detail', $idCar)
            ->with('success', 'Gửi thành công! Chúng tôi sẽ phản hồi sớm nhất');
    }
}
