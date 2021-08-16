<!DOCTYPE html>
<html>
    <head>
        <title>Select your choice</title>
    </head>
    <style>
        body
        {
            font-style: italic;
            font-size: medium;
            background-image: url('back4.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #css
        {
            width: 250px;
            height: 150px;
        }
    </style>
    <body>

        <div style="width: 100%;" align='center'>
            <h1>
                You have four choices...You can take any test..Go on!!!! 
            </h1>
            <div style="width: 30%; height: 50%;">

                <p>Test for <b>HTML</b><br>click the picture below to get the description of test</p>
                <button type="button" onclick='html()' class="html"><img src="6.jpeg" alt="css" id='css'></button><br><br>
                <b id='html1'></b><br><br><b>If you want to take HTML test &nbsp;&nbsp;<a href="answer_giving.php"><button>click here</button></a></b><br><br>

                <p>Test for <b>CSS</b><br>click the picture below to get the description of test</p>
                <button type="button" onclick='css()' class="css"><img src="4.jpeg" alt="css" id='css'></button><br><br>
                <b id='css2'></b><br><br><b>If you want to take CSS test &nbsp;&nbsp;<a href="answer2_giving.php"><button>click here</button></a></b><br><br>

                <p>Test for <b>JAVASCRIPT</b><br>click the picture below to get the description of test</p>
                <button type='button' onclick='javascript()' class="javascript"><img src="2.jpeg" alt="css" id='css'></button><br><br>
                <b id='js3'></b><br><br><b>If you want to take JAVASCRIPT test &nbsp;&nbsp;<button>click here</button></b><br><br>

                <p>Test for <b>DBMS</b><br>click the picture below to get the description of test</p>
                <button type="button" onclick='dbms()' class="dbms"><img src="5.jpeg" alt="css" id='css'></button><br><br>
                <b id='dbms4'></b><br><br><b>If you want to take DBMS test &nbsp;&nbsp;<button>click here</button></b><br><br>

            </div>
        </div>
    </body>
    <script>
        function html()
        {
            var html_content='THIS TEST IS ABOUT HYPER TEXT MARKUP LANGUAGE(HTML)...\nHTML IS THE CODE THAT IS USED TO STRUCTURE A WEBPAGE AND ITS CONTENT\nYOU WILL HAVE MULTIPLE CHOICE QUESTIONS ON HTML...\nYOU CAN SOLVE AND TEST YOU KNOWLEDGE IN HTML';
            document.getElementById('html1').innerHTML=html_content;
        }
        function css()
        {
            var css_content='THIS TEST IS ABOUT CASCADING STYLE SHEET(CSS)...\nCSS HELPS US TO STYLE OUR WEBPAGE TO MAKE IT MORE ATTRACTIVE...\nYOU WILL HAVE MULTIPLE CHOICE QUESTIONS ON CSS...\nYOU CAN SOLVE AND TEST YOU KNOWLEDGE IN CSS';
            document.getElementById('css2').innerHTML=css_content;
        }
        function javascript()
        {
            var javascript_content='THIS TEST IS ABOUT JAVASCRIPT(JS)...\nJAVASCRIPT HELPS US TO MAKE OUR WEBPAGES INTERACTIVE...\nYOU WILL HAVE MULTIPLE CHOICE QUESTIONS ON JS...\nYOU CAN SOLVE AND TEST YOU KNOWLEDGE IN JS';
            document.getElementById('js3').innerHTML=javascript_content;
        }
        function dbms()
        {
            var dbms_content='THIS TEST IS ABOUT DATABASE MANAGEMENT SYSTEM(DBMS)...\nDBMS IS USED TO OPTIMIZE AND MANAGE THE STORAGE AND RETRIEVAL OF DATA...\nYOU WILL HAVE MULTIPLE CHOICE QUESTIONS ON DBMS...\nYOU CAN SOLVE AND TEST YOU KNOWLEDGE IN DBMS';
            document.getElementById('dbms4').innerHTML=dbms_content;
        }
    </script>
</html>
