<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
    <link rel="stylesheet" href="notification.css">
</head>
<body>
     <div class="popupdiv " id="popupdiv">
                         
                              <div class="">
                                  <h1>you have succesfully added</h1>

                            </div>
                           <a href="welcomepage.php"><input type="button" value="login"></a>
                               
                          </div><br>
             <div class="">
                 <button class="btnss btn btn-warning"type="submit"onclick="openpopup()"> LOGIN TO PAGE</button>
                <!-- <button   class=" btn btn-info" type="submit" >LOgin</button> -->
             </div>
    </div>
    <script>
        let popup=document.getElementById("popupdiv");
        function openpopup(){
          popup.classList.add("open-popup");
        }
        function loginpopup(){
          popup.classList.remove("open-popup");
        }
      </script>
</body>
</html>