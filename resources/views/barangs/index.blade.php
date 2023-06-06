@extends('layout.app')

@section('content')
    <div id="list" class="container mt-5">
        <div class="row mb-0 ">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barangs.create') }}" class="btn btn-outline-light border border-primary ">Create
                        Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr class="text-center">
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Tools Barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr class="text-center">
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi_barang }}</td>
                            <td>{{ $barang->satuan_id }}</td>
                            <td class="text-center">
                                <div class="d-flex text-center">
                                    <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}"
                                        class="btn btn-outline-light border border-primary btn-sm me-2 "><i
                                            class="bi-person-lines-fill"></i></a>

                                    <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}"
                                        class="btn btn-outline-light border border-primary btn-sm me-2"><i
                                            class="bi-pencil-square"></i></a>

                                    <div>
                                        <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-light btn-sm me-2"><i
                                                    class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="wave"><img src="{{ Vite::asset('images/wave (2).svg') }}" alt="image"></div>
@endsection
