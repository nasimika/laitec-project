@extends('back.index')
@section('title')
مطلب جدید
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12 col-md-12">

                    @include('front.layouts.messages')
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">نوشتن مطلب جدید</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">


                                    <form action="{{ route('admin.articles.store') }}" method="post">
                                        @csrf
                                        <div class="form-group" >
                                            <label for="name" ><i class="icofont-ui-user">Title</i></label>
                                            <input type="text" class="form-control" placeholder="عنوان مطلب"
                                                   @error('name') is-invalid @enderror name="name" id="name" value="{{ old('name') }}">
                                        </div>


                                        <div class="form-group" >
                                            <!--label for="description" ><i class="icofont-ui-user">توضیحات مطلب</i></label-->
                                            <textarea class="form-control"
                                                      @error('description') is-invalid @enderror name="description" id="editor1">
                                                {{ old('description') }}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="status"><i class="icofont-envelope">وضعیت</i></label>
                                            <select class="form-control custom-select-sm" data-style="btn-info" name="status">
                                                <option value="0">منتشر نشده</option>
                                                <option value="1">منتشر شده</option>
                                            </select>
                                        </div>





                                        <div class="form-group">
                                            <label for="categories">دسته‌بندی‌ها</label>
                                            <div id="output"></div>
                                            <select class="form-control"  name="category_id">
                                                @foreach($categories as $cat_id => $cat_name)
                                                <option value="{{ $cat_id }}">{{ $cat_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                        <button type="submit" class="btn btn-success">ذخیره</button>

                                        <a href="{{ route('admin.articles') }}" class="btn btn-warning">بازگشت</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>

   
    @endsection

