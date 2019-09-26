@include('layouts.app')

@section('content')
    <div class="container">
        <h3 class="align-content-center">PROFILE</h3>
        <div class="card ">
            <div class="">
                <img src="{{asset('img/user.png')}}" class="rounded-circle w-25 p-4">
            </div>
            <table>
                <tr>
                    <td class="font-weight-bold">Name</td>
                    <td> :</td>
                    <td>{{$users->name}}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td> :</td>
                    <td>{{ $users->phone_number }}</td>
                </tr>
                <tr>
                    <td>Birth</td>
                    <td> :</td>
                    <td>{{$users->birth_address}}, {{$users->birth_date}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td> :</td>
                    <td>{{$users->address}}</td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td> :</td>
                    <td>{{$users->hobby}}</td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td> :</td>
                    <td>{{$users->skill}}</td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td> :</td>
                    <td>{{ $users->experience }}</td>
                </tr>
                <tr>
                    <td>Overview</td>
                    <td> :</td>
                    <td>{{ $users->overview }}</td>
                </tr>
                <tr>
                    <td>Find me at</td>
                    <td> :</td>
                    <td>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <a href="/profile/{{$users->id}}/edit" class="btn btn-warning m-3">Edit profile</a>
        </div>
    </div>
    {{ dd($users) }}
@endsection
