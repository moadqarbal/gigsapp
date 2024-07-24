<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="text-center mb-4">REGISTER</h2>
                        <p class="text-center">Create an account and post gig</p>
                        <form method="POST" action="{{ route('users') }}">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name">
                                @error('name')
                                    <small class="text-danger">Please Enter Name</small>
                                @enderror
                            </div>
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
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                                @error('password_confirmation')
                                    <small class="text-danger">Please Confirm your password</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">Register</button>
                        </form>
                        <p class="mt-3 text-center">Already have an account? <a href="#" class="text-danger">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- End Container -->
    <div class="py-5"></div>

      

</x-layout>