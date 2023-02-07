<x-app-layout>
    @if($user->role == 'client')
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    <form action='' method='POST' enctype="multipart/form-data">
        @csrf 
        выберите категори:
        <select name='category' class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @foreach($categories as $category)
            <option value='{{ $category->id }}'>{{ $category->title }}</option>
            @endforeach
        </select><br>    
        <input hidden name='author_id' value='{{ $user->id }}'>
        название обращения:
        <input name='title' class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"><br>
        суть обращения:
        <input name='description' class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"><br>
        фотография:
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input name="photo" type="file" /><br>
        <input type='submit' class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"><br>
    </form>
    </div>    
    @else
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        извините, это опция доступна только для клиентов
    </div>   
    @endif
</x-app-layout>