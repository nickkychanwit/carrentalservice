@extends('layouts.master')

@section('content')
  <fieldset>
  <div id="register">
    <div id="legend">
      <legend class="">Edit</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" v-model="user" >
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge" v-model="email">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Telephone</label>
      <div class="controls">
        <input type="text" id="tel" name="tel" placeholder="" class="input-xlarge" v-model="telephone">
        <p class="help-block">Please provide your Telephone</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" v-model="pass">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" v-model="passcon"><h id="divCheckPasswordMatch"></h>
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" v-on:click="confirm()">Edit</button>
      </div>
    </div>
    </div>
  </fieldset>
@endsection

@section('script')
<script>
    var defaultmail="{{Auth::user()->email}}";
    var vjson = new Vue({

        el: '#register',
        data : {
          user: "{{Auth::user()->name}}",
          email: "{{Auth::user()->email}}",
          telephone : "{{Auth::user()->tel}}",
          pass:"",
          passcon:""
        },
        methods : {
            confirm : function(){
                if (this.pass!=this.passcon){
                    $("#divCheckPasswordMatch").html("Passwords do not match!");
                }
                else if (this.user!="" && this.email!="" && this.pass==this.passcon){
                    axios.put('http://wongklomnew.dev/api/singers/update', {
                    username: this.user,
                    password: this.pass,
                    email: this.email,
                    tel: this.telephone,
                    defaultmail
                    }).then(function (response) {
                        //console.log(response.data.data);
                        //alert(response.data.data);
                        vjson.user = '';
                        vjson.pass = '';
                        vjson.passcon = '';
                        vjson.email='';
                        vjson.telephone='';
                    }).catch(function (error) {
                        alert('Error (see console log)');
                        console.log(error);
                    });
                }
                else{
                  console.log(this.user);
                }
            }
        }
    });
</script>
@endsection
