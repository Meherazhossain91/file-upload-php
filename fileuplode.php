 <html>
     <head>
         <body>
             
           <?php
           
         
            if (isset($_FILES['image'])){

                $filename = $_FILES['image']['name'];
                $filetmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($filetmp,"images/" . $filename);
                echo "successfully uploaded";
            }
           
           
           ?>


         <form method= "post" action= "" enctype= "multipart/form-data">

              <input type="file" name= "image">
              <input type="submit" value= submit>

         </form> 






         </body>
     </head>
 </html>


