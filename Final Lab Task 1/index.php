<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'fundlagbe');

    // if($conn){
    //     echo "Database Connected Successfully!";
    // }else{  
    //     echo "DB error";
    // }
    if(!$conn)
    {
        die("error detected".mysqli_error($conn));
    }
    else
    {
        echo"connection established successfully";
    }
    // $sql = "select * from users";
    // $result = mysqli_query($conn, $sql);

    // echo "<table border=1>
    //         <tr>
    //             <td>Title</td>
    //             <td>Name</td>
    //             <td>Amount</td>
    //         </tr>";

    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>
    //                 <td>{$row['title']}</td>
    //                 <td>{$row['n']}</td>
    //                 <td>{$row['ia']}</td>
    //         </tr>";
    // }

    // echo "</table>";




   // header('location: INDHOME.php');



?>