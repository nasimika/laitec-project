@extends('back.index')
@section('title')
ویرایش مطلب
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
                                    <span class="nav-tabs-title">ویرایش مطلب</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">


                                    <form action="{{ route('admin.articles.update', $article->id) }}" method="post">
                                        @csrf
                                        <div class="form-group" >
                                            <label for="name" ><i class="icofont-ui-user">Title</i></label>
                                            <input type="text" class="form-control" placeholder="عنوان مطلب"
                                                   @error('name') is-invalid @enderror name="name" id="name" value="{{ $article->name }}">
                                        </div>



                                        <div class="form-group" >
                                            <!--label for="description" ><i class="icofont-ui-user">توضیحات مطلب</i></label-->
                                            <textarea class="form-control"
                                                      @error('description') is-invalid @enderror name="description" id="editor1">
                                                {{ $article->description }}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="status"><i class="icofont-envelope">وضعیت</i></label>
                                            <select class="form-control custom-select-sm" data-style="btn-info" name="status">
                                                <option value="0">منتشر نشده</option>
					<option value="1" <?php if($article->status == 1) echo 'selected';?>>منتشر شده</option>
				    </select>
				</div>






				<div class="form-group">
				    <label for="categories">دسته‌بندی‌ها</label>
				    <div id="output"></div>
				    <select class="form-control"  name="category_id">
					@foreach($categories as $cat_id => $cat_name)
					<option value="{{ $cat_id }}"

                                                <?php
                                                if($cat_id == $article->category_id)echo 'selected'
                                                ?>
					>{{ $cat_name }}</option>
					    @endforeach
                    </select>
                </div>




                                        <div class="form-group" >
                                            <label for="user_id" >
                                                <i class="icofont-ui-user">
                                                    نویسندهٔ اصلی: {{ $article->user->name}}
                                                </i>
                                            </label>
                                        </div>

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


