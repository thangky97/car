@extends('admin.layout.master')

@section('title', 'Danh sách ô tô')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
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
                            <?php //Hiển thị thông báo lỗi
                            ?>
                            @if (Session::has('error'))
                                <div class="alert alert-danger solid alert-end-icon alert-dismissible fade show">
                                    <span><i class="mdi mdi-help"></i></span>
                                    <strong>{{ Session::get('errors') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Danh sách ô tô</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Danh mục</th>
                                                <th scope="col">Mô tả</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col" colspan="2">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($car as $item)
                                                <tr>
                                                    <th class="text-primary" scope="row">{{ 'CAR000' . $item->id }}</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset($item->image) ? '' . Storage::url($item->image) : $item->name }}"
                                                                alt="avatar" class="avatar-xs rounded-circle me-2">
                                                            {{ $item->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($item->price)
                                                            <span>{{ number_format($item->price) }} VND</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->cate_car)
                                                            <span>{{ $item->cate_car->name }}</span>
                                                        @else
                                                            <span>Không có danh mục</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->description)
                                                            @php
                                                                $limitedMessage = Str::limit($item->description, 20, '...');
                                                            @endphp
                                                            <span>{!! $limitedMessage !!}</span>
                                                        @else
                                                            <span>Không có mô tả</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item && $item->status === 1)
                                                            <span class="badge bg-success">Hoạt động</span>
                                                        @else
                                                            <span class="badge bg-danger">Không hoạt động</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Car_Edit', $item->id) }}"
                                                                class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan="12" style="color: red !important">Không có bản ghi</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    {{ $car->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
