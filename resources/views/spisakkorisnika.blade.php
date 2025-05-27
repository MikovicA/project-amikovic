@extends("layout.public")

@section("title")
    Korisnici
@endsection

@section("content")
                    <h4 class="mb-0">Spisak korisnika</h4>
                </div>
                <div class="card-body">
                    <!-- Ovde ide lista korisnika -->
                    <ul class="list-group">
                        <li class="list-group-item"><p>Ime i prezime: {{ $ime}} {{ $prezime }}</p></li>
                  
                        <!-- Dodaj koliko treba -->
                         <ul>
                            @foreach($users as $user)
                                <li>{{$user['name']}}</li>
                            @endforeach
                         </ul>
                         <hr>
                         <div class="table">
                            <thead>
                                <tr>
                                    <th>Name:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user['name'] }}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                            <hr>
                            <p>Ime: {{ $korisnik->name }}</p>
                            <p>Prezime: {{ $korisnik->lastName }}</p>
                            <p>Age: {{ $korisnik->age }}</p>
                            <p>Kupljeni proizvodi: {{ $korisnik->kupovina }}</p>

                         </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection