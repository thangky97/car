@extends('admin.layout.master')

@section('title', 'Thêm mới ô tô')

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

                                <h4 class="card-title mb-4">Thêm ô tô</h4>

                                <form class="custom-validation" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tên ô tô <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name', isset($request['name']) ? $request['name'] : '') }}">
                                            @error('name')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Giá <span class="text-danger">*</span></label>
                                            <input type="text" name="price" class="form-control"
                                                value="{{ old('price', isset($request['price']) ? $request['price'] : '') }}">
                                            @error('price')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Ảnh <span class="text-danger">*</span></label>
                                            <div>
                                                <div class="form-file">
                                                    <input type="file" name="images"
                                                        class="form-file-input form-control">
                                                    @if (isset($car) && $car->image)
                                                        <img src="{{ asset($car->image) }}" alt="{{ $car->name }}"
                                                            width="100">
                                                    @endif
                                                    @error('image')
                                                        <div>
                                                            <p class="text-danger">{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title', isset($request['title']) ? $request['title'] : '') }}">
                                            @error('title')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Danh mục <span class="text-danger">*</span></label>
                                            <select name="cate_id" id="cate_id" value="" class="form-select">
                                                <option value="">Danh mục</option>
                                                @foreach ($category_car as $c)
                                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                                @error('cate_id')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </select>
                                        </div>

                                        <div class="col-md-6">
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
                                    </div>

                                    <div class="col-md-12 pb-4">
                                        <label class="form-label">Mô tả <span class="text-danger">*</span></label>
                                        <input type="text" name="description" class="form-control"
                                            value="{{ old('description', isset($request['description']) ? $request['description'] : '') }}">
                                        @error('description')
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
                                            <a href="{{ route('route_BackEnd_Car_List') }}"
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
