@extends('back.index')
@section('title')
دسته‌بندی‌ها
    @endsection

@section('content')

    <div class="content">
        <div class="container-fluid">



            <div class="row">

                <div class="col-lg-12 col-md-12">

                    @include('front.layouts.messages')

                    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">ساخت دسته‌بندی جدید + </a>
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">تمام موضوعات</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <thead>
                                            <th>
                                                ردیف
                                            </th>
                                            <th>
                                                نام موضوع
                                            </th>
                                            <th>
                                                والد موضوع
                                            </th>

                                            <th>
                                                امکانات
                                            </th>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                                <span class="form-check-sign">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $category->name }}</td>
                                                    @php
                                                        $parent = 'ندارد';
                                                    @endphp
                                                    @foreach($categories1 as $category1)
                                                        @php
                                                            if ($category->parent_id == $category1->id)
                                                                {
                                                                $parent = $category1->name;
                                                                }
                                                        @endphp
                                                    @endforeach
                                                    <td>
                                                        {{ $parent }}
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('admin.categories.edit', $category->id) }}" rel="tooltip" title="ویرایش" class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <a onclick="dlt({{ $category->id }})"
                                                           rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>


      <script>
        function dlt(id) {
            Swal.fire({
                title: 'آیا برای حذف مطمئن هستید؟',
                text: 'این تغییر قابل بازگشت نخواهد بود.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'نه، اصلا',
                confirmButtonText: 'بله حتما'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "/admin/categories/delete/" + id;
                }
            })
        }
    </script>
    @endsection
