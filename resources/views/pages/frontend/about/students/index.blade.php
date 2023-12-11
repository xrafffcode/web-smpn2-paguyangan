<x-layouts.frontend title="Siswa">

    <x-frontend.header>
        @php
            $status = request()->status ?? 'active';
        @endphp
        <x-slot name="title">
            {{ $status == 'inactive' ? 'Alumni' : 'Siswa' }}
        </x-slot>
        <x-slot name="description">
            {{ $status == 'inactive' ? 'Alumni' : 'Siswa' }} {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('student') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari siswa" name="q"
                            value="{{ request()->q }}">
                        <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped shadow-sm">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                </tr>
            @endforeach
        </table>
    </div>


</x-layouts.frontend>
