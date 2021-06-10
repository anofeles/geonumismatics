@extends('admin.layouts.index')
@section('content')

    @php($type = 'type_'.$local)
    @php($desc = 'desc_'.$local)
    @php($science_comment = 'science_comment_'.$local)
    @php($zarapkhana = 'zarapkhana_'.$local)
    @php($nominal = 'nominal_'.$local)
    @php($date = 'date_'.$local)
    @php($collection = 'collection_'.$local)
    @php($bibliography = 'bibliography_'.$local)
    @php($foreign_money = 'foreign_money_'.$local)
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
                            <form method="post" action="{{route('admin.add.group',['local'=>$local])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ჯგუფი</label>
                                        <input type="text" name="name_ge" class="form-control" id="exampleInputEmail1"
                                               placeholder="name_ge">
                                        <input type="text" name="name_en" class="form-control" placeholder="name_en">
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
