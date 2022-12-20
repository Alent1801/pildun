@extends('layouts.master')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{-- Notifikasi --}}
            <div class="float-right">
                <script>
                    @if (Session::has('message'))
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.success("{{ session('message') }}");
                    @endif

                    @if (Session::has('error'))
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.error("{{ session('error') }}");
                    @endif

                    @if (Session::has('info'))
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.info("{{ session('info') }}");
                    @endif

                    @if (Session::has('warning'))
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.warning("{{ session('warning') }}");
                    @endif
                </script>


            </div>

            <div class="row">
                <div class="col-6m mb-2">
                    <a href="{{ route('piala.dunia.tambah') }}">
                        <button class="btn btn-primary px-4" type="submit">Tambah Data</button>
                    </a>
                </div>
            </div>
            <div class="row">

                <table class="table table-striped table-bordered w-100 table-responsive" id="data">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Negara Penyelenggara</th>
                            <th scope="col" class="text-center">Tahun Diselenggarakan</th>
                            <th scope="col" class="text-center" width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($pildun))
                            @foreach ($pildun as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $data->negara_penyelenggara }}</td>
                                    <td class="text-center">{{ $data->tahun_diselenggarakan }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('piala.dunia.hapus', ['id' => $data->id]) }}" method="POST">
                                            @csrf

                                            <a href="{{ route('piala.dunia.edit', ['id' => $data->id]) }}"
                                                class="btn btn-sm btn-warning text-white">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger text-white">Hapus</button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection
