<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>



    <div class="container">
        <div class="mb-3">
            <form class="mb-4" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label col-md-2" for="startAs">Start As:</label>
                    <input class="form-control col-md-6" name="startAs" id="startAs" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label col-md-2" for="endAs">End As:</label>
                    <input class="form-control col-md-6" name="endAs" id="endAs" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label col-md-2" for="stepAs">Step Size:</label>
                    <input class="form-control col-md-6" name="stepAs" id="stepAs" type="text">
                </div>
                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $startAs = $_POST["startAs"];
        $endAs = $_POST["endAs"];
        $stepAs = $_POST["stepAs"];

        if (is_numeric($startAs) && is_numeric($endAs) && is_numeric($stepAs)) {

            printNumber($startAs, $endAs, $stepAs);
            
        } else {
            echo '<div class="container"><div class="alert alert-danger">Invalid parameter</div></div>';
        }
    }

    function printNumber($startAs, $endAs, $stepAs){
        $result = "";
        for($i=$startAs; $i<=$endAs;$i++){
            if($i % $stepAs == 0){
                $result = $result."$i ";
            }
        }
        echo "<div class='container'><div class='alert alert-success'>$result</div></div>";
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>