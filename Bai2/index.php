<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
           margin: 0;
           padding: 0;
        }
        form{
          
            display: grid;
            width: 40%;
            padding: 20px;
        }
         h1{
            padding-left:10px ;
        }
        form input{
            padding: 10px;
            margin: 10px;
        }
        form label{
            margin: 5px;
        }
        form button{
            width: 70px;
            height: 30px;
            background: blue;
            color: white;
            border: none;
            justify-self: center;
        }
        form textarea{
           
            height: 100px;
        }
    </style>
    <h1>Email đến bạn</h1>
<form action="mail.php" enctype="multipart/form-data" method="POST">
<label>Email</label>
<input type="text" class="form-control" name="email" placeholder="Email">
<label>Subject</label>
<input type="text" class="form-control" name="tieude" placeholder="ten">
<label>Nội dung</label>
<textarea name="content" id="editor" class="form-control"></textarea>
<label>Tệp đính kèm</label>
<input type="file" class="form-control" name="file">
<button type="submit" class="btn btn-primary">Gửi</button>

</body>
</html>
