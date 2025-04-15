<x-user-layout>
    <x-slot name="title">User Dashboard</x-slot>
    <x-slot name="page_slug">ecom</x-slot>

    @push('styles')
        <style>
            .btn-test {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
        </style>
    @endpush

    <div>
        Hello World! This is the user dashboard.
        <button class="btn-test">Test Button</button>

        <a href="{{ route('page1') }}">Go to Page 1"></a>
        <a href="{{ route('page2') }}">Go to Page 2"></a>
    </div>

    @push('scripts')
        <script>
            // Add your custom JavaScript here
            document.querySelector('.btn-test').addEventListener('click', function() {
                alert('Button clicked!');
            });
        </script>
    @endpush

</x-user-layout>
