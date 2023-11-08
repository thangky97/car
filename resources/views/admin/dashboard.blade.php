@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Dashboard</h6>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Welcome to DAI-ICHI Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
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

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="{{ asset('admin/assets/images/services-icon/01.png') }}" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Liên hệ</h5>
                                    {{-- <h4 class="fw-medium font-size-24">{{ $countContactToday }}</h4> --}}
                                    <div class="mini-stat-label bg-success">
                                        {{-- @php
                                            $previousDayCount = DB::table('contact')
                                                ->whereDate('created_at', Carbon\Carbon::parse(today())->subDay())
                                                ->count();
                                            $percentChange = $previousDayCount !== 0 ? (($countContactToday - $previousDayCount) / $previousDayCount) * 100 : 0;
                                        @endphp
                                        @if ($percentChange > 0)
                                            <p class="mb-0">+{{ number_format($percentChange, 2) }}%</p>
                                        @elseif ($percentChange < 0)
                                            <p class="mb-0">{{ number_format(abs($percentChange), 2) }}%</p>
                                        @else
                                            <p class="mb-0">No change</p>
                                        @endif --}}
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i
                                                class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Thống kê theo ngày</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="{{ asset('admin/assets/images/services-icon/02.png') }}" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Chưa liên hệ</h5>
                                    {{-- <h4 class="fw-medium font-size-24">{{ $totalNoContact }}</h4> --}}
                                    {{-- <div class="mini-stat-label bg-danger">
                                        <p class="mb-0">- 28%</p>
                                    </div> --}}
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i
                                                class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Theo ngày</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="{{ asset('admin/assets/images/services-icon/03.png') }}" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Tổng liên hệ</h5>
                                    {{-- <h4 class="fw-medium font-size-24">{{ $totalContactsMonth }}
                                    </h4> --}}
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i
                                                class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    {{-- @php
                                        $currentMonth = date('m');
                                        $currentYear = date('Y');
                                        $nextMonth = date('m', strtotime('+1 month'));
                                        $nextYear = date('Y', strtotime('+1 month'));
                                    @endphp --}}

                                    <p class="text-white-50 mb-0 mt-1">
                                        {{-- @if ($currentMonth == $currentMonth && $currentYear == $currentYear)
                                            Tháng {{ $currentMonth }}/{{ $currentYear }}
                                        @elseif ($currentMonth != $nextMonth && $currentYear != $currentYear)
                                            {{ $nextMonth }}/{{ $currentYear }}
                                        @endif --}}
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @php
                        $currentMonthCustomers = DB::table('customers')
                            ->whereMonth('created_at', '=', date('m'))
                            ->whereYear('created_at', '=', date('Y'))
                            ->count();
                        
                        $previousMonthCustomers = DB::table('customers')
                            ->whereMonth('created_at', '=', date('m', strtotime('-1 month')))
                            ->whereYear('created_at', '=', date('Y', strtotime('-1 month')))
                            ->count();
                        
                        $percentageChange = 0;
                        
                        if ($previousMonthCustomers != 0) {
                            $percentageChange = (($currentMonthCustomers - $previousMonthCustomers) / $previousMonthCustomers) * 100;
                        }
                    @endphp --}}

                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="{{ asset('admin/assets/images/services-icon/04.png') }}" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Khách hàng</h5>
                                    {{-- <h4 class="fw-medium font-size-24">{{ $currentMonthCustomers }} <i --}}
                                            class="mdi mdi-arrow-up text-success ms-2"></i>
                                    </h4>
                                    <div class="mini-stat-label bg-success">
                                        <p class="mb-0">
                                            {{-- @if ($previousMonthCustomers != 0)
                                                @if ($percentageChange > 0)
                                                    +{{ round($percentageChange, 2) }}%
                                                @elseif ($percentageChange < 0)
                                                    -{{ round($percentageChange, 2) }}%
                                                @else
                                                    0%
                                                @endif
                                            @else
                                                N/A
                                            @endif --}}

                                        </p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i
                                                class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    {{-- @php
                                        $currentMonth = date('m');
                                        $currentYear = date('Y');
                                        $nextMonth = date('m', strtotime('+1 month'));
                                        $nextYear = date('Y', strtotime('+1 month'));
                                    @endphp --}}

                                    <p class="text-white-50 mb-0 mt-1">
                                        {{-- @if ($currentMonth == $currentMonth && $currentYear == $currentYear)
                                            Tháng {{ $currentMonth }}/{{ $currentYear }}
                                        @elseif ($currentMonth != $nextMonth && $currentYear != $currentYear)
                                            {{ $nextMonth }}/{{ $currentYear }}
                                        @endif --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>

@endsection
