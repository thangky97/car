@extends('admin.layout.master')

@section('title', 'Sửa ô tô')

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

                                <h4 class="card-title mb-4">Sửa ô tô</h4>

                                <form class="custom-validation"
                                    action="{{ route('route_BackEnd_Car_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tên <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $car->name }}">
                                            @error('name')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Giá <span class="text-danger">*</span></label>
                                            <div>
                                                <input type="text" name="price" type="text" class="form-control"
                                                    value="{{ $car->price }}">
                                                @error('price')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="col-md-3 col-sm-4 control-label">Danh mục<span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <select name="cate_id" id="" class="form-select">
                                                    @foreach ($cate_id as $c)
                                                        <option value="{{ $c->id }}"
                                                            {{ isset($car) && $car->cate_id === $c->id ? 'selected' : '' }}>
                                                            {{ $c->name }}</option>
                                                    @endforeach
                                                    @error('cate_id')
                                                        <div>
                                                            <p class="text-danger">{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                                            <div>
                                                <input type="text" name="title" type="text" class="form-control"
                                                    value="{{ $car->title }}">
                                                @error('title')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pb-2">
                                        <label class="form-label">Mô tả <span class="text-danger">*</span></label>
                                        <input type="text" name="description" class="form-control"
                                        value="{{ $car->description }}">
                                        @error('description')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Ảnh <span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="form-file-input form-control">
                                            @if (isset($car) && $car->image)
                                                <img src="{{ asset($car->image ? '' . Storage::url($car->image) : $car->name) }}"
                                                    alt="{{ $car->name }}" width="100">
                                            @endif
                                            @error('image')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Trạng thái </label>
                                            <select name="status" class="form-select" id="validationCustom04">
                                                <option selected value="">Chọn trạng thái</option>
                                                <option value="1"
                                                    {{ isset($car) && $car->status === 1 ? 'selected' : '' }}>
                                                    Hoạt động</option>
                                                <option value="0"
                                                    {{ isset($car) && $car->status === 0 ? 'selected' : '' }}>
                                                    Không hoạt động</option>
                                            </select>
                                            @error('status')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="text" name="updated_at"
                                        value="{{ date('Y-m-d H:i:s', strtotime('now')) }}" hidden>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Cập nhật
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
