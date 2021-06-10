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
                            <h3 class="card-title">კატეგორია</h3>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-app bg-success" href="{{route('admin.add.group',['local'=>$local])}}">
                                    <i class="fas fa-plus"></i> დამატება
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>მენიუ</th>
                                        <th>აქტივობა</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($group as $groupitem)
                                        <tr>
                                            <td>{{$groupitem->id}}.</td>
                                            <td>{{$groupitem->$name}}</td>
                                            <td>
                                                <a class="btn btn-app" href="{{route('admin.edit.group',['local'=>$local,'groupid'=>$groupitem->id])}}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-app" href="{{route('admin.delete.group',['local'=>$local,'groupid'=>$groupitem->id])}}">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
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
