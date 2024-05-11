@extends('layout.main')
@section('judul','Tambah Data Student')

@section('content')
    <form method="post" action="{{url('student/update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$students->id}}"/>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{$students->name}}"
                                   name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{$students->email}}"
                                   name="email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date"
                                   class="form-control @error('dob') is-invalid @enderror"
                                   value="{{$students->dob}}"
                                   name="dob">
                            @error('dob')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Guru Pembimbing</label>
                            <input type="number"
                                   class="form-control @error('id_teacher') is-invalid @enderror"
                                   value="{{$students->id_teacher}}"
                                   name="id_teacher">
                            @error('id_teacher')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
