<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>





    <script>
        document.getElementById("confirmButton").addEventListener("click", function () {
            // Code to handle "Yes" button click
            
            alert("Destination Cancled Successfully");
            // Close the modal
            var modal = new bootstrap.Modal(document.getElementById("popupModal"));
            modal.hide();
        });


        // document.addEventListener("DOMContentLoaded", function () {
        //     const confirmButtons = document.querySelectorAll(".confirm-button");

        //     confirmButtons.forEach(button => {
        //         button.addEventListener("click", function () {
        //             const destinationId = this.getAttribute("data-destination-id");
        //             removeDestination(destinationId);
        //         });
        //     });

        //     function removeDestination(destinationId) {
        //         const destination = document.querySelector(`#destination-${destination}`);
        //         if (destination) {
        //             destination.remove();
        //             // You can also update the total distance here if needed
        //         }
        //     }
        // });



        function generateUniqueValue() {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var uniqueValue = '';

            for (var i = 0; i < 5; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                uniqueValue += characters.charAt(randomIndex);
            }

            document.getElementById("uniqueValue").value = uniqueValue;
        }
    </script>
</body>

</html>