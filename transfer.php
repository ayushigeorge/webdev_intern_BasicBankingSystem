<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pritam Kumar">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!--Exteral CSS link-->
    <link rel="stylesheet" href="style.css" type="text/css">
    <!--Font awosome link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="https://res.cloudinary.com/dhqxln7zi/image/upload/v1617813116/favikon_pidf7q.png" type="image/x-icon"/>
    <title>Our Proud Customers</title>
    <?php include 'transfer.css'; ?>
</head>
<body>  
    <!--Navbar-->
    <nav>
        <div class="Logo">
           <img src="https://th.bing.com/th/id/OIP.ahbKvnLaq-MsfY3VmkPCdwAAAA?pid=ImgDet&rs=1" id="bank-logo">
        </div> 
        <div class="navbar-link">
            <ul class="nav-links">
                <li><a href="index.html"class="links">Home</a></li>
                <li><a href="customer.php"class="links">Customers</a></li>
                <li><a href ="transactions.php"class="links">Transactions</a></li>
                <li><a href="transfer.php" class="links">Transfer</a></li>
                <li><a href ="#about-section"class="links">About</a></li>
            </ul>
        </div>
    </nav>

   <div class="container">
   <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $senderName = $_POST['sendername'];
            $senderAccountNumber = $_POST['senderaccountnumber'];
            $senderAmmount = $_POST['sammount']; 
       
            $recieverName = $_POST['receviername'];
            $recieverAccount = $_POST['recieveraccountnumber'];

            //Connecting server
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "cutsomer";
            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("sorry we failed to create". mysqli_connect_error());
            }else{
                //echo "Connection successful"; 
               $sql = "INSERT INTO `transfer` ( `sname`, `saccountnumber`, `sammount`, `rname`, `raccountnumber`, `date`) VALUES ( '$senderName', '$senderAccountNumber', '$senderAmmount', '$recieverName', '$recieverAccount', current_timestamp())";

               $result = mysqli_query($conn,$sql);
                    if($result){
                        echo  '<div class="alert alert-success" role="alert" style="margin-top: 10px;">
                            Hi! <b>'.$senderName.'</b> your money has been transferred successfully to <b>'.$recieverName.'.</b>
                            </div>';
                       }else{
                        echo "Error". mysqli_error($conn);
                     }
            }

        }
    
    ?>
    </div>

    <section id="transfer-section">
            <div class="img-container">
                <img src="https://th.bing.com/th/id/OIP.ahbKvnLaq-MsfY3VmkPCdwAAAA?pid=ImgDet&rs=1" class="transfer-img" alt="Transfer Image">
           </div>
    </section>

    <section id="form-section">
        <form method="post" action="transfer.php">
        <div class="form-container">
            <!---Sender----->
            <div class="sender-form">
             
                <h4>Sender</h4>
                <div class="mb-3">
                    <input type="text" class="form-control" id="SenderInputName" name="sendername" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="SenderAccountNumber" name="senderaccountnumber" placeholder="Enter account number" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="SenderInputAmount" name="sammount" placeholder="Enter ammount" required>
                </div>
                
            </div>
                <!--Reciever---->
            <div class="reciever-form">

                 <h4>Reciever</h4>
                 <div class="mb-3">
                    <input type="text" class="form-control" id="RecieverInputName" name="receviername" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="RecieverAccountNumber" name="recieveraccountnumber" placeholder="Enter account number" required>
                </div>
               
            </div>

        </div>

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Transfer</button>
            </div>
            </form>

    </section>

       

    <!--Foooter-->
    <footer>
        <span>Ayushi George</span> <a href="https://github.com/ayushigeorge/webdev_intern_BasicBankingSystem" target="_blank"><i class="fab fa-github"></i></a>
    </footer>
    </body>
     </html>
