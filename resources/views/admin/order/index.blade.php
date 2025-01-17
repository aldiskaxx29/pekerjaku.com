@extends('tamplate.admin')

@section('content')
    <section class="dashboard">
      <div class="container">
        <h1>Data Order</h1>

        <div class="p-2">
            {{-- <button class="btn btn-md btn-primary">ADD PEKERJA</button> --}}

            <div class="py-2">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Pekerja</th>
                            <th>Majikan</th>
                            <th>Status</th>
                            <th>Note</th>
                            <th>Tanggal dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pekerja as $item)
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


@push('script')
<script>
    new DataTable('#example');
</script>
@endpush
