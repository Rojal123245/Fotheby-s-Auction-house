@if (count($errors) > 0)
 <div class="alert alert-block alert-danger col-sm-12 col-md-12">
        <a class="close" data-dismiss="alert" href="#">
            ×
        </a>
        <h4 class="alert-heading">
            <i class="fa fa-check-square-o">
            </i>
            Errors
        </h4>
        <p>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </p>
    </div>
@endif