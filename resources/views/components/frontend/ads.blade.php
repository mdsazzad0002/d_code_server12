@if(!empty($where) && general_setting('system_showup')=='on')
    <x-frontend.card class="{{ $class ?? 'p-3' }}">
            @if(!empty(general_setting($where)))
                {!! general_setting($where) !!}
            @endif
        </x-frontend-card>
   
@endif
