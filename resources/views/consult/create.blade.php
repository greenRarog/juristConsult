<x-app-layout>
    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    <form action='' method='POST'>
        @csrf 
        <select>
            @foreach($categories as $category)
            <option>{{ $category->title }}</option>
            @endforeach
        </select>    
        <input name='title'>
        <input name='description'>
        <input name='photo'>
        <input type='submit'>
    </form>
    </div>    
</x-app-layout>