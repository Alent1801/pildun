@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                            <h1>Edit Data</h1>
                            <p class="text-medium-emphasis">Edit Data Penyelenggara Piala Dunia!</p>
                            <form action="{{ route('piala.dunia.update', ['id' => $pildun->id]) }}" method="POST">
                                @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="text" name="negara_penyelenggara"
                                        placeholder="Negara Penyelenggara" value="{{ $pildun->negara_penyelenggara }}">
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="text" name="tahun_diselenggarakan"
                                        placeholder="Tahun Diselenggarakan" value="{{ $pildun->tahun_diselenggarakan }}">
                                </div>
                                <div class="d-grid-1 gap-2">
                                    <button class="btn btn-block btn-success px-4 text-white" type="submit">Simpan</button>
                                    <a href="{{ route('piala.dunia') }}">
                                        <button class="btn btn-block btn-danger px-4 text-white"
                                            type="button">Kembali</button>
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
