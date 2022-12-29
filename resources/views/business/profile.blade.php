@extends("templates.base")

@section("content")
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; min-width: 100vw;">
    <form style="width: 80%;" method="POST">
        @csrf
        <div class="form-group w-100 d-block">
            <h2>Create Profile Page</h2>
        </div>

        <div class="d-flex flex-row">
            <div class="left-side w-50">
                <div class="form-group">
                    <label for="business_type">Add Business Type</label>
                  
                    <select class="custom-select" name="business_type">
                      <option selected>Add Business Type</option>
                      <option value="product">Product</option>
                      <option value="service">Service</option>
                      <option value="equipment">Equipment</option>
                    </select>
                  </div>
          
                  <div class="form-group">
                      <label for="category_1">Category</label>
                      <div class="d-flex flex-row align-items-baseline">
                          <select class="custom-select" name="category_1">
                              <option selected>Add Category Type</option>
                              <option value="category-item-1">Category Item 1</option>
                              <option value="category-item-2">Category Item 2</option>
                              <option value="category-item-3">Category Item 3</option>
                            </select>
                            <i class="fa-solid fa-plus" style="cursor: pointer; padding-left: 10px; "></i>
                      </div>
                 
                    </div>
            </div>
    
            <div class="right-side w-50" style="padding-left: 20px;">
                <div class="form-group d-flex flex-row">
                    <div class="d-flex flex-column">
                        <label for="business_name">Business Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Business Name">
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column ml-3">
                        <label for="website">Website</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                    </div>
                    
                </div>
    
            </div>
        </div>
    
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection