<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success" style="padding-left:100px;padding-right:150px;padding-top:10px;">
        <form enctype="multipart/form-data" class="form-horizontal" action="" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="box-body">


            @include('fungi_entri/form-add-fungi')
            @include('fungi_entri/form-add-location')
            @include('fungi_entri/form-add-substrat')
            @include('fungi_entri/form-add-species')
            @include('fungi_entri/form-add-isolator')
            @include('fungi_entri/form-add-raiser')
            @include('fungi_entri/form-add-storage')
            @include('fungi_entri/form-add-photo')
            @include('fungi_entri/form-add-updating')


            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
  </script>
@include('select')
</section>

<script>
                $(document).ready(function() {
                    var max_fields      = 5; //maximum input boxes allowed
                    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                    var add_button      = $(".add_field_button"); //Add button ID

                    var x = 1; //initlal text box count
                    $(add_button).click(function(e){ //on add input button click
                        e.preventDefault();
                        if(x < max_fields){ //max input box allowed
                            x++; //text box increment
                            $("#rm").remove();

                                $(wrapper).append('<div class="col-md-6"><input type="file" name="image'+x+'" id="inputgambar'+x+'" accept="image'+x+'/*" value=""/><input type="hidden" value="{{ csrf_token() }}" name="_token"><img src="http://placehold.it/200x200" id="showgambar'+x+'" style="width: 100%;height:100%;float:left;"/><a href="#" id="rm" class="remove_field">Remove</a></div><script type="text/javascript">function readURL(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$("#showgambar'+x+'").attr("src", e.target.result);}reader.readAsDataURL(input.files[0]);}}$("#inputgambar'+x+'").change(function () {readURL(this);})</' + 'script>'); //add input box
                            // $(wrapper).append('<div class="col-md-2 col-md-offset-2">')

                        }
                    });

                    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                        e.preventDefault(); $("#divs").remove(); x--;
                        $("#divs").remove(); x--;
                        $("#divs").remove(); x--;
                        $("#divs").remove(); x--;

                        })
                });
            </script>

<!--show image-->
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }
    $("#inputgambar").change(function () {
        readURL(this);
    });
    </script>
