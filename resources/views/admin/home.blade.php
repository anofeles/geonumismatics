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
                            <h3 class="card-title">მთავარი</h3>
                        </div>
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>სახელი</th>
                                        <th>ატვირთვის თრიღი</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($page as $pageitem)
                                        @if($localid == $pageitem->lang_id)
                                            <tr>
                                                <td>{{$pageitem->id}}.</td>
                                                <td>{{$pageitem->subject}}</td>
                                                <td> {{$pageitem->create_date_time}} </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
