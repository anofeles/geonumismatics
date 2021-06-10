@extends('admin.layouts.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">კატეგორია რედაქტირება</h3>
                        </div>
                        <div class="card">
                            <!-- /.card-header -->
                            <form method="post" action="{{route('admin.edit.menus',['local'=>$local,'menuid'=>$Data->id])}}" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <input type="text" name="subject" class="form-control" id="exampleInputEmail1"
                                               value="{{$Data->subject}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description, picture</label>
                                        <textarea name="text">{!! $Data->text !!}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
