<html>
        <style>
        body{
                 background-image: url("https://static.vecteezy.com/system/resources/previews/007/385/474/non_2x/blank-notebook-pape>                }
                        p{
                        color: black;
                        font-size: 30px;
                        font-family: "Gill Sans", sans-serif;
                        font-weight: bold;
                        line-height: 12;
                        text-align: center;
                        }

        </style>
                <body>



                <?php


                        $gradeinput = $_POST['currgrade'];
                        $targgrade = $_POST['targgrade'];
                        $examweight = $_POST['weight'];

                        $requiredgrade = round(((($targgrade/100) -(1-$examweight/100)*($gradeinput/100))/($examweight/100))*100,1);

                        if ($requiredgrade <= 100)
                        {
                                print "<p> You will need to score a $requiredgrade% on your exam. Good luck! </p>";
                        }

                        else if ($requiredgrade > 100)
                        {
                                print "<p> It's not possible for you to achieve a $targgrade% in this course \r\n with a current grade of $gradeinput%. Sorry. </p>";
                        }
                ?>

        </body>
</html>
