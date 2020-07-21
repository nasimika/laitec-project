@extends('back.index')
@section('title')
ویرایش موضوع
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
                                    <span class="nav-tabs-title">ویرایش دسته‌بندی </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">


                                    <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                                        @csrf
                                        <div class="form-group" >
                                            <label for="name" ><i class="icofont-ui-user">Title</i></label>
                                            <input type="text" class="form-control" placeholder="عنوان دسته‌بندی"
                                                   @error('name') is-invalid @enderror name="name" id="name" value="{{ $category->name }}">
                                        </div>



                                        <div class="form-group">
                                            <label for="parent"><i class="icofont-envelope">والد</i></label>
                                            <select class="form-control custom-select-sm" data-style="btn-info" name="parent_id">

                                                <option value="0" @if ($category->parent == 0) selected @endif>ندارد</option>
                                                @foreach($categories as $category1)

                                                    <option value="{{ $category1->id }}" @if ($category->parent == $category1->id) selected @endif>
                                                        {{ $category1->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>




                                        <button type="submit" class="btn btn-success">ویرایش</button>

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
