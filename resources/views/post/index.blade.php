<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>My Post</h5>
                    <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm">Add New</a>
               </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Age</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>


                @foreach ($post as $item)
                        <tr>
                            <td class="border border-1">{{ $item->id }}</td>
                            <td class="border border-1"><img src="{{ asset($item->image) }}" width="40" alt=""></td>
                            <td class="border border-1">{{ $item->title }}</td>
                            <td class="border border-1">{{ $item->category }}</td>
                            <td class="border border-1">{{ $item->type }}</td>
                            <td class="border border-1">{{ $item->age }}</td>
                            <td class="border border-1">{{ $item->status }}</td>
                            <td class="border border-1">{{ $item->actions }}</td>
                            <td class="border border-1">
                                <a href="{{ route('post.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
