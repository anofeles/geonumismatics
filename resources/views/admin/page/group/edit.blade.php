@extends('admin.layouts.index')
@section('content')

    @php($name = 'name_'.$local)

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
                            <form method="post" action="{{route('admin.edit.group',['local'=>$local,'groupid'=>$CoinGroups->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ჯგუფი</label>
                                        <input type="text" name="{{$name}}" class="form-control" id="exampleInputEmail1"
                                               value="{{$CoinGroups->$name}}">
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
