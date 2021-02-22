@if (session("success"))
    <div class="bg-green-100 border border-green-400 text-greeb-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold mr-1">Success</strong>
        <span class="block sm:inline">{{ session("success") }}</span>
    </div>
@endif

@if (session("error"))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold mr-1">Error</strong>
        <span class="block sm:inline">{{ session("error") }}</span>
    </div>
@endif

@if (session("warning"))
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold mr-1">Warning</strong>
        <span class="block sm:inline">{{ session("warning") }}</span>
    </div>
@endif

@if (session("info"))
    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold mr-1">Info</strong>
        <span class="block sm:inline">{{ session("info") }}</span>
    </div>
@endif
