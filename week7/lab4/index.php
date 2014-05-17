<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
     <title>Access Page</title>
</head>
<body>
<!-- .......................... PHP section ................................ -->
    <?php
        $msg = '';
        if ( ! isset($_SESSION['validcode']) ) {
            $_SESSION['validcode'] = false;   
        }
        if ( Util::isPostRequest() ) {
            $checkcode = new Passcode();

            if ( $checkcode->isValidPasscode() ) {
                $_SESSION['validcode'] = true;
                Util::redirect('viewaddress');                   
            } else {                    
                $msg = 'Passcode is not valid.';
            }
        }
        if ( !empty($msg)) {
            echo '<p>', $msg, '</p>';
        }
    ?>
<!-- ....................................................................... -->
<!-- .......................... Main content ............................... -->
    <div id="loginModal" class="modal show" tabindex="-1" tabindex="-1"
             role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">x</button>
                    <h1 class="text-center">Address Book Login</h1>
                </div>
                <div class="modal-body clearfix">
                    <form name="mainform" action="#" method="post"
                        class="form col-md-12 center-block">
                        <div class="form-group">
                            <label for="code">Passcode</label>
                            <input type="password" name="passcode" id="code"
                                   class="form-control input-lg"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Submit" 
                                class="btn btn-primary btn-lg btn-block">Submit                                       
                            </button>
                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                       <p class="text-center">David Landi Lab4 Address Book using bootstrap for basic style and reponsive design</p>
                    </div>    
                
            
            </div>
        </div>
    </div>
<!-- ....................................................................... -->        
    <script src="js//jquery.js"></script>		 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>   
</body>
</html>
