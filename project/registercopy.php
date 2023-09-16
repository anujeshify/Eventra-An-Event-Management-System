<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background-image: url(ii6.png);
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #FFBF00;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #FFBF00;
}
</style>
<body>

<div class="container">

    <form action="GET">

        <div class="row">

            <div class="col">

                <h3 class="title">Register Here</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Atish Mahali">
                </div>
                <div class="inputBox">
                    <span>age :</span>
                    <input type="age" name="age" placeholder="21">
                </div>
                <div class="inputBox">
                    <span>phone number :</span>
                    <input type="number" placeholder="enter PhoneNumber"  name="phonenumber">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>occesion :</span>
                    <input type="text" placeholder="enter Profession" name="ocassion"  >
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>profession :</span>
                        <input type="text" placeholder="enter Profession" name="profession"  >
                    </div>
                    
                </div>

            </div>

            <div class="col">

                <h3 class="title">Credentials</h3>

                <div class="inputBox">
                        <span>username :</span>
                        <input type="text" placeholder="enter username" name="username">
                    </div>
                <div class="inputBox">
                    <span>password :</span>
                    <input type="text" placeholder="enter password" name="password">
                </div>
    

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

    <?php
    $con=mysqli_connect('localhost','root',"","project");
    if(!$con){
        print('error in connecting');
    }
    else{
        print('connected successfully');
    }
    
    
    mysqli_query($con,"use project");
    
    $sql="INSERT INTO client_(client_name, age, phone_no, gender, address, profession, occasion, username, password, )
    VALUES
    ('$_POST[name]','$_POST[age]','$_POST[phonenumber]', '$_POST[gender]', '$_POST[address]'. '$_POST[profession]', '$_POST[ocassion]','$_POST[username]', '$_POST[password]')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error());
    }
    echo "6 record added";
    
?>
</body>
</html>