<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>User</h5>

            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($user as $item)
                        <tr>
                            <td class="border border-1">{{ $item->id }}</td>
                            <td class="border border-1">{{ $item->name }}</td>
                            <td class="border border-1">{{ $item->email }}</td>
                            <td class="border border-1">{{ $item->birthday }}</td>
                            <td class="border border-1">{{ $item->status }}</td>
                            <td class="border border-1">
                                <a href="{{ route('user.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>

                        @endforeach
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
