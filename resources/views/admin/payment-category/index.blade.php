<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Payment Category</h5>
              
               <a href="{{ route('paymentcategory.create') }}" class="btn btn-primary btn-sm">Create Category</a>
    

      
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>

                @foreach ($paymentcategory as $item)
                <tr>
                    <td class="border border-1">{{ $item->id }}</td>
                    <td class="border border-1 w-100">{{ $item->name }}</td>
                    <td class="border border-1">
                        <a href="{{ route('paymentcategory.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
                        
                        
                 
                </table>
            </div>
        </div>
    </section>
</x-app-layout>