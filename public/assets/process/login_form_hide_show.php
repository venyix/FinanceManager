<?php
    // check to see if a user is logged in
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']['valid']) {
            
            ?>
            <!-- hide the login form if a user is logged in -->
            <script type="text/javascript">
                $(document).ready(function() { 
                    $('#loginBox').hide();
                    $('div#blurb').show();
                    $('#logoutBox').show();
                });
            </script>
            <?php
        } else {
            $loginHeader = "<span style='color:red;size:12px'>"
                    . "Bad login credentials</span>";
            ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#logoutBox').hide();
                    $('div#blurb').hide();
                    $('#loginBox').show();
                });
            </script>
            <?php
        }
    } else {
        $loginHeader = "Already have an account?";
        
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('div#blurb').hide();
                $('#logoutBox').hide();
                $('#loginBox').show();
            });
        </script>
        <?php
    }
?>