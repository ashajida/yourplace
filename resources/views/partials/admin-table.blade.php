<div class="saved-properties">
    <h2>Users</h2>
          <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Lirstname</th>
                                 <th scope="col">Lastname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acount Type</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($users_collection as $user)
                            <tr>
                                <td><img style="width: 150px; height: 150px;" src="/storage/cover_images/{{$user->cover_image}}"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</</td>
                                <td>{{ $user->email }}</</td>
                                <td>{{ $user->user_type }}</</td>
                                <td><a href="/users/{{ $user->id }}/edit" class="_btn">Edit</a></td>
                                  <td>
                                    <form method="post" action="/users/{{ $user->id }}">
                                        @CSRF
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="_btn danger" value="Delete"/>
                                    </form>
                                  </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
</div>