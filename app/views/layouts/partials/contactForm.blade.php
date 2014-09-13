<article>
    <div class="row uk-scrollspy-inview"
         data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
        <div class="col-md-6 col-md-offset-3  uk-scrollspy-inview"
             data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
            <h1 style="text-align: center">Get in touch</h1>
            @include('layouts.partials.errors')
            {{ Form::open(['route' => 'contact_path'])}}
            <!-- Name form input -->
            <div class="form-group">
                {{ Form::label('name', 'Name:')}}
                {{ Form::text('name', null, ['class' => 'form-control'])}}
            </div>

            <!-- Email form input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:')}}
                {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>

            <!-- Phone form input -->
            <div class="form-group">
                {{ Form::label('phone', 'Phone:')}}
                {{ Form::text('phone', null, ['class' => 'form-control'])}}
            </div>

            <!-- Message form input -->
            <div class="form-group">
                {{ Form::label('body', 'Message:')}}
                {{ Form::textarea('body', null, ['class' => 'form-control'])}}
            </div>

            <!-- Submit form input -->
            <div class="form-group">
                {{ Form::submit('Send', ['class' => 'btn btn-primary btn-block'])}}
            </div>

            {{ Form::close()}}
        </div>
    </div>

</article>