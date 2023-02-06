<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>   

    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"> 
        Category: {{ $consult->category->title }}<br>
        
        Date: {{ $consult->created_at }}<br>
        
        Title: {{ $consult->title }}<br>
        
        Description: {{ $consult->desсription }} <br>
        
        Photo: 
        @if(isset($consult->photo))
        {{ $consult->photo }} <br>
        @else 
        no photo <br>
        @endif
        
        Autor: {{ $consult->author->name }}<br>
        
        Status: {{ $consult->status }}<br>
        
        @if( $consult->status != 'open')
        Jurist: {{ $consult->jurist->name }} <br>
        @endif                        
        
          @if (isset($consult->comments))
            <table>
            @foreach($consult->comments as $comment)
              <tr>
                  <td>author: {{ $comment->user->name }}</td>
                  <td>comment: {{ $comment->text_comment }}</td>
              </tr>
            @endforeach
            </table>
          @endif
    </div>    
    
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    @if(($user->id === $consult->author->id) && ($consult->status == 'in work'))
    <form action='' method="POST">
        @csrf        
        оставить комментарий и закрыть консультацию:<br>
        <input name='comment_author'><br>
        <input hidden name='user_id' value='{{ $consult->author->id }}'>
        <input hidden name='consult_id' value='{{ $consult->id }}'>
        <input type='submit'>
    </form>
    @endif
    </div>
    
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    @if(($user->role === 'jurist') && ($consult->status == 'open'))
    <form action='' method="POST">
        @csrf        
        Вы можете ответить на запрос и взять эту консультацию в работу. консультация будет закреплена за Вами<br>
        <input name='comment_jurist'><br>
        <input hidden name='user_id' value='{{ $user->id }}'>
        <input hidden name='consult_id' value='{{ $consult->id }}'>
        <input type='submit'>
    </form>
    @endif
    </div>    
</x-app-layout>