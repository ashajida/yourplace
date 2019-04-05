<div class="saved-properties">
    <h2>Saved Properties</h2>
          <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Locations</th>
                                <th scope="col">Address</th>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($saved_posts as $post)
                            <tr>
                                <td><img style="width: 150px; height: 150px;" src="/storage/cover_images/{{$post->image_cover}}"></td>
                                <td>{{ $post->location }}</td>
                                <td>{{ $post->address }}</</td>
                                <td>{{ $post->title }}</</td>
                                <td><a href="/posts/{{ $post->id }}" class="_btn">View</a></td>
                                  <td>
                                    <form method="post" action="/saved-posts/{{ $post->id }}">
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