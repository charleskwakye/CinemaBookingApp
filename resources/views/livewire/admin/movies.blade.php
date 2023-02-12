
<div class=" m-4  flex justify-end">
    <button
        wire:click="addNewMovie"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add New Movie
    </button>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                <span data-tippy-content="Order by id">id</span>
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="">Image</span>
            </th>
            <th scope="col" class="px-6 py-3">
                <span data-tippy-content="Order by title">Title</span>

            </th>
            <th scope="col" class="px-6 py-3">
                <span data-tippy-content="Order by date">release date(Y-M-D)</span>
            </th>
            <th scope="col" class="px-6 py-3">
                <span data-tippy-content="Order by date">Genre</span>
            </th>
            <th scope="col" class="px-6 py-3">
                Rating(%)
            </th>
            <th scope="col" class="px-6 py-3">
                Length
            </th>
            <th scope="col" class="px-6 py-3">
                Language
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$movie->id}}
                </td>
                <td class="w-32 p-4">
                    <img src="https://image.tmdb.org/t/p/original/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg" alt="movie cover">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$movie->title}}
                </td>
                <td class="px-6 py-4">
                    {{$movie->release_date}}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$movie->genre}}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$movie->rating}}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{floor($movie->length / 60)}}h{{$movie->length % 60}}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$movie->language}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
