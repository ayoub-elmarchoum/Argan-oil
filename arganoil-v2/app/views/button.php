<button id="whatsappButton">
        <a href="https://api.whatsapp.com/send?phone=212600604387" class="fab fa-whatsapp">
           
        </a>
    </button>
    
    <script>
        document.getElementById("whatsappButton").addEventListener("click", function(event) {
            event.preventDefault();
            var phoneNumber = "212600604387";
            var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber;
            window.open(whatsappURL, '_blank');
        });
    </script>
        </div>

<style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        #content {
            flex: 1;
        }
        
        #whatsappButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: green;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        #whatsappButton a{
            color: white;
            text-decoration-line: none;
        }
    </style>
