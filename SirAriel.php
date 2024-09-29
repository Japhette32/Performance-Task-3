<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Teacher Day Sir Ariel!</title>
    <link rel="stylesheet" href="SirAriel.css" />
</head>

<body>
    <form action="" method="post">
        <button>
            <h3>Letter For You Sir!</h3>
        </button>
    </form>
    <p>Basic Information </p>
    <img id="img" src=Ariel-removebg-preview.png>
    <?php
    $name = "Ariel Domingo";
    $Age  = "REDACTED";
    $Job = "Teacher at University of Makati, teaching for 10 years.";
    $subject = "Computer Programming,\n Computer Servicing System, Management Information System,\n Empowerment Technologies, Practical Research,Research Project";
    $quotes = "\"Ayaw nyo recitation points ah\"";//wag ka ma kontento sa inaral mo sa school
    $facts = "He worked for a governer and he doesn't like swearing \nhe's also great at escaping";
    ?>
    <div id="bg">
        <div id="output" class="typing"></div>
        <script>
            const textname = `Name: <?php echo $name; ?>


Age: <?php echo $Age; ?>


Job: <?php echo $Job; ?>


Subjects Taught: <?php echo $subject; ?>


Quotes: <?php echo $quotes; ?>


Interesting facts: <?php echo $facts; ?>
`;

            let i = 0;

            function TypeName() {
                if (i < textname.length) {
                    document.getElementById("output").innerHTML += textname.charAt(i);
                    i++;
                    setTimeout(TypeName, 15);
                }
            }
            document.addEventListener("DOMContentLoaded", function() {
                TypeName();
            });
        </script>
</body>

</html>
</div>
</body>

</html>