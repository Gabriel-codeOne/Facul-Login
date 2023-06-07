<!DOCTYPE html>
<html>
<head>
  
 
<title>Tela de Login</title>
  
 
<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
  
 
<div class="container">
    
   
<h2>Tela de Login</h2>
    <form>
      
     
<div class="form-group">
        
        <
<label for="username">Usuário:</label>
        
       
<input type="text" id="username" required>
      
      </
</div>
      <div class="form-group">
        
       
<label for="password">Senha:</label>
        
       
<input type="password" id="password" required>
      </div>
      
     
<button type="submit" class="btn">Entrar</button>
    </form>
  
 
</div>

  

 


<script>document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault(); // Impede o envio do formulário

  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (username === 'usuario' && password === 'senha') {
    alert('Login bem-sucedido!');
  } 
 
else {
    
   
alert('Usuário ou senha inválidos.');
  }
});</script>
</body>


</html>