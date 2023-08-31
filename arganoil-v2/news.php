<?php require_once("app/models/news.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="app/views/assets/images/image-nav/logo.ico" type="image/x-icon">

    
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your custom script -->
    <script>
   function showModal() {
    $('#delayedModal').modal('show');
}

setInterval(function() {
    if (document.cookie.indexOf('modalShown=') === -1) {
        showModal();
        document.cookie = 'modalShown=true; expires=Thu, 01 Jan 2099 00:00:00 UTC; path=/';
    }
}, 5000); // 5000 milliseconds = 5 seconds

</script>

       <!-- ... (votre en-tête de page) ... -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- ... (votre en-tête de page) ... -->
    <style>
        /* Centrer le modal verticalement */
        section .modal .modal-vertical-center {
            display: flex;
            align-items: center;
            min-height: 100vh;
        }

        /* Centrer le modal horizontalement */
        section .modal .modal-horizontal-center {
            display: flex;
            justify-content: center;
            width: 100%;
        }
         section .modal .modal-content {
           background-color: #8bc34a;
           box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
           border-radius: 12px;
         
        }

        /* Personnalisez les styles de boutons */
        section .modal .modal-content   .btn-custom {
            color: #ffffff; /* Couleur du texte */
            background-color: #4caf50; /* Couleur de fond */
            border: none;
        }

        section .modal .modal-content .btn-custom:hover {
            background-color: #357a38; /* Couleur de fond au survol */
        }
        section .modal .modal-content .modal-header .modal-title {
            font-family: "Arial", sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
              /* Personnalisez le style du champ de saisie */
        section .modal .modal-content .modal-body .form-control {
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        /* Style pour le champ de saisie lorsqu'il est en focus */
        section .modal .modal-content .modal-body .form-control:focus {
            border-color: #FFD700; /* Couleur dorée */
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.6); /* Couleur dorée plus claire */
        }
       
        section .modal .modal-content .modal-body .lab {
            font-size: 18px;
            color: #555555; /* Couleur du texte du paragraphe */
            margin-bottom: 15px;
       }
       section .modal .modal-content .modal-footer #image {
      width: 65px;
      height: 65px;
     
        }
     
    </style>
</head>
<body>
   <section>
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="delayedModal">
        <div class="modal-dialog modal-vertical-center modal-horizontal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" data-i18n="SignUpforUpdates">Sign Up for Updates</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <label class="lab" data-i18n="emailNewsletter">Enter your email to receive updates:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        <?php if (!empty($valErr)) { ?>
                            <div class="text-danger"><?php echo $valErr; ?></div>
                        <?php } ?>
                </div>
                <div class="modal-footer">
                    <img src="logo.png" id="image" style="float: left; margin-right: 230px;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"data-i18n="CloseNewsletter">Close</button>
                    <button type="submit" name="Submit2" class="btn btn-custom" data-i18n="SubmitNewsletter">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </section>
</body>
</html>
