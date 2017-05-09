@extends('layouts.app')
@section('content')




       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px ; margin-left:70px">Create Promotion</button>

  <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="font-weight:bold;">Create Promotion</h4>
              </div>
              <div class="modal-body">
              <div class="" id="vue-add-promotion">
                <form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">
                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><label for="name">Promotion Name</label></th>
                         <td><input type="text" class="form-control ; input " name="name"  id="name" placeholder="" required>  </td>

                       </tr>
                     </table>
                   </div>
                   <!-- <div class="form-group">
                           <label for="img">Image</label>
                           <input type="file" class="form-control"  id="img" name="img"  v-on:change="onFileChange" accept="image/*" required>
                   </div> -->
                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><div v-if="!image">
                             <label>Select an image</label>
                             </div>
                         <div v-else>
                             <img :src="image" / width="200" height="200">
                             <button @click="removeImage" class="button">Remove image</button>
                         </div></th>
                         <td><input name="image" id="image" type="file" class="form-control" @change="onFileChange"></td>
                       </tr>


                       </table>
                   </div>
                   <div class="form-group">
                     <table>
                       <tr>
                           <th style="width:200px"><label for="startdate">Start Date</label></th>
                           <td><input type="date" class="form-control ; input " name="startdate" id="startdate" placeholder="" required></td>
                       </tr>
                     </table>
                   </div>
                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><label for="expdate">Expiration Date</label></th>
                         <td><input type="date" class="form-control ; input " name="expdate" id="expdate"  placeholder="" required></td>
                       </tr>

                     </table>
                   </div>
                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><label for="type">Discount Type</label></th>
                         <td ><select  class="form-control ; input " name="type"  id="type" required>
                              <option value="" disabled selected>Choose discount type</option>
                              <option value="percent" >Percent</option>
                              <option value="baht" >Baht</option>
                            </select></td>
                       </tr>
                     </table>

                   </div>

                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><label for="total">Discount</label></th>
                         <td><input type="text" class="form-control ; input " name="total" id="total" placeholder="" required></td>
                       </tr>
                     </table>

                   </div>
                   <div class="form-group">
                     <table>
                       <tr>
                         <th style="width:200px"><label for="descript">Description</label></th>
                         <td> <textarea  class="form-control " rows="5" col="400" name="descript" id="descript" placeholder="----description---" > </textarea></td>
                       </tr>
                     </table>


                   </div>

               <button class="btn is-primary btn-fill" type="submit">Add Promotions</button>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
             <!-- <footer class="modal-card-foot">
               <button class="btn btn-success btn-fill" type="submit">Add Promotions</button>
              <button class="button btn-primary" type="submit">Submit</button>
              <a class="button">Cancel</a>
             </footer> -->
               </section>
               </form>
             </div>

              </div>

            </div>

          </div>
        </div>


        <div id="modal-ter" class="modal">
          <div class="" id="vue-add-promotion">
        <div class="modal-background"></div>
        <div class="modal-card" >
          <header class="modal-card-head">
           <p class="modal-card-title">Create Promotion</p>
           <button class="delete"></button>
          </header>
          <section class="modal-card-body">
           <div class="content">
             <form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="name">Promotion Name</label></th>
                      <td><input type="text" class="form-control ; input " name="name"  id="name" placeholder="" required>  </td>

                    </tr>
                  </table>
                </div>
                <!-- <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control"  id="img" name="img"  v-on:change="onFileChange" accept="image/*" required>
                </div> -->
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><div v-if="!image">
                          <label>Select an image</label>
                          </div>
                      <div v-else>
                          <img :src="image" / width="200" height="200">
                          <button @click="removeImage" class="button">Remove image</button>
                      </div></th>
                      <td><input name="image" id="image" type="file" class="form-control" @change="onFileChange"></td>
                    </tr>


                    </table>
                </div>
                <div class="form-group">
                  <table>
                    <tr>
                        <th style="width:180px"><label for="startdate">Start Date</label></th>
                        <td><input type="date" class="form-control ; input " name="startdate" id="startdate" placeholder="" required></td>
                    </tr>
                  </table>
                </div>
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="expdate">Exp Date</label></th>
                      <td><input type="date" class="form-control ; input " name="expdate" id="expdate"  placeholder="" required></td>
                    </tr>

                  </table>
                </div>
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="type">Discount Type</label></th>
                      <td ><select  class="form-control ; input " name="type"  id="type" required>
                           <option value="" disabled selected>Choose discount type</option>
                           <option value="percent" >Percent</option>
                           <option value="baht" >Baht</option>
                         </select></td>
                    </tr>
                  </table>

                </div>

                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="total">Discount</label></th>
                      <td><input type="text" class="form-control ; input " name="total" id="total" placeholder="" required></td>
                    </tr>
                  </table>

                </div>
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:600px"><label for="descript">Description</label></th>
                      <td> <textarea  class="form-control " rows="7" cols="60" name="descript" id="descript" placeholder="----description---" > </textarea></td>
                    </tr>
                  </table>
                </div>

            <button class="button is-primary btn-fill" type="submit">Add Promotions</button>
            </section>
            </div>
            </form>

          </div>



</div>
</div>


        <div class="card">

          <div style="background-color:#eeeeee ; width:1200px ;margin-bottom:10px ; margin-left:70px" id="vue-app">


              <table class="table">
                <thead class="thead-inverse">
                  <tr>
                    <th style="width:100px"><abbr>ID</abbr></th>
                    <th style="width:210px"><abbr>Promotion img</abbr></th>
                    <th style="width:150px"><abbr>Promotion name</abbr></th>
                    <th style="width:110px"><abbr>Start date</abbr></th>
                    <th style="width:130px"><abbr>Expiration date</abbr></th>
                    <th style="width:60px"><abbr>Discount</abbr></th>
                    <th style="width:150px"><abbr>Discount Type</abbr></th>
                    <th ><abbr>Description</abbr></th>

                  </tr>
                </thead>
                <tbody>
                                <tr v-for="d in data">
                                    <td>@{{ d.id }}</td>
                                    <td><img :src="'/images/promotions/' + d.img" height="150" width="200"></td>
                                    <td>@{{ d.name }}</td>
                                    <td>@{{ d.startDate }}</td>
                                    <td>@{{ d.expDate }}</td>
                                    <td>@{{ d.dc }}</td>
                                    <td>@{{ d.dcType }}</td>
                                    <td>@{{ d.descript }}</td>
                                </tr>
                              </tbody>
              </table>
            </div>
          </div>



        <!-- <div class="card">
          <div class="card-header">
            Featured
          </div>
        <div class="message-body" id="vue-app">

          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th style="width:100px"><abbr>ID</abbr></th>
                <th style="width:210px"><abbr>Promotion img</abbr></th>
                <th style="width:150px"><abbr>Promotion name</abbr></th>
                <th style="width:110px"><abbr>Start date</abbr></th>
                <th style="width:130px"><abbr>Expiration date</abbr></th>
                <th style="width:60px"><abbr>Discount</abbr></th>
                <th style="width:150px"><abbr>Discount Type</abbr></th>
                <th ><abbr>Description</abbr></th>

              </tr>
            </thead>
            <tbody>
                            <tr v-for="d in data">
                                <td>@{{ d.id }}</td>
                                <td><img :src="'/images/promotions/' + d.img" height="150" width="200"></td>
                                <td>@{{ d.name }}</td>
                                <td>@{{ d.startDate }}</td>
                                <td>@{{ d.expDate }}</td>
                                <td>@{{ d.dc }}</td>
                                <td>@{{ d.dcType }}</td>
                                <td>@{{ d.descript }}</td>
                            </tr>
                          </tbody>
          </table>
        </div>

    </div>
      </div>
 -->


@endsection

@section('script')
    <script>

    var vm = new Vue({
        el: '#vue-app',
        data:{
          'data':[]
        },

        methods:{
          getPromotions: function(){
            axios.get('/api/promotions', {


            }).then(function (response) {
                console.log(response.data.data);
                if(response.data.success) vm.data = response.data.data;

            }).catch(function (error) {

                alert('Error (see console log)');
                console.log(error);

            });
          }

        }
    });

    var vm2 = new Vue({
      el: '#vue-add-promotion',
      data: {
          'image':''

      },
        mounted: function(){
          vm.getPromotions();
        },
      methods: {
             onFileChange(e) {
               var files = e.target.files || e.dataTransfer.files;
               if (!files.length)
                 return;
               this.createImage(files[0]);
             },
             createImage(file) {
               var image = new Image();
               var reader = new FileReader();
               var vm4 = this;
               reader.onload = (e) => {
                 vm4.image = e.target.result;
               };
               reader.readAsDataURL(file);
             },
             removeImage: function (e) {
               this.image = '';
             },
             submitForm :function(){
                 var form = document.querySelector('#addForm');
                 var formdata = new FormData(form);
                 console.log(formdata);
                 jQuery.ajax({
                url: '/api/promotions',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data){
                  vm.getPromotions();
                  alert(data);
                  document.getElementById("addForm").reset();
                }
              });
             }
      }
  });
    </script>
@endsection
