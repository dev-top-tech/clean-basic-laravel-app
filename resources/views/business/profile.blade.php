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
                      <option selected value="default">Add Business Type</option>
                      <option value="product">Product</option>
                      <option value="service">Service</option>
                      <option value="equipment">Equipment</option>
                    </select>
                  </div>
          
                  <div class="form-group">
                      <label for="category_1">Category</label>
                      <div class="d-flex flex-row align-items-baseline">
                          <select class="custom-select" name="category_1">
                              <option selected value="default">Add Category Type</option>
                              <option value="category-item-1">Category Item 1</option>
                              <option value="category-item-2">Category Item 2</option>
                              <option value="category-item-3">Category Item 3</option>
                            </select>
                            <i class="fa-solid fa-plus" style="cursor: pointer; padding-left: 10px; "></i>
                      </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                        <button type="button" class="btn btn-secondary clear">Clear</button>
                    </div>
            </div>
    
            <div class="right-side w-50" style="padding-left: 20px;">
                <div class="form-group d-flex flex-row w-100">
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
                <div class="form-group d-flex flex-row w-100">
                    <div class="d-flex flex-column">
                        <label for="address">Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="address" name="address">
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column ml-3">
                        <label for="zip">Zip Code</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Zip Code" name="zip">
                        </div>
                    </div>

                    <div class="d-flex flex-column ml-3">
                        <label for="state">State</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="State" name="state">
                        </div>
                    </div>
                </div>

                <div class="form-group d-flex flex-row w-100">
                    <div class="d-flex flex-column">
                        <label for="country">Country</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Country" name="country" >
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column ml-3">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <input type="tel" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                </div>

                <div class="form-group d-flex flex-row w-100">
                    <div class="d-flex flex-column w-100">
                        <label for="description">Description</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" placeholder="Description" name="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group d-flex flex-column w-100">
                    <h5>Hours</h5>
                    <div class="d-flex flex-column w-100 mb-3">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Monday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="monday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="monday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Tuesday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="tuesday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="tuesday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Wednesday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="wednesday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="wednesday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Thursday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="thursday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="thursday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Friday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="friday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="friday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Saturday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="saturday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="saturday_end_time">
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <label for="description" class="font-weight-bold" style="font-size: 16px;">Sunday</label>
                        <div class="input-group">
                            <div class="d-flex flex-column mb-3" style="width: 45%;">
                                <label for="">Start Time</label>
                                <input type="time" class="form-control" placeholder="Start Time" name="sunday_start_time">
                            </div>
                            <div class="d-flex flex-column w-40 ml-2" style="width: 45%;">
                                <label for="">End Time</label>
                                <input type="time" class="form-control" placeholder="End Time" name="sunday_end_time">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>   
      </form>
</div>
@endsection

@section("scripts")
    $(".clear").click(function(){
        $("input").each(function(){
            $(this).val("");
        });  
        $("textarea").each(function(){
            $(this).val("");
        }); 
        $("select").each(function(){
            $(this).val("default");
        });  
    });
@endsection