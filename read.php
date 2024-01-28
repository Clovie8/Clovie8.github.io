
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>
        Digital Admin Panel
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

      <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: whitesmoke;
        }

        .head{
            background: orange;
            position: fixed;
            width: 100%;
            height: 120px;
            box-shadow: 8px 4px 8px 2px;

        }

        .side{
            background: orange;
            position: fixed;
            width: 240px;
            height: 100%;
        }

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center table{
            position: relative;
            justify-content: center;
            align-items: center;
            display: flex;
            margin-top: 200px;
        }

        .moio{
            position: absolute;
             display: flex;
            justify-content: center;
        }

        ul{
            margin: 25px 40px;
            list-style: none;
        }

        li{
            font-size: 23px;
            font-weight: bold;
        }

        a{
            color: black;
            text-decoration-line: none;
        }

        a:hover{
            color: rgb(60, 60, 60);
        }

        p.hello{
            text-align: center;
            font-size: 25px;
            color: black;
            font-family: copperplate gothic;
        }
        img{
            width: 50%;
            margin: 20px 50px;
        }
        i{
            color: black;
        }
        .mm_o{
            float: right;
            line-height: 120px;
            margin-right: 40px;
            font-size: 30px;
        }
        .treda{
            text-align: center;
            font-family: copperplate gothic;
            color: white;
        }
        h2{
            font-size: 35px;
            line-height: 80px;
        }

        form{
            float: right;
            margin-right: 25px;
            
        }

        input[type=text]{
            margin-top: 45px;
            height: 38px;
            background: white;
            border-radius: 20px;
            border: 1px solid black;
        }

        input::placeholder {
            color: black;
            padding: 10px;
            font-size: 18px;
        }

        button[type=submit]{
            border-radius: 15px;
            margin-top: 48px;
            background: white;
            border: none;
            color: black;
            position: absolute;
            margin-left: 145px;
            padding: 3px 5px;
            height: 30px;
        } 

      </style>

</head>
<body>

    <header class="head">

        <div class="mm_o">
            <abbr title="Log Out"> <a href="logout.php"><i class="fa fa-right-to-bracket"></i></abbr></a> 
        </div>

        <form action="read.php" method="POST">
             <button type="submit" name="subm"><i class="fa fa-search"></i></button>
             <input type="text" name="sear" placeholder="Search..." required>
        </form>


        

        <div class="treda">
            <h2>Digital Corner</h2>
        </div>


    </header> 

    
    <div class="side">
        <img src="admin.png"  class="img-circle">
        <p class="hello">Hello Admin!</p>


        <ul>
            <li><i class="fa fa-house"></i> <a href="#">Dash Bord</a></li>
            <hr>
            <li><i class="fa fa-user"></i> <a href="read.php">Customers</a></li>
            <hr>
            <li><i class="fa fa-layer-group"></i> <a href="#">Category</a></li>
            <hr>
            <li><i class="fa fa-list"></i> <a href="#">Product</a></li>
            <hr>
            <li><i class="fa fa-pen-to-square"></i> <a href="#">Orders</a></li>
            <hr>
        </ul>
        
    </div>
    <div class="center">

        <div class="moio">
            <h3>COSTOMERS</h3>
        </div>

    <table class="table table-striped">

        <tr>
            <th>Id</th>
            <th>Names</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Confirm_Password</th>
            <th>Action</th>
        </tr>   

    <?php
    include 'connect.php';
    $error='';
    if (isset($_POST['subm'])) {

          
            $search=$_POST['sear'];
            $select="SELECT * FROM `userside` WHERE id like '%$search%' or name like '%$search%' or email like '%$search%' or phone like '%$search%' or password like '%$search%' or confirm like '%$search%'";
            $quel=filterTable($select);
            

    }else {
        $select="SELECT * FROM `userside`";
        $quel=filterTable($select);
    }

    function filterTable($select)
    {
      $connect=mysqli_connect('localhost','root','','corner');
      $quel=mysqli_query($connect,$select);
      return $quel;
    }
    
    ?>

    <?php
     $b=1;
     while ($fetch=mysqli_fetch_array($quel)){
        $s=$fetch['id'];
        $d=$fetch['name'];
        $f=$fetch['email'];
        $g=$fetch['phone'];
        $h=$fetch['password'];
        $j=$fetch['confirm'];

     ?>

    <tr>
        <td><?php echo "$s"; ?></td>
        <td><?php echo "$d"; ?></td>
        <td><?php echo "$f"; ?></td>
        <td><?php echo "$g"; ?></td>
        <td><?php echo "$h"; ?></td>
        <td><?php echo "$j"; ?></td>
        <td>
            <button class="btn btn-primary"><a href="update.php?id=<?php echo($fetch['id'])?>">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?id=<?php echo($fetch['id'])?>">Delete</a></button>
        </td>
    </tr>
    <?php
      }
    $b++;
    ?>

</table>

</div>


</body>
</html>

