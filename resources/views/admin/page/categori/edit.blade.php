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
                            <form method="post"
                                  action="{{route('admin.edit.categorisviuv',['local'=>$local,'catid'=>$coin->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleSelectBorderWidth2">ჯგუფი</label>
                                        <select name="group_id" class="custom-select form-control-border border-width-2"
                                                id="exampleSelectBorderWidth2">
                                            @foreach($group as $groupitem)
                                                <option value="{{$groupitem->id}}"
                                                        @if($groupitem->id == $coin->group_id)
                                                        selected="selected"
                                                        @endif
                                                >{{$groupitem->$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <input type="text" name="{{$type}}" class="form-control" id="exampleInputEmail1"
                                               value="{{$coin->$type}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description, picture</label>
                                        <textarea name="{{$desc}}">{!! $coin->$desc !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Scholarly commentary</label>
                                        <textarea name="{{$science_comment}}">{!! $coin->$science_comment !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mint</label>
                                        <input type="text" name="{{$zarapkhana}}" class="form-control"
                                               id="exampleInputPassword1" value="{{$coin->$zarapkhana}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nominal</label>
                                        <input type="text" name="{{$nominal}}" class="form-control"
                                               id="exampleInputPassword1" value="{{$coin->$nominal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="text" name="{{$date}}" class="form-control"
                                               id="exampleInputPassword1" value="{{$coin->$date}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Collection</label>
                                        <textarea name="{{$collection}}">{!! $coin->$collection !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Bibliography</label>
                                        <textarea name="{{$bibliography}}">{!! $coin->$bibliography !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Imported coins found in Georgia</label>
                                        <textarea name="{{$foreign_money}}">{!! $coin->$foreign_money !!}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="customFile">Custom File</label>
                                        <input type="file"  name="photo[]" id="customFile" multiple>
                                    </div>

                                    @foreach($photo as $photoitem)
                                       <a href="{{route('admin.delete.photo',['local'=>$local,'photoid'=>$photoitem->id])}}" >
                                           <img src="{{asset('data/items/'.$coin->id.'/'.$photoitem->photo)}}" width="300">
                                       </a>
                                    @endforeach
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
