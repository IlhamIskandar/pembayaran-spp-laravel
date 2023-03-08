<div>
    <input wire:model="searchKey" type="text" placeholder="Search users..."/>
    <ul>
        @foreach($spp as $student)
            <li>{{ $student->nominal }}</li>
        @endforeach
    </ul>
</div>