<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!-- Sidebar -->
        <div class="w-[17%] bg-white p-4 border-r border-gray-300 ml-0">
            <div class="mb-4">
                <a href="/report" class="font-bold border-b-2 border-black w-full py-2">All Report</a>
            </div>
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item" data-url="{{ route('report.aos.index') }}"><span class="mr-2 text-xl">✈️</span> Aircraft Operation Summary</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item" data-url="{{ route('report.pilot.index') }}"><span class="mr-2 text-xl">✈️</span> Pilot Report And Technical Delay</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item" data-url="{{ route('report.cumulative') }}"><span class="mr-2 text-xl">✈️</span> Cumulative Flight Hours and Take Off</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Etops Reliability Report</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Etops Event</a></li> 
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Reliability Graph</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Engine Operation Summary</a></li> 
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Engine Removal & Shutdown</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Weekly Reliability Report</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Summary Report</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Graph ATA Pilot</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Graph ATA Delay</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> APU Operation Summary</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> APU Removal</a></li>
                <li><a href="#" class="flex items-center text-blue-500 hover:text-blue-900 sidebar-item"><span class="mr-2 text-xl">✈️</span> Cabin Reliability Report</a></li> 
            </ul>
        </div>
    

        <!-- Main Content Area -->
        <div class="flex-1 p-6 bg-green-200" id="main-content">
            <h1 class="text-3xl font-bold mb-4">Main Content Area</h1>
            <p>This is where the main content will go. You can place your reports, data, or any other content here.</p>
        </div>

        

    </div>

    <script src="{{ asset('js/report.js') }}"></script> <!-- Script js di public/js/report.js -->

</x-app-layout>