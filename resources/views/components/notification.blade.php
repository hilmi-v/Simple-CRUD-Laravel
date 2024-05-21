@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h4>ERROR :</h4><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ol>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="pt-3 row">
        <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

@endif
