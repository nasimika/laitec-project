@extends('back.index')
@section('title')
ساخت موضوع جدید
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
                                    <span class="nav-tabs-title">ساخت دسته‌بندی جدید</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">


                                    <form action="{{ route('admin.categories.store') }}" method="post">
                                        @csrf
                                        <div class="form-group" >
                                            <label for="name" ><i class="icofont-ui-user">Title</i></label>
                                            <input type="text" class="form-control" placeholder="عنوان دسته‌بندی"
                                                   @error('name') is-invalid @enderror name="name" id="name" value="{{ old('name') }}">
                                        </div>



                                        <div class="form-group">
                                            <label for="parent"><i class="icofont-envelope">والد</i></label>
                                            <select class="form-control custom-select-sm" data-style="btn-info" name="parent_id">

                                                <option value="0">ندارد</option>
                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>




                                        <button type="submit" class="btn btn-success">ذخیره</button>

                                        <a href="{{ route('admin.categories') }}" class="btn btn-warning">بازگشت</a>
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