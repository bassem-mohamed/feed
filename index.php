<html>
<head>
    <?php

    include_once ("connection.php");
    include_once ("plugin.php");
    ?>
</head>
<body>
<form method="post" action="insert.php">
    enter your name  <input type="text" id ="name" name="name" value="<?php echo !empty($name)?$name:'';?>">*<br><br>
    <p><label for="email">  enter your email  </label>
     <input type="email" name="email" id="email" value="<?php echo !empty($email)?$email:'';?>">*<br><br>
    enter your post <textarea name="posts" cols="50" id ="posts" value = "<?php echo !empty($posts)?$posts:'';?>"></textarea>
        <div class="container">
    <input type="submit" name="submit" value="save" class="btn btn-info" >
    </div>
</form>
<table class="table">
    <thead>
    <th> name</th>

    <th> email</th>

    <th> posts</th>
    </thead>
        <tbody>
        <?php
        $sql = 'SELECT * FROM users ORDER BY id DESC';
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'. $row['name'] . '</td>';
            echo '<td>'. $row['email'] . '</td>';
           echo '<td>'. $row['posts'] . '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
</table>
</body>
</html>