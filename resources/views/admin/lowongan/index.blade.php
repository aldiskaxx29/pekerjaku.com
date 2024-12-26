@extends('tamplate.admin')

@section('content')
    <section class="dashboard">
      <div class="container">
        <h1>Lowongan</h1>

        <div class="p-2">
            <button class="btn btn-md btn-primary">ADD KATEGORI LOWONGAN</button>

            <div class="py-2">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Image</th>
                            <th>Deksripsi</th>
                            {{-- <th>Kecamatan</th>
                            <th>Kabupaten/Kota</th>
                            <th>Province</th>
                            <th>No Telepon</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongan as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->image }}</td>
                            <td>{{ $item->description }}</td>
                            {{-- <td>{{ $item->district }}</td>
                            <td>{{ $item->regency_city }}</td>
                            <td>{{ $item->province }}</td>
                            <td>{{ $item->phone_number }}</td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
@endsection

@push('script')
    <script>
        new DataTable('#example');
    </script>
@endpush
