<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Update Article</h3>
                    <a href="{{ route('article.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('article.update',$article->id) }}" method="article" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $article->title }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id">Category <span class="text-danger">*</span></label>
                                    <input id="category_id" class="form-control" type="text" name="category_id" value="{{ $article->category }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Type<span class="text-danger">*</span></label>
                                        <input id="type" class="form-control-file" type="text" name="type" value="{{ $article->type }}">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Age<span class="text-danger">*</span></label>
                                            <input id="age" class="form-control" type="text" name="age" value="{{ $article->age }}">
                                        </div>

                                        <div class="col-md-6">
                                            
                                <div class="my-2">
                                    <img src="{{ asset($article->image) }}" width="120" alt="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>