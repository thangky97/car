@extends('admin.layout.master')

@section('title', 'Danh sách liên hệ')

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
                                <h4 class="card-title mb-4">Danh sách liên hệ</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên khách hàng</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">SDT</th>
                                                <th scope="col">Ô tô</th>
                                                <th scope="col">Nội dung</th>
                                                <th scope="col" colspan="2">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($contact as $item)
                                                <tr>
                                                    <th class="text-primary" scope="row">{{ 'CO000' . $item->id }}</th>
                                                    <td>
                                                        @if ($item->name)
                                                            <span>{{ $item->name }}</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->email)
                                                            <span>{{ $item->email }}</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->phone)
                                                            <span><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->car)
                                                            <span>{{ $item->car->name }}</span>
                                                        @else
                                                            <span>Không có danh mục</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->content)
                                                            <span>{{ $item->content }}</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Category_Car_Edit', $item->id) }}"
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
                                    {{ $contact->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
