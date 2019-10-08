<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submitForm']) && isset($_REQUEST['year'])){
        echo "Displaying form <br/>";
        $year = $_REQUEST['year'];
        echo "user selects: ".$year;
        var_dump($year);

        /*foreach($year as $yearEl){
            //multi-arrays, arrays
            echo $year#l." ";
        }*/
    }
?>
    <form action="index.php">
        <p><input type="checkbox" name="year[]" value="1" id="year">One</p>
        <p><input type="checkbox" name="year[]" value="2" id="year">Two</p>

        <p><div ondrop="drop(event)" ondragover="allowDrop(event)" value="Submit" id="button1">Submit Form</div></p>
    </form>   

    <div style="width: 30px; height: 30px;" draggable="true" ondragstart="drag(event)">nothing here</div>
    <script>
        function allowDrop(ev) {
        ev.preventDefault();
        }

        function drop(ev) {
        ev.preventDefault();
        console.log('ev.dataTransfer', ev.dataTransfer));
        ev.target.appendChild(document.getElementById(data));
        }

        function dragging(ev){
            ev.preventDefault();
            console.log('you are dragging something');
            return false;
        }
    </script>
</body>
</html>