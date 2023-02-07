<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(isset($consults))        
            <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <div class="max-w-xl">
                    <table>
                        <tr>
                            <th>category</th>
                            <th>title</th>            
                            <th>description</th>
                            <th>photo</th>            
                            <th>author</th>            
                            <th>status</th>                        
                            <th>date</th>
                        </tr>
                    @foreach($consults as $consult)
                    <tr>
                        <td>{{ $consult->category->title }}</td>
                        <td>{{ $consult->title }}</td>
                        <td></td>                        
                        <td>
                            @if(isset($consult->photo))
                            photo_link
                            @else
                            no pnoto
                            @endif
                        </td>
                        <td>{{ $consult->author->name }}</td>                        
                        <td>{{ $consult->status }}</td>
                        <td>{{ $consult->created_at }}</td>                        
                    </tr>                    
                    @endforeach
                    </table>
                </div>
            </div>        
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
