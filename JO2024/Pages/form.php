<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">


</script>
<link href="style.css/Inscription.css" rel="stylesheet">

<form class="modal multi-step" id="demo-modal-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title step-1" data-step="1">Create Account</h4>
                <h4 class="modal-title step-2" data-step="2">More Informations</h4>
                <h4 class="modal-title step-3" data-step="3">Final Step</h4>
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
                    <p><input class="fInput" placeholder="First name..."></p>
                    <p><input class="fInput" placeholder="Last name..."></p>
                </div>
            </center>
            <div class="modal-body step-2" data-step="2">
                <p><input class="fInput" type="mail" placeholder="Email"></p>
                <p><input class="fInput" placeholder="Phone"></p>
            </div>
            <div class="modal-body step-3" data-step="3">
                <p><input type="date" class="fInput" placeholder="dd"></p>
                <p><input class="fInput" placeholder="Username..."></p>
                <p><input class="fInput" placeholder="Password..."></p>
            </div>
            <div class="modal-body step-4" data-step="4">
                <p><input type="file" class="fInput"></p>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Continue</button>
                <button type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 3)">Continue</button>
                <button type="button" class="btn btn-primary step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 4)">Continue</button>
                <button type="button" class="btn btn-primary step step-4" data-step="4" onclick="sendEvent('#demo-modal-3', 3)">Back</button>
                <button type="button" class="btn btn-primary step step-4" data-step="4">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</form>

<script src="multi-step-modal.js"></script>

<script>
    sendEvent = function(sel, step) {
        $(sel).trigger('next.m.' + step);
    }

</script>
