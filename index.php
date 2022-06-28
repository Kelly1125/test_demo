<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.header {
background: #003366;
}
button[name=register_btn] {
background: #003366;
}
div {
    width: 90%;
    padding: 10px;
    text-align: center;
    margin: 0 auto;
}
p{
    font-size:20px;
}
table{
    align:centre;
    font-size:20px;
    margin-left:auto; 
    margin-right:auto;"
}
</style>
</head>
<body>
    <div>
    <img src="https://th.bing.com/th/id/R.7f49db5c9271969c41b3050939f4d844?rik=FWObzJUqXkfF1g&riu=http%3a%2f%2fprestongeocem.com%2fwp-content%2fuploads%2f2018%2f02%2flogo-uthm-web.png&ehk=sfH1cYPY9YINFXl23vAgAAJKbmRs2yvtIv7KVjOdEug%3d&risl=&pid=ImgRaw&r=0" style="width: 800px;height: 350px; margin-left:auto;margin-right: auto">
    <?php
    echo "<h2>BIC 21203 Webpage Development</h2>";
    echo "<h3>Section 5</h3>";
    echo "<br/><p>Name          : Kelly Foo Yen Li</p>";
    echo "<p>Matric No.    : AI190265</p>";
    echo "<p>Lab Activities: </p>";
    ?>
<table border=1px>
    <tr>
        <td>Lab No</td>
        <td>Title</td>        
        <td>Lesson Learned</td>
    </tr>
    
        <td>3</td>       
        <td> <a href=".\L3\home.php">Lab 3 </a></td>
        <td>In this assignment, I had learned how to code the style 
            sheet for a web site and arrange the content of the website. 
            There are many knowledges learned such as how to set the 
            position of the footer, set the navigation bar and hyperlink 
            that link to another pages, modify the table properties according
             to requirement and modify the properties of the image.</td>

    </tr>
    <tr>
        <td>4</td>        
        <td> <a href=".\L4\product.php"> Lab 4 </a></td>
        <td>In this lab, I had learned how to store data in local 
            storage and call data from local storage, create scroll 
            container for content, using JavaScript to manage the 
            content of the webpage and connect the html page with the 
            JavaScript code file.</td>
    </tr>
</table>
</div>
</body>
</html>
