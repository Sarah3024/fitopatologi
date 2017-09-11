            <div class="box-header with-border">
              <h3 class="box-title">Photo</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="picture" class="col-sm-3 control-label">Biakan</label>
              <div class="col-sm-8">
                  <div id="biakan-photo-inputs"><input type="file" accept="image/*" class="fungi-biakan input-biakan-photo" name="biakan_photo[]" multiple></div>
                  <a  onclick="addBiakanPhoto(event)" id="add-more-biakan-photo" class="btn btn-primary btn-small">add more</a>

              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Micrograph</label>
              <div class="col-sm-8">
                  <div id="micrograph-photo-inputs"><input type="file" accept="image/*" class="fungi-biakan input-micrograph-photo" name="micrograph_photo[]" multiple></div>
                  <a onclick="addMicrographPhoto(event)" id="add-more-micrograph-photo" class="btn btn-primary btn-small">add more</a>
              </div>
            </div>

            <!-- <div  class="form-group{{ $errors->has('reference') ? ' has-error' : '' }}"> -->
             <!--form-group{{ URL::to('upload') }}-->
              <!-- <label for="picture" class="col-md-2 col-md-offset-1" style="text-align:left">Select Image to Update</label>
              <div class="col-md-8">
                  <a class="add_field_button  col-md-offset-10">Add More Fields</a>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
              </div>
            </div> -->
<script>

// When the button got clicked...
var addBiakanPhoto =  function (event) {


  var fileInput1 = document.querySelector('.input-biakan-photo')

  // Prevent the default action, which would be
  // the form submission for a button
  event.preventDefault()

  // Create a clone of the file input (you could also
  // create a new one from scrath, but then you'd
  // have to manually add the attributes and all...)
  var newFileInput = fileInput1.cloneNode();
  newFileInput.value = "";

  // Insert the clone right after the original (this
  // can only be done inderectly)
  fileInput1.parentNode.insertBefore(
  	newFileInput,
    fileInput1.nextSibling
  )

  // Set the file input reference to the clone, so
  // that the next input will be added after the
  // new input
  fileInput1 = newFileInput
}

var addMicrographPhoto =  function (event) {


  var fileInput1 = document.querySelector('.input-micrograph-photo')

  // Prevent the default action, which would be
  // the form submission for a button
  event.preventDefault()

  // Create a clone of the file input (you could also
  // create a new one from scrath, but then you'd
  // have to manually add the attributes and all...)
  var newFileInput = fileInput1.cloneNode();
  newFileInput.value = "";

  // Insert the clone right after the original (this
  // can only be done inderectly)
  fileInput1.parentNode.insertBefore(
  	newFileInput,
    fileInput1.nextSibling
  )

  // Set the file input reference to the clone, so
  // that the next input will be added after the
  // new input
  fileInput1 = newFileInput
}


</script>
