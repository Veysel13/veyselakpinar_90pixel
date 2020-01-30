@extends('shared.app')
@section('content')

    <div class="container h-100">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 col-md-4 animated bounceInDown myForm">
                <div class="card-header">
                    <h4>Data Transfer</h4>
                </div>
                <form action="{{url('/add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">

                        <div id="dynamic_container">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15"><i class="fas fa-file-upload"></i></span>
                                </div>
                                <input name="file" type="file" class="form-control"/>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm float-right "><i
                                class="fas fa-arrow-alt-circle-right"></i> Ekle
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection


@section('js')

@endsection
