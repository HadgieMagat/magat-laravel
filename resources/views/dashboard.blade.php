<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h3>
       <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Total Number of Post:</div>
            
            </div>
            <span class="badge text-bg-primary rounded-pill">Count:   {{ $Posts }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Total Unpublished Post:</div>
            
            </div>
            <span class="badge text-bg-primary rounded-pill">Count:   {{ $Unpublished }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Total Published Post:</div>
           
            </div>
            <span class="badge text-bg-primary rounded-pill">Count:   {{ $Published }}</span>
        </li>
        </ol>
    </h3>  
</x-app-layout>
