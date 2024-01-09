<html>

<head>
    <meta charset="uft-8">
</head>

<body>
<?php $multi_x = 4; ?>
<h1>Times table <?php echo $multi_x ?></h1> 
<div>
<?php 
    for($i=1;$i<=24;$i++){
        $answer = $multi_x * $i;
        echo " <table> 
        <tbody>
        <tr>
        <td>$multi_x</td>
        <td>x</td>
        <td>$i</td>
        <td>=</td>
        <td>$answer</td>
        </tr>  
        </tbody>
        </table> ";
    }

?>
</div>
<style>
    img{
        width: 70px;
        height: 70px;
        overflow:hidden;
        position: absolute;
        top:0px;
        z-index:-1;
        right: 600px;
        
    }
    table{
        width: 250px;
        background-color: rgba(252,175,237,0.5);
        display: block;
        margin: auto;
    }
    div{
        width: 300px;
        height: 300px;
        overflow:scroll;
        display: block;
        margin: auto;
    }
    td{
        border: 2px solid #FD8BE7;
        text-align:center;
        width: 60px;
        height:30px;
    }
    h1{
        text-align:center;
        family=Cute+Font&display=swap;  
    }
    body{
        background-image:url("https://img.freepik.com/free-vector/cute-colorful-kitten-pow-pattern-design_1017-14710.jpg?size=626&ext=jpg&ga=GA1.2.1591251229.1675185694&semt=sph")
        
    }

</style>
</body>
</html>