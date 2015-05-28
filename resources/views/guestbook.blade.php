@extends('layout')

@section('content')

    <div class="row">
        <div class="col-sm-4">

            <form method="post">
                {!! csrf_field() !!}

                <h2>Guest book</h2>

                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{!! old('name') !!}">
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{!! old('email') !!}">
                </div>

                <div class="form-group">
                    <label class="control-label">Message</label>
                    <textarea name="message" class="form-control" rows="7">{!! old('message') !!}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

        <div class="col-sm-6 col-sm-offset-2">
            <dl>
                @foreach ($guestbooks as $guest)
                    <dt>{!! $guest->name !!} ({!! $guest->email !!})</dt>
                    <dd>
                        <div class="text-muted">{!! $guest->created_at->toDayDateTimeString() !!}</div>

                        {!! $guest->message !!}}
                    </dd>
                    <hr/>
                @endforeach
            </dl>
        </div>
    </div>

@stop
