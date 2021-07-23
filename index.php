<html>
    <head>
        <title>Calculadora Básica</title>

        <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            height: 100ch;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://cdn.pixabay.com/photo/2017/11/16/09/32/matrix-2953869_1280.jpg);
        }
        form {
            height: 300px;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #87cefa;
            border-radius: 10px;
        }

        
    </style>
    </head>
 
    <body>
        <form action="calculadora.php" method="get">
            <h1>CALCULADORA</h1> 
            <br /> <br />
 
            PRIMEIRO NÚMERO:
            <input name="num1" type="text" />
            <br /> <br />
             
            SEGUNDO NÚMERO:
            <input name="num2" type="text" />
            <br /> <br />
             
            OPERAÇÃO:  
            <select name="operacao" >
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
            
            <br /> <br />

        </select>
        <br /> <br />
             
            <input type="submit" value="submeter" />    
            <br /> <br />
             
        </form>
    </body>
</html>
