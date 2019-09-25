@include('layouts.app')

@section('content')
    <div class="container">
        <h3 class="align-content-center">PROFILE</h3>
        <div class="card ">
            <div class="">
                <img src="{{asset('img/user.png')}}" class="rounded-circle w-25 p-4">
                <div class="bg-dark rounded-circle" style="width: 50px">
                    <a href=""><img src="{{asset('img/edit.png')}}" style="height: 50px" class="p-2"></a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="font-weight-bold">Name</td>
                    <td> :</td>
                    <td>{{$users->name}}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Email</td>
                    <td> :</td>
                    <td>{{$users->email}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td> :</td>
                    <td>null</td>
                </tr>
                <tr>
                    <td>Last Study</td>
                    <td> :</td>
                    <td>null</td>
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
        </div>
    </div>
    {{ dd($users) }}
@endsection
