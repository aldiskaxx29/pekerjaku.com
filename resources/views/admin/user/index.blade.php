@extends('tamplate.admin')

@section('content')
    <section class="dashboard">
      <div class="container">
        <h1>Data User</h1>

        <div class="p-2">
            <button class="btn btn-md btn-primary">ADD PEKERJA</button>

            <div class="py-2">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten/Kota</th>
                            <th>Province</th>
                            <th>No Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->district }}</td>
                            <td>{{ $item->regency_city }}</td>
                            <td>{{ $item->province }}</td>
                            <td>{{ $item->phone_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
@endsection
