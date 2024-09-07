@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>کد های تخفیف
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>کد های تخفیف</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('offers.create')}}" class="btn btn-secondary">افزوردن کد تخفیف جدید</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">کد</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">تاریخ آغاز</th>
                                        <th class="jsgrid-header-cell" style="width: 70px;">تاریخ پایان</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>

                                    @foreach($offers as $offer)
                                        <tr class="jsgrid-filter-row">
                                            <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                            <td class="jsgrid-cell " style="width: 100px; text-align: right; padding-right: 3%; font-weight: bold">{{$offer->code}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; ">{{$offer->starts_at->format('Y-m-d')}}
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">{{$offer->expires_at->format('Y-m-d')}}</td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                <a href="{{route('offers.edit', $offer)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                                <form class="d-inline-block" action="{{route('offers.destroy', $offer)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این کد مطمین هستید');">حذف</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

@endsection
