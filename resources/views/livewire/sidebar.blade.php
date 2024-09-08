<div>
    <div class="sidebar" x-data="{ show: false }">
        <ul>
            <li><a wire:navigate href="{{ route('leave-statement') }}">Форма</a></li>
            <li><a wire:navigate href="{{ route('pending-statements') }}">Ожидающие заявления</a></li>
            <li><a wire:navigate href="{{ route('confirmed-statements') }}">Принятые заявления</a></li>
            <li><a wire:navigate href="{{ route('rejected-statements') }}">Отклоненные заявления</a></li>
        </ul>
    </div>
</div>