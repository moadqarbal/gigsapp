<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>
                        <p class="text-center">Log in into your account and post gig</p>
                        <form method="POST" action="{{ route('user.authenticate') }}">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" value="{{ old('email') }}" class="form-control" id="email" name="email" >
                                @error('email')
                                    <small class="text-danger">Please Enter email</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" >
                                @error('password')
                                    <small class="text-danger">Please Enter password</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">Login</button>
                        </form>
                        <p class="mt-3 text-center">do you do not have an account? <a href="#" class="text-danger">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- End Container -->
    <div class="py-5"></div>

      

</x-layout>