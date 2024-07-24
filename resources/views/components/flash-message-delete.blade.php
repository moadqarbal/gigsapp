@if (session()->has('deleteMessage'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed-top bg-danger text-white p-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!-- Your content here -->
                    <h3 class="text-center">{{ session('deleteMessage') }}</h3>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endif