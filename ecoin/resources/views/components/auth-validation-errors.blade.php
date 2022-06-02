@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div>
            {{ __('Whoops! Algo deu errado.') }}
        </div>

        <ul class="">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
