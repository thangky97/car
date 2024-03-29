@extends('admin.layout.master')

@section('title', 'Thêm mới khách hàng')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="msg-box">
                            <?php //Hiển thị thông báo thành công
                            ?>
                            @if (Session::has('success'))
                                <div class="alert alert-success solid alert-dismissible fade show">
                                    <span><i class="mdi mdi-check"></i></span>
                                    <strong>{{ Session::get('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Thêm khách hàng</h4>

                                <form class="custom-validation" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="col-md-12 pb-2">
                                            <label class="form-label">Tên danh mục <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name', isset($request['name']) ? $request['name'] : '') }}">
                                            @error('name')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 pb-4">
                                            <label class="form-label">Trạng thái</label>
                                            <select name="status" class="form-select" id="validationCustom04">
                                                <option selected value="1">Hoạt động</option>
                                                <option value="0">Không hoạt động</option>
                                            </select>
                                            @error('status')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>


                                    <input type="text" name="created_at"
                                        value="{{ date('Y-m-d H:i:s', strtotime('now')) }}" hidden>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Thêm mới
                                            </button>
                                            <a href="{{ route('route_BackEnd_Category_Car_List') }}"
                                                class="btn btn-secondary waves-effect">Quay lại</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>

@endsection
