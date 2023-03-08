<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>About</h5>
               <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Create about</a>
             

      
            </div>
            <div class="row p-5">
                                        
                @foreach ($about as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <td>
                                    <img src="{{ asset($item->image) }}" width="100%" class="img-fluid" alt="">
                                </td>
                                <td>Title:{{ $item->title }}</td>
                                <div>
                                    {!! Str::words($item->description,30,'...') !!}
                                </div>
                                <div my-3>
                                    <form action="{{ route('about.destroy',$item->id)}}" method="post">
                                    <td><a href="{{ route('about.edit',$item->id) }}"
                                        class="btn btn-primary">Edit</a></td>   
                                        @csrf 
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>    
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        <tr>
                            @endforeach 
                
                </table>     
                 </div>
        </div>
    </section>
</x-app-layout>
