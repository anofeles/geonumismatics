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
                            <form method="post" action="{{route('admin.add.categorisviuv',['local'=>$local])}}" enctype="multipart/form-data">
                                @csrf
                                <input name="photo1" type="hidden" value="0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleSelectBorderWidth2">ჯგუფი</label>
                                        <select name="group_id" class="custom-select form-control-border border-width-2"
                                                id="exampleSelectBorderWidth2">
                                            @foreach($group as $groupitem)
                                                <option value="{{$groupitem->id}}">{{$groupitem->$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <input type="text" name="type_ge" class="form-control" id="exampleInputEmail1"
                                               placeholder="type_ge">
                                        <input type="text" name="type_en" class="form-control" placeholder="type_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description, picture</label>
                                        <textarea name="desc_ge" placeholder="desc_ge"></textarea>
                                        <textarea name="desc_en" placeholder="desc_en"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Scholarly commentary</label>
                                        <textarea name="science_comment_ge" placeholder="science_comment_ge"></textarea>
                                        <textarea name="science_comment_en" placeholder="science_comment_en"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mint</label>
                                        <input type="text" name="zarapkhana_ge" class="form-control"
                                               id="exampleInputPassword1" placeholder="zarapkhana_ge">
                                        <input type="text" name="zarapkhana_en" class="form-control"
                                               placeholder="zarapkhana_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nominal</label>
                                        <input type="text" name="nominal_ge" class="form-control"
                                               id="exampleInputPassword1" placeholder="nominal_ge">
                                        <input type="text" name="nominal_en" class="form-control"
                                               placeholder="nominal_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="text" name="date_ge" class="form-control"
                                               id="exampleInputPassword1" placeholder="date_ge">
                                        <input type="text" name="date_en" class="form-control" placeholder="date_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Collection</label>
                                        <textarea name="collection_ge" placeholder="collection_ge"></textarea>
                                        <textarea name="collection_en" placeholder="collection_en"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Bibliography</label>
                                        <textarea name="bibliography_ge" placeholder="bibliography_ge"></textarea>
                                        <textarea name="bibliography_en" placeholder="bibliography_en"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Imported coins found in Georgia</label>
                                        <textarea name="foreign_money_ge" placeholder="foreign_money_ge"></textarea>
                                        <textarea name="foreign_money_en" placeholder="foreign_money_en"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">Custom File</label>
                                        <input type="file"  name="photo[]" id="customFile" multiple>
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
