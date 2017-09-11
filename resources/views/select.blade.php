  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $(document).on('change','.states',function(){
                    console.log('{!!URL::to('/add-prov')!!}');

                    var id_state=$(this).val();
                    console.log(id_state);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-prov')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_state},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Province--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_province+'">'+data[i].name_province+'</option>';
                            }
                            console.log(op);
                            $('.prov').html(" ");
                            $('.prov').append(op);
                        },
                        error:function(){

                        }
                     });
                });

                $(document).on('change','.prov',function(){
                    console.log('{!!URL::to('/add-city')!!}');

                    var id_province=$(this).val();
                    console.log(id_province);
                    var div=$(this).parent();
                    console.log(id_province);

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-city')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_province},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a City--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_city+'">'+data[i].name_city+'</option>';
                            }
                            console.log(op);
                            $('.city').html(" ");
                            $('.city').append(op);
                        },
                        error:function(){

                        }
                     });
                });
                $(document).on('change','.city',function(){
                    console.log('{!!URL::to('/add-district')!!}');

                    var id_city=$(this).val();
                    console.log(id_city);
                    var div=$(this).parent();
                    console.log(id_city);

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-district')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_city},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a District--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_district+'">'+data[i].name_district+'</option>';
                            }
                            console.log(op);
                            $('.district').html(" ");
                            $('.district').append(op);
                        },
                        error:function(){

                        }
                     });
                });
            });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">

  var get_division= function(){

    op="";

     $.ajax({
        type:'get',
        url:'{!!URL::to('/add-divisi')!!}',
        data:{},
        success:function(data){
            console.log('success');

            console.log(data);
           op+='<option value="0" selected="disabled">--Choose a Division--</option>';
            for(var i=0;i<data.length;i++){
                op+='<option value="'+data[i].id_divisi+'">'+data[i].name_divisi+'</option>';
            }
            $('.divisi').html(" ");
            $('.divisi').append(op);
        },
        error:function(){

        }
     });
  }


            $(document).ready(function(){


              get_division();

                $(document).on('change','.divisi',function(){
                    console.log("hmm its change");

                    var id=$(this).val();
                    console.log(id);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-findclass')!!}',
                        data:{'id':id},
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Class--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_class+'">'+data[i].name_class+'</option>';
                            }
                            $('.class').html(" ");
                            $('.class').append(op);
                        },
                        error:function(){

                        }
                     }); 
                });

                $(document).on('change','.class',function(){
                    console.log("hmm its change");

                    var id=$(this).val();
                    console.log(id);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-ordo')!!}',
                        data:{'id':id},
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Ordo--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_ordo+'">'+data[i].name_ordo+'</option>';
                            }
                            $('.ordo').html(" ");
                            $('.ordo').append(op);
                        },
                        error:function(){

                        }
                     }); 
                });

                $(document).on('change','.ordo',function(){
                    console.log("hmm its change");

                    var id=$(this).val();
                    console.log(id);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-family')!!}',
                        data:{'id':id},
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Family--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_family+'">'+data[i].name_family+'</option>';
                            }
                            $('.family').html(" ");
                            $('.family').append(op);
                        },
                        error:function(){

                        }
                     }); 
                });

                $(document).on('change','.family',function(){
                    console.log("hmm its change");

                    var id=$(this).val();
                    console.log(id);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-genus')!!}',
                        data:{'id':id},
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Genus--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_genus+'">'+data[i].name_genus+'</option>';
                            }
                            $('.genus').html(" ");
                            $('.genus').append(op);
                        },
                        error:function(){

                        }
                     }); 
                });
            });
  </script>