<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Type</h5>
               
               <a href="{{ route('type.create') }}" class="btn btn-primary btn-sm">Type</a>
             
  
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($type as $item)
                    <tr>
                        <td class="border border-1">{{ $item->id }}</td>
                        <td class="border border-1 w-100">{{ $item->name }}</td>
                        <td class="border border-1">
                            <a href="{{ route('type.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </section>
</x-app-layout>
