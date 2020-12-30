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
            <form action = "insertbooks.php" class = "book-form" method = "post">
                <div class="head">
                    <h1>Add Books</h1>
                    <p>Insert books in the database by filling this form</p>
                    <hr>
                </div>

                <div class="book-container">
                    
                <div class="form-element">
                    <label for="title"><b>Book Name</b></label>
                    <input type="text" placeholder="Enter Book name" name="title" id="title" maxlength="30" required>
                </div>
                <div class="form-element">
                    <label for="isbn"><b>ISBN</b></label>
                    <input type="text" placeholder="Enter ISBN" name="isbn" id="isbn" maxlength="30" required>
                </div>
                <div class="form-element">
                    <label for="author"><b>Author</b></label>
                    <input type="text" placeholder="Enter Author name" name="author" id="author" maxlength="30" required>
                </div>
                <div class="form-element">
                    <label for="publication"><b>Publication</b></label>
                    <input type="text" placeholder="Enter Publication name" name="publication" id="publication" maxlength="30">
                </div>
                <div class="form-element">
                    <button type="submit" class="submitbtn" name = "submit">Add Book</button>
                    
                </div>
                <div class="form-element">
                    <input type="reset" value="Reset">
                    
                </div>
                

                   

                    

                    

                    
                </div>

            </form>

        </div>
    
    
    </div>
</head>
<body>
    
</body>
</html>