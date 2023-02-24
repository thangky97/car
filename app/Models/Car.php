<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'id', 
        'name', 
        'image', 
        'description', 
        'title',
        'deleted_at',
        'cate_id',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryCar::class, 'cate_id', 'id');
    }

    //client car
    // public function loadList($param = [])
    // {
        
    //     $query = DB::table($this->table)->select($this->fillable);
    //     //->join('type_bds', 'type_bds.id', '=', 'bds.type_bds_id');

    //     $home = $query->get();

    //     return $home;
    // }

    //load ra chi tiết người dùng
    // public function loadOne($id, $params = [])
    // {
    //     $query = DB::table($this->table)->where('id', '=', $id);
    //     $obj = $query->first();
    //     return $obj;
    // }

    //admin
    // public function loadListWithPager($param = [])
    // {
    //     $query = DB::table($this->table)->select($this->fillable);
    //             //->join('type_bds', 'type_bds.id', '=', 'bds.type_bds_id');
    //             //->where('name', 'like', '%' . $name . '%');

    //     $cars = $query->paginate(5);

    //     return $cars;
    // }

    //Thêm mới
    // public function saveNew($params)
    // {
    //     $data = array_merge(
    //         $params['cols']
    //     );

    //     $res = DB::table($this->table)->insertGetId($data);
    //     return $res;
    // }
    //Sửa
    // public function saveUpdate($params)
    // {
    //     if (empty($params['cols']['id'])) {
    //         Session::push('errors', 'không xác định bản ghi cập nhập');
    //     }

    //     $dataUpdate = [];
    //     foreach ($params['cols'] as $colName => $val) {
    //         if ($colName == 'id') continue;
    //         $dataUpdate[$colName] = (strlen($val) == 0) ? null : $val;
    //     }
    //     $res = DB::table($this->table)
    //         ->where('id', $params['cols']['id'])
    //         ->update($dataUpdate);
    //     return $res;
    // }
}
