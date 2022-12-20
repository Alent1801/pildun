@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                            <h1>Tambah Data</h1>
                            <p class="text-medium-emphasis">Tambah Data Penyelenggara Piala Dunia!</p>
                            <form action="{{ route('piala.dunia.simpan') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="text" name="negara_penyelenggara"
                                        placeholder="Negara Penyelenggara">
                                    <span class="text-danger">{{ $errors->first('negara_penyelenggara') }}</span>
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="text" name="tahun_diselenggarakan"
                                        placeholder="Tahun Diselenggarakan">
                                    <span class="text-danger">{{ $errors->first('tahun_diselenggarakan') }}</span>
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
