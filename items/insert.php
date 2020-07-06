<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['item_name']) )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Item_Name = $_POST['item_name'];
            $Item_Detail = $_POST['item_detail'];
            $SP = $_POST['sp'];
            $CP = $_POST['cp'];

            $query = " insert into Inventory (Item_Name,Item_Detail,CP,SP) values('$Item_Name','$Item_Detail','$CP','$SP')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>