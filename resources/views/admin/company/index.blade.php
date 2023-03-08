<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Company</h5>
               @if(empty($company))
               <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Create Company</a>
               @endif

      
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Logo</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    @if (!empty($company))
                        <tr>
                            <td class="border border-1">{{ $company->id }}</td>
                            <td class="border border-1"><img src="{{ asset($company->logo) }}" width="40" alt=""></td>
                            <td class="border border-1">{{ $company->name }}</td>
                            <td class="border border-1">{{ $company->address }}</td>
                            <td class="border border-1">{{ $company->phone }}</td>
                            <td class="border border-1">{{ $company->email }}</td>
                            <td class="border border-1">
                                <a href="{{ route('company.edit',$company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        
                    @endif
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
