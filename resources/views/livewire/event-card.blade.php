<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <div class="h-48 overflow-hidden">
        <a href="#">
            <img class="rounded-t-lg object-cover w-full h-full" src="https://images.unsplash.com/photo-1549451371-64aa98a6f660?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="" />
        </a>
    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Enchanted Garden Gala</h5>
        </a>
        <div class="mt-4">
            <div class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 flex-shrink-0">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                    <line x1="16" y1="2" x2="16" y2="6" />
                    <line x1="8" y1="2" x2="8" y2="6" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                <span class="text-sm text-gray-500">Date: <span class="font-medium">[Event Date]</span></span>
            </div>
            <div class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 flex-shrink-0">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" y1="6" x2="12" y2="12" />
                    <line x1="12" y1="18" x2="12" y2="18" />
                </svg>
                <span class="text-sm text-gray-500">Time: <span class="font-medium">[Event Time]</span></span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 flex-shrink-0">
                    <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                <span class="text-sm text-gray-500">Location: <span class="font-medium">[Event Location]</span></span>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('event.show', 1) }}" class="inline-flex items-center px-6 py-2 mt-4 text-sm font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300">
                View Event
            </a>
        </div>
    </div>
</div>
