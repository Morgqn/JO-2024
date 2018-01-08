<!--script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">


</script-->
<link href="style.css/Inscription.css" rel="stylesheet">
<link rel="stylesheet" href="css/popupmodal.css" >
<script src="JS_JO/popupmodal-min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css/backtotop.css">
<script src="buttonToTop.js"></script>



<form class="modal multi-step" id="demo-modal-3" method="POST" action="index.php" enctype="multipart/form-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title step-1" data-step="1">Create Account</h4>
                <h4 class="modal-title step-2" data-step="2">Informations</h4>
                <h4 class="modal-title step-3" data-step="3">More Informations</h4>
                <h4 class="modal-title step-4" data-step="4">Avatar</h4>
                <div class="m-progress">
                    <div class="m-progress-bar-wrapper">
                        <div class="m-progress-bar">
                        </div>
                    </div>
                    <div class="m-progress-stats">
                        <span class="m-progress-current">
                        </span> /
                        <span class="m-progress-total">
                        </span>
                    </div>
                    <div class="m-progress-complete">
                        Completed
                    </div>
                </div>
            </div>
            <center>
                <div class="modal-body step-1" data-step="1">



                    <p> <img src="img/tooltip1.png" data-toggle="tooltip" title="First name must be between 2-25 char!" height=30 style="right: 26px;
                    position: absolute;
                    top: 40px;"></img>
                        <img src="img/tooltip1.png" data-toggle="tooltip" title="Last name must be between 2-25 char!" height=30 style="right: 26px;
                    position: absolute;
                    top: 137px;"></img>

                        <input class="fInput" placeholder="First name..." id="surname" name="firstName" onblur="formatSurname(this)"> </p>
                    <p><input class="fInput" placeholder="Last name..." id="name" name="lastName" onblur="formatName(this)"></p>
                    <p>
                        <select class="fSelect" id="selectGender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></p>
                </div>
            </center>
            <div class="modal-body step-2" data-step="2">
                <p> <img src="img/tooltip1.png" data-toggle="tooltip" title="Type a real email" height=30 style="right: 26px;
                    position: absolute;
                    top: 59px;"></img>
                    <img src="img/tooltip1.png" data-toggle="tooltip" title="Your pass need at least 1 cap and 1 number" height=30 style="right: 26px;
                    position: absolute;
                    top: 157px;"></img>

                    <p><input class="fInput" type="mail" placeholder="Email" id="mail" onblur="isEmail(this)" name="email"></p>
                    <!--p><input class="fInput" placeholder="Phone" id="phone" onblur="isPhone(this)" name="phone"></p-->
                    <p><input class="fInput" type="password" placeholder="Password..." name="mdp" id="pass" onblur="isPass(this)"></p>
                    <p><input class="fInput" type="password" placeholder="Confirm Password..." name="mdpc" id="confirmpass" onblur="confirmPass()" value=""></p>
            </div>
            <div class="modal-body step-3" data-step="3">
                <img src="img/tooltip1.png" data-toggle="tooltip" title="Your age should be between 5 and 125" height=30 style="right: 26px;
                    position: absolute;
                    top: 218px;"></img>
                <p>
                    <center>
                        <h>Birth Date</h>
                    </center><input type="date" class="fInput" placeholder="dd" id="date" name="birthDate" onblur="isDate(this)"></p>
                <p>
                    <center>
                        <h>Your Age</h>
                    </center><input type="number" class="fInput" placeholder="Age" name="age" id="ageI" onblur="isAge()"></p>
                <!--p><input class="fInput" placeholder="Username..." name="userame" id="username" onblur="isUsername(this)"></p-->
            </div>
            <div class="modal-body step-4" data-step="4">
                <p><input type="file" class="fInput" name="avatar"></p>

            </div>
            <div class="modal-footer">

                <button style="left: 110px; position: absolute;" type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEventB('#demo-modal-3', 1)">Back</button>
                <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent1('#demo-modal-3', 2)">Continue</button>
                <button style="left: 110px !important; position: absolute;" type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEventB('#demo-modal-3', 2)">Back</button>
                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent2('#demo-modal-3', 3)">Continue</button>
                <button type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEvent3('#demo-modal-3', 4)">Continue</button>
                <button style="left: 110px; position: absolute;" type="button" class="btn btn-primary step step-4" data-step="4" onclick="sendEventB('#demo-modal-3', 3)">Back</button>
                <button type="Submit" class="btn btn-primary step step-4" data-step="4" name="inscription">Submit</button>
                <button style="left: 12px; position: absolute; background-color: grey; opacity: 0.5;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</form>

<script src="multi-step-modal.js"></script>
<script src="JS_JO/inscription.js"></script>

<script>
    sendEvent1 = function(sel, step) {
        if (verifFirstPage(this) === true) {
            $(sel).trigger('next.m.' + step);
        }
    }

    sendEvent2 = function(sel, step) {
        if (verifSecondPage(this) === true) {
            $(sel).trigger('next.m.' + step);
        }
    }

    sendEvent3 = function(sel, step) {
        if (verifThirdPage(this) === true) {
            $(sel).trigger('next.m.' + step);
        }
    }    
    // Event for back button //
    
    sendEventB = function(sel, step) {
            $(sel).trigger('next.m.' + step);
    }

</script>


<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
