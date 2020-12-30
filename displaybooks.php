<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookform</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <div class="container">
        <header class="header">
            <div class="name">
                <h1>Library management system</h1>            
            </div>
            <nav class="navbar">
                <ul class="user-nav">
                    <li class="user-nav__item">
                        <a href = "bookform.php" class = user-nav__link>
                            Add                         
                        </a>
                    </li>
                    <li class="user-nav__item">
                        <a href = "deletebooks.php" class = user-nav__link>
                            Delete                     
                        </a>
                    </li>
                    <li class="user-nav__item">
                        <a href = "searchbooks.php" class = user-nav__link>
                            Search                       
                        </a>
                    </li>
                    <li class="user-nav__item">
                        <a href = "updatebooks.php" class = user-nav__link>
                            Update                         
                        </a>
                    </li>
                
                </ul>
            
            
            </nav>
        
        </header>

        
        <div class="content">
            <div class="display">
            <?php
            include("db.php");

            $search = $_REQUEST["search"];

            $query = "select ISBN,Title,Author,Publisher from book_info where ISBN like '%$search%'"; 
            $result = mysqli_query($db,$query);

            if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

            {
            ?>



            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Publication</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                <?php while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>


                                    <tr>
                                        <td><?php echo $row["ISBN"];?></td>
                                        <td><?php echo $row["Title"];?></td>
                                        <td><?php echo $row["Author"];?></td>
                                        <td><?php echo $row["Publisher"];?></td>
                                                                                
                                    </tr>                             
                                    
                                    
                                </tbody>

            <?php
                }
                }
                else
                echo "<h1>No books found in the library </h1>";
            ?>


            </table>
            </div>

        </div>
    
    
    </div>
</head>
<body>
    
</body>
</html>