@extends('layouts.app')

@section('content')



<body style="background-color: #f2f2f2">

  <div class="container" style=" width: 650px; height: 50%; margin-top: 50px; font-family: Raleway; border-color: #50d8af; border-width: 2px; background-color: #fff; border-radius: 15px">
  <div class="col-md-12">
  <br>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- homeyLink -->
  <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0173509626327009"
     data-ad-slot="9233259299"
     data-ad-format="link">
  </ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  <br>

  <div class="">
  
    <fieldset>
      
      <!-- Form Name -->
      <legend style="font-size: 35px; text-align: left;" >
        {{-- <h1 style="font-size: 16px; margin-top: -20px">
          <a href="../daftarkosku.html">Beranda </a>
          <i class="fa fa-angle-double-right"></i>
          <a style="color: #50d8af;" href="#">Profil Akun</a>
        </h1> --}}


      
        <!-- <a href="../beranda.html"><i class="fa fa-home" style="font-size:35px;"></i></a> -->
        <span style="margin-left: 200px;"><b>Profil Akun</span></b></span>
        <a id="profile_edit"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i></a>
        
      </legend>
      <!-- <span class="login100-form-title" ><b>Sign Up</b></span>
      <hr> -->
    </fieldset>
      <!-- Text input-->
    <fieldset> 
      <div class="form-group">
        <label class="col-md-4 control-label">Nama Lengkap</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input disabled name="first_name" id="profile_name" value="{{Auth::user()->name}}" placeholder="Nama yang udah diisi pas sign up" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <!-- <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
          </div>
        </div>
      </div> -->
      
    
      <!-- Text input-->
      
      <!-- <div class="form-group">
        <label class="col-md-4 control-label">Phone #</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
          </div>
        </div>
      </div> -->
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Alamat</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input disabled name="address" id="profile_alamat" value="{{Auth::user()->alamat}}" placeholder="Alamat yang udah diisi pas sign up" class="form-control" type="text">
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      <input id="profile_id" value="{{Auth::user()->id}}" hidden>
      <div class="form-group">
        <label class="col-md-4 control-label">Nomor Telepon</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input disabled name="phone" id="profile_telepon" value="{{Auth::user()->telepon}}" placeholder="Nomor telepon yang udah diisi pas sign up" class="form-control" type="text">
          </div>
        </div>
      </div>


      <!-- Text input-->
      
      <!-- <div class="form-group">
        <label class="col-md-4 control-label">City</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" placeholder="city" class="form-control"  type="text">
          </div>
        </div>
      </div> -->
      
      <!-- Select Basic -->
      
     <!--  <div class="form-group">
        <label class="col-md-4 control-label">State</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your state</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option >Arizona</option>
              <option >Arkansas</option>
              <option >California</option>
              <option >Colorado</option>
              <option >Connecticut</option>
              <option >Delaware</option>
              <option >District of Columbia</option>
              <option> Florida</option>
              <option >Georgia</option>
              <option >Hawaii</option>
              <option >daho</option>
              <option >Illinois</option>
              <option >Indiana</option>
              <option >Iowa</option>
              <option> Kansas</option>
              <option >Kentucky</option>
              <option >Louisiana</option>
              <option>Maine</option>
              <option >Maryland</option>
              <option> Mass</option>
              <option >Michigan</option>
              <option >Minnesota</option>
              <option>Mississippi</option>
              <option>Missouri</option>
              <option>Montana</option>
              <option>Nebraska</option>
              <option>Nevada</option>
              <option>New Hampshire</option>
              <option>New Jersey</option>
              <option>New Mexico</option>
              <option>New York</option>
              <option>North Carolina</option>
              <option>North Dakota</option>
              <option>Ohio</option>
              <option>Oklahoma</option>
              <option>Oregon</option>
              <option>Pennsylvania</option>
              <option>Rhode Island</option>
              <option>South Carolina</option>
              <option>South Dakota</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option> Uttah</option>
              <option>Vermont</option>
              <option>Virginia</option>
              <option >Washington</option>
              <option >West Virginia</option>
              <option>Wisconsin</option>
              <option >Wyoming</option>
            </select>
          </div>
        </div>
      </div>
       -->
      <!-- Text input-->
      
      <!-- <div class="form-group">
        <label class="col-md-4 control-label">Zip Code</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
          </div>
        </div>
      </div> -->
      
        <!-- Text area -->
      
      <!-- <div class="form-group">
        <label class="col-md-4 control-label">About </label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" placeholder="About "></textarea>
          </div>
        </div>
      </div> -->
       

        <!-- <legend> Account information </legend> -->
        
        <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" value="{{Auth::user()->email}}" placeholder="Alamat E-Mail yang udah diisi pas sign up" class="form-control"  type="text" disabled>
          </div>
        </div>
      </div>
      
        
    <button id="profile_submit" class="btn btn-success" style="display: none">Submit</button>
    <button id="profile_cancel" class="btn btn-danger" style="display: none">Cancel</button>
    <p id="profile_response_msg" style="display: none"></p>
    <br><br>
        <!-- <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                   Confirm Password
                </label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password" 
                       name="confirmPassword" data-match="#confirmPassword" data-minLength="5"
                       data-match-error="some error 2"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
             </div>
             </div>
        </div> -->
     
  
      <!-- Button -->
      <!-- <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-7">
          <button type="submit" class="btn-get-started" style="margin-left: 115px">Submit</button>
        </div>
      </div> -->

      <!-- <div style="text-align: center; ">
        <legend style="font-size: 14px; padding-bottom: 10px; margin-top: -15px">Sudah punya akun pemilik kos? <a href="login.html" class="" ><b>Masuk sekarang</b></a></legend>
      </div> -->
    </fieldset>

  </div>
</div>



<div class="col-lg-3">
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive hotel -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0173509626327009"
     data-ad-slot="7944464098"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>

</div>

<div class="row" align="left">
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive hotel -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0173509626327009"
     data-ad-slot="7944464098"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
</div>
<!-- /.container --> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

        <script src="js/index.js"></script>
<script type="text/javascript">
 
   $(document).ready(function() {
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Mohon masukkan nama lengkap Anda'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Mohon masukkan nama pengguna Anda'
                    }
                }
            },
           
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukkan nomor telepon Anda'
                    },
                    // phone: {
                    //     country: 'US',
                    //     message: 'Please supply a vaild phone number with area code'
                    // }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Mohon masukkan alamat tempat tinggal Anda'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
    comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                    }
                 }, 
   email: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukkan alamat email Anda'
                    },
                    emailAddress: {
                        message: 'Mohon masukkan alamat email Anda yang valid'
                    }
                }
            },
          
  password: {
            validators: {

                stringLength: {
                        min: 8,
                        message:'Mohon masukkan sedikitnya 8 karakter'
                },
            }
        },
        confirmPassword: {
            validators: {
                identical: {
                    field: 'password',
                    message: 'Kata sandi dan konfirmasi kata sandi tidak cocok'
                }
            }
         },
      
            
            }
        })
    
  
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


 
 </script>
</body>
@endsection