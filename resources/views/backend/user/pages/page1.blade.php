<x-user-layout>
    <x-slot name="title">Page 1</x-slot>
    <x-slot name="page_slug">page1</x-slot>

    <div class="flex flex-col items-center justify-center h-screen bg-gray-100">
        <h1 class="text-2xl font-bold mb-4">Welcome to Page 1</h1>
        <p class="mb-4">This is a simple page layout using Tailwind CSS.</p>
        <button class="btn-test">Test Button</button>

        <a href="{{ route('page2') }}">Go to Page 2</a>
        <a href="{{ route('dashboard') }}">Go to Dashboard</a>
    </div>
</x-user-layout>
