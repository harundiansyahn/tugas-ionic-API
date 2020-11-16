@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route("kelas.form") }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Buat Kelas Baru</a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5><a href="{{ route("kelas.list") }}" class="text-white">TI VII P1</a></h5>
                        <p>Online</p>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi suscipit corrupti, nihil quaerat alias dolores fugit sequi qui modi cumque blanditiis provident labore! Quia, facilis tempore cumque officiis consectetur eius.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5><a href="{{ route("kelas.list") }}" class="text-white">TI VII P1</a></h5>
                        <p>Online</p>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi suscipit corrupti, nihil quaerat alias dolores fugit sequi qui modi cumque blanditiis provident labore! Quia, facilis tempore cumque officiis consectetur eius.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5><a href="{{ route("kelas.list") }}" class="text-white">TI VII P1</a></h5>
                        <p>Online</p>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi suscipit corrupti, nihil quaerat alias dolores fugit sequi qui modi cumque blanditiis provident labore! Quia, facilis tempore cumque officiis consectetur eius.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5><a href="{{ route("kelas.list") }}" class="text-white">TI VII P1</a></h5>
                        <p>Online</p>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi suscipit corrupti, nihil quaerat alias dolores fugit sequi qui modi cumque blanditiis provident labore! Quia, facilis tempore cumque officiis consectetur eius.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
