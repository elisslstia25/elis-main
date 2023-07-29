<x-app>

    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> Data Create Tema</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/penelitian/tema-add') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="control-label">Tema</label>
                                <input type="text" class="form-control" name="tema">
                            </div>

                                <button class="btn btn-dark btn-block">
                                    save
                                </button>

                        </form>
                    </div>
                </div>
        </div>
    </div>


</x-app>
