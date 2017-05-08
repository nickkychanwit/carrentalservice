<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="{{asset('css/bulma.css')}}" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">
      <script src="http://bulma.io/javascript/jquery-2.2.0.min.js"></script>
      <script src="http://bulma.io/javascript/clipboard.min.js"></script>
      <script src="http://bulma.io/javascript/bulma.js"></script>

        <title>Carrental Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                /*font-weight: 100;
                height: 100vh;*/
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content2 {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .box{
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              -ms-border-radius: 4px;
              -o-border-radius: 4px;
              border-radius: 4px;
              -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -ms-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -o-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              background: #fff;
              margin-top: 20px;
              margin-left: 20px;
              margin-right: 20px;
              margin-bottom: 20px;
              font-size: 15px;
              font-weight: 700;
              text-align: center;
              position relative;
              cusor: pointer;
              width: 200px;
              height: 215px;
              padding: 20px 15px;
              right: 10px;

            }

            .box:hover{
              -webkit-box-shadow: 0 4px 10px rgba(0,0,0,0.4);
              -moz-box-shadow; 0 4px 10px rgba(0,0,0,0.4);
              -o-box-shadow; 0 4px 10px rgba(0,0,0,0.4);
              box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            }
            .boxhead{
              font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content2">
                <div class="title m-b-md">
                    Voucher
                </div>

                <div class="links">
                  @if(Auth::check())
                   <a href="http://carrentalservice.dev/edit">Edit User</a>
                    @if(Auth::user()->rule!="Admin")<a href="http://carrentalservice.dev/rental">Reserve</a>@endif
                    @if(Auth::user()->rule=="Admin")  <a href="http://carrentalservice.dev/receive">Receive</a>
                   <a href="http://carrentalservice.dev/return">Return</a>
                       <a href="http://carrentalservice.dev/bookingall">data booking</a>

                       @endif
                    @if(Auth::user()->rule=="Customer")  <a href="https://carrentalservice.dev/voucher">Voucher</a>@endif

                  @else <a href="http://carrentalservice.dev/rental">Reserve</a>
                  @endif
                    <a href="http://carrentalservice.dev/promotion">Promotion</a>
                  <a href="https://carrentalservice.dev/contact-us">Contact Us</a>
                    <a href="https://github.com/nickkychanwit/carrentalservice">GitHub</a>
                </div>
            </div>



          </div>

          <div class=" column is-11 ">
            <div "content">
              <div class="m-b-md">
             <p>
               <a class="button is-danger  is-large modal-button" data-target="#modal-ter"><span><i class="fa fa-plus" aria-hidden="true"></i> Create Voucher</span></a>
             </p>
           </div>
           </div>

         <div id="modal-ter" class="modal">
           <div class="" id="vue-add-promotion">
         <div class="modal-background"></div>
         <div class="modal-card" >
           <header class="modal-card-head">
            <p class="modal-card-title">Create Voucher</p>
            <button class="delete"></button>
           </header>
           <section class="modal-card-body">
            <div class="content">
              <form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">
                 <div class="form-group">
                   <table>
                     <tr>
                       <th style="width:180px"><label for="name">Voucher Name</label></th>
                       <td><input type="text" class="form-control ; input " name="name"  id="name" placeholder="" required>  </td>

                     </tr>
                   </table>
                 </div>

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
                       <th style="width:180px"><label for="total">Point Cosume</label></th>
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

             <button class="button is-primary btn-fill" type="submit">Add Voucher</button>

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
         <div class="message is-grey">
           <div class="message-header">
             Vouchers
           </div>
         <div class="message-body" id="vue-app">

          <div class="flex-center position-ref full-height">
          <div class="box">
            <p class="boxhead">500 Discount Voucher</p>

            <br>
            Discount 500 Bath<br>
            Consume 10 point<br>
            <br>
            <button class="button is-primary btn-fill" type="button">Change</button>
          </div>

          </div>
          </div>
        </div>
        </div>
    </body>
</html>
