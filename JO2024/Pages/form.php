



<!--script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">


</script-->
<link href="style.css/Inscription.css" rel="stylesheet">


<form class="modal multi-step" id="demo-modal-3" method="POST"  action="index.php" enctype="multipart/form-data">
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
                    <p><input class="fInput" placeholder="First name..." id="surname" name="firstName" onblur="formatSurname(this)"></p>
                    <p><input class="fInput" placeholder="Last name..." id="name" name="lastName" onblur="formatName(this)"></p>
                    <p>
                        <select class="fSelect" id="selectGender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></p>
                </div>
            </center>
            <div class="modal-body step-2" data-step="2">
                <p><input class="fInput" type="mail" placeholder="Email" id="mail" onblur="isEmail(this)" name="email"></p>
                <!--p><input class="fInput" placeholder="Phone" id="phone" onblur="isPhone(this)" name="phone"></p-->
            </div>
            <div class="modal-body step-3" data-step="3">
                <p><input type="date" class="fInput" placeholder="dd" id="date" name="birthDate" onblur="isDate(this)"></p>
                <p><input type="number" class="fInput" placeholder="age"  name="age"></p>
                <!--p><input class="fInput" placeholder="Username..." name="userame" id="username" onblur="isUsername(this)"></p-->
                <p><input class="fInput" placeholder="Password..." name="mdp" id="pass" onblur="isPass(this)"></p>
                <p><input class="fInput" placeholder="confirm Password..." name="mdpc"  onblur="isPass(this)"></p>
            </div>
            <div class="modal-body step-4" data-step="4" >
                <p><input type="file" class="fInput" name="avatar"></p>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent2('#demo-modal-3', 1)">Back</button>
                <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent1('#demo-modal-3', 2)">Continue</button>
                <button type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEvent3('#demo-modal-3', 2)">Back</button>
                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent2('#demo-modal-3', 3)">Continue</button>
                <button type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEvent3('#demo-modal-3', 4)">Continue</button>
                <button type="button" class="btn btn-primary step step-4" data-step="4" onclick="sendEvent3('#demo-modal-3', 3)">Back</button>
                <button type="Submit" class="btn btn-primary step step-4" data-step="4" name="inscription">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

</script>