@include('layouts/navadmin')

@section('content')
    <div class="container">
        <div class=" mt-4 ">
                    <h5 class="position-static">USER ACCOUNT CREATOR</h5>
                    {{--            tabel--}}
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Hak Asses</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="/admin/{{$user->id}}/suspand" onclick="return confirm('apakah anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger btn-sm">BLOKIR</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>

    {{ dd($users) }}
@endsection
