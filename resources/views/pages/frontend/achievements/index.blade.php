<x-layouts.frontend title="Prestasi">

    <x-frontend.header>
        <x-slot name="title">
            Prestasi
        </x-slot>
        <x-slot name="description">
            Prestasi yang telah diraih oleh {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <table class="table table-striped shadow-sm">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Prestasi</th>
                <th>Tingkat</th>
                <th>Tahun</th>
            </tr>
            @forelse ($achievements as $achievement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $achievement->name }}</td>
                    <td>{{ $achievement->achievement }}</td>
                    <td>{{ $achievement->level }}</td>
                    <td>{{ $achievement->year }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Kami belum memiliki prestasi
                    </td>
                </tr>
            @endforelse
        </table>
    </div>


</x-layouts.frontend>
