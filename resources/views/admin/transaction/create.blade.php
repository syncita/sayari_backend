<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Create Category</h3>
                    <a href="{{ route('transaction.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('transaction.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name">
                                </div>
                            </div>

                            

                            <button type="submit" class="btn btn-primary">Save Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>