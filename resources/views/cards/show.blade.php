@extends('layout')

@section('content')
<div>
    <div>
        <>
            <h1> {{ $card->title }} </h1>

            @foreach ($card->notes as $note )
            <h1> {{ $note->body }} </h1>
        
            @endforeach
        </ul>
    </div>
</div>

<form method="POST" action="cards/{{ card }}/note">
    <div>
        <textarea title="body" name="body">  </textarea>

    </div>
    <div>
        <button type="submit">
            add note
        </button>
    </div>

</form>
@stop

