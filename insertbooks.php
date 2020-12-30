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

        <?php
        include("db.php"); 
        
            $title=$_POST["title"];
            $isbn=$_POST["isbn"];            
            $author=$_POST["author"];
            $publication=$_POST["publication"];

            $query = "insert into book_info(isbn,title,author,publisher) values('$isbn','$title','$author','$publication')"; //Insert query to add book details into the book_info table
            $result = mysqli_query($db,$query);
            

       
        ?>



        <div class="content">
            <h1 class ="feedback">Book Inserted successfully!</h1>

        </div>
    
    
    </div>
</head>
<body>
    
</body>
</html>