@extends('back.index')
@section('title')
فهرست مطالب
    @endsection

@section('content')

    <div class="content" >
        <div class="container-fluid">



            <div class="row">

                <div class="col-lg-12 col-md-12">
                    
                    @include('front.layouts.messages')

                    <a href="{{ route('admin.articles.create') }}" class="btn btn-info">نوشتن مطلب جدید + </a>
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">تمام مطالب </span>
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
                                                عنوان مطلب
                                            </th>

                                            <th>
                                                نویسنده
                                            </th>
                                            <th>
                                                دسته‌بندی
                                            </th>


                                            <th>
                                                وضعیت
                                            </th>
                                            <th class="text-center">
                                                مدیریت
                                            </th>
                                        </thead>
                                        <tbody>
                                        @foreach($articles as $article)

                                            @switch($article->status)
                                                @case(1)
                                                @php
                                                    $status ='<a href="#" class="badge badge-success"> منشتر شده  </a>'
                                                @endphp
                                                @break
                                                @case(0)
                                                @php
                                                    $status ='<a href="#" class="badge badge-danger" > منتشر نشده  </a>'@endphp
                                                @break
                                                @default

                                            @endswitch


                                            

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
                                                   <td><a href="{{ route('article', $article->id) }}" target="_blank">{{ $article->name }}</a></td>
                                                    <td>{{ $article->user->name }}</td>
                                                    <td>
                                                    {{ $article->category->name }}
						    </td>
                                                    <td>{!! $status ?? 'صفحه ثابت' !!}</td>
						                                <td class="td-actions text-center">

                                                        <a href="{{ route('admin.articles.edit', $article->id) }}" rel="tooltip"
                                                           title="ویرایش" class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <a onclick="dlt({{ $article->id }})" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $articles->links() }}
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
                    window.location.href = "/admin/articles/delete/" + id;
                }
            })
        }
    </script>
    @endsection






