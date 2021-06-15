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
    <title>Our cutomers</title>
    <?php include 'transations.css'; ?>
    <?php include 'customer.css'; ?>
    <?php include 'transfer.css'; ?>
</head>
<body>  
    <!--Navbar-->
    <nav>
        <div class="Logo">
           <img src="https://image.freepik.com/free-vector/vector-illustration-concept-money-transfer_65395-83.jpg" id="bank-logo">
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

    <section id="history-section">
        <section id="transfer-section" style="padding: 0px 0">
            <div class="img-container">
                <img src="https://image.freepik.com/free-vector/vector-illustration-concept-money-transfer_65395-83.jpg" class="transfer-img" alt="Transfer Image">
           </div>
        </section>

        <?php
            include 'connection.php';
            $sql = "SELECT * FROM `transfer`";
            $result = mysqli_query($conn,$sql);
           //  $num = mysqli_num_rows($result);
           // echo $num;
            //$customer = mysql_fetch_assoc($result);
            //echo $customer;
            ?>
           <table style="font-size:15px; font-family: 'Roboto', sans-seri;" class="table table-primary border-secondary">
                <tr>
                    <th class="table-heading" scope="col">Sender</th>
                    <th class="table-heading" scope="col">Reciever</th>
                    <th class="table-heading" scope="col">Amount</th>
                    <th class="table-heading" scope="col">Date & Time</th>
                </tr>

                <?php
                    if(mysqli_num_rows($result)>0){
                        while($mycustomer = mysqli_fetch_array($result)){
                        ?>
                        <tr scope="row">
                            <td class="table-d"><?php echo $mycustomer['sname']; ?> </td>
                            <td class="table-d"><?php echo $mycustomer['rname']; ?> </td>
                            <td class="table-d"><?php echo $mycustomer['sammount']; ?> </td>
                            <td class="table-d"><?php echo $mycustomer['date']; ?> </td>
                        </tr>
                        <?php 
                        }
                    }else{
                        echo "";
                    }

                ?>

            </table>
    </section>

    <?php
     
     

    ?>

    <!--Foooter-->
    <footer>
        <span style="color: #333;">Ayushi George  </span> <a href="https://github.com/ayushigeorge/webdev_intern_BasicBankingSystem" target="_blank"><i class="fab fa-github"></i></a>
    </footer>
    </body>
     </html>
