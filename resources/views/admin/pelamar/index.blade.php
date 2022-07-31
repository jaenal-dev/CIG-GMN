<x-app-layout title="Pelamar">

    <div class="container">

        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5">
                    <h1 class="welcome">Pelamar</h1>
                </div>
            </div>
        </nav>

        <div class="container" style="width: 95%; margin-bottom: 12.5%">
            <table id="table_id" class="table table-stripped table-sm mt-5" style="margin-bottom: 130px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Hp</th>
                        <th>Posisi</th>
                        <th>CV</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelamar as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->telpon}}</td>
                        <td>{{$item->posisi}}</td>
                        <td>
                            <a href="{{asset('storage/' . $item->cv)}}">{{$item->nama . '.pdf'}}</a>
                        </td>
                        <td>
                            <form action="{{route('pelamar.destroy', Crypt::encryptString($item->id))}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="text-danger delete d-inline border-0" style="background: transparent" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o h4"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('sweetalert::alert')
    </div>
</div>

@push('page-scripts')

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>

@endpush

</x-app-layout>
