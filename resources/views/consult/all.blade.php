<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>   
    
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        @if($user->role == 'client')
            <a href='/createConsult'>создать новое обращение</a><hr>
        @endif
    </div>
    
    <table class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
            <td>
                <a href="/consult/{{ $consult->id }}">
                    {{ $consult->title }}
                </a>    
            </td>            
            <td>{{ $consult->desсription }}</td>
            <td>
            @if (isset($consult->photo))    
              есть фото
            @else
              no photo
            @endif
            </td>            
            <td>{{ $consult->author->name }}</td>            
            <td>{{ $consult->status }}</td>                                    
            <td>{{ $consult->created_at }}</td>                                                
</tr>
@endforeach        
    </table>
        
</x-app-layout>