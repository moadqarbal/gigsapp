<x-layout>
    <div class="container">
        <div class="card bg-light my-5">
          <div class="card-body">
            <h5 class="card-title mb-4">Create Gig</h5>
    
            <!-- Form -->
            <form method="POST" action="{{ route('listings.store') }}" enctype="multipart/form-data">
                @csrf
            
                <!-- Company Name -->
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" name="company" value="{{ old('company') }}" class="form-control" id="companyName" placeholder="Enter company name">
                    @error('company')
                        <small class="text-danger">Please Enter Company Name</small>
                    @enderror
                </div>
            
                <!-- Job Title -->
                <div class="mb-3">
                    <label for="jobTitle" class="form-label">Job Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="jobTitle" placeholder="Example: Senior Laravel Developer">
                    @error('title')
                        <small class="text-danger">Please Enter title</small>
                    @enderror
                </div>
            
                <!-- Job Location -->
                <div class="mb-3">
                    <label for="jobLocation" class="form-label">Job Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}" id="jobLocation" placeholder="Example: Remote, Boston MA, etc">
                    @error('location')
                        <small class="text-danger">Please Enter location</small>
                    @enderror
                </div>
            
                <!-- Contact Email -->
                <div class="mb-3">
                    <label for="contactEmail" class="form-label">Contact Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="contactEmail" placeholder="Enter contact email">
                    @error('email')
                        <small class="text-danger">Please Enter email</small>
                    @enderror
                </div>
            
                <!-- Website/Application URL -->
                <div class="mb-3">
                    <label for="websiteUrl" class="form-label">Website/Application URL</label>
                    <input type="url" name="website" class="form-control" value="{{ old('website') }}" id="websiteUrl" placeholder="Enter website/application URL">
                    @error('website')
                        <small class="text-danger">Please Enter website</small>
                    @enderror
                </div>
            
                <!-- Tags -->
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags (Comma Separated)</label>
                    <input type="text" name="tags" class="form-control" value="{{ old('tags') }}" id="tags" placeholder="Example: Laravel, Backend, Postgres, etc">
                    @error('tags')
                        <small class="text-danger">Please Enter tags</small>
                    @enderror
                </div>
            
                <!-- Company Logo -->
                <div class="mb-3">
                    <label for="companyLogo" class="form-label">Company Logo</label>
                    <input type="file" name="logo" class="form-control" id="companyLogo">
                </div>
            
                <!-- Job Description -->
                <div class="mb-3">
                    <label for="jobDescription" class="form-label">Job Description</label>
                    <textarea class="form-control" name="description" value="{{ old('description') }}" id="jobDescription" rows="4" placeholder="Include tasks, requirements, salary, etc"></textarea>
                    @error('description')
                        <small class="text-danger">Please Enter description</small>
                    @enderror
                </div>
            
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg form-control">Create Gig</button>
            </form>
            
            <!-- End Form -->
            
          </div>
          <!-- End Card Body -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Container -->
      <div class="py-5"></div>

      

</x-layout>