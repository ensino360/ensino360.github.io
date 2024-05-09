<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Ensino 360</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-svBP8rgIsxypzK0HsCQzfkvcVX/4rZ8CbTTGFkb3gQTXTRJFE4aPpQVxeLph33Nn3B6RO1ckrIRlXQ7XgMjKpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    
<div id="loading">
    
</div>


<header>
       
<div class="logo">
            <img src="img/ensino360.png" alt="logo">
        </div>
        <div class="search-container">
           <input type="text" class="search-input" placeholder="Pesquisar...">
                 </div>
        
        <div class="menu">
                 
                   <ul>
                       <li><a href="#">Inicio</a></li>
                       <li><a href="#">Aprender</a></li>
                       <li><a href="#">Ensinar</a></li>
                       <li><a href="sobre.php">Sobre</a></li>
                   
                   </ul>

        <div class="btn">
          <button><a href="">Entrar</a></button>
          <button><a href="">Assinar</a></button>
        </div>
    </header>
    <div class="container">
        <div class="left">
            <h2>Descubra mais de 50 cursos  gratuitos na nossa plataforma agora mesmo!!
                
               
                </h2>
                
        </div>
        <div class="right">
            <img src="img/people.png" alt="">
        </div>
    </div>
    
    <div class="ctg">
      <h2>Categorias</h2>
      <div class="categoria">
    <i class="fas fa-briefcase"></i> Negócio
  </div>
  <div class="categoria">
    <i class="fas fa-graduation-cap"></i> Educação
  </div>
  <div class="categoria">
    <i class="fas fa-laptop-code"></i> Tecnologia
  </div>
  <div class="categoria">
    <i class="fas fa-heartbeat"></i> Saúde
  </div>
  <div class="categoria">
    <i class="fas fa-user"></i> Desenvolvimento Pessoal
  </div>

      <section>
        
      <div class="txt">
        <h2>Explore o nosso <br> vasto catálogo de cursos</h2>
      </div>
      
      
      <div class="card-container">
  <div class="card">
    <img src="img/curso/imersao.jpg" alt="Capa do Curso">
    <div class="card-content">
      <h2>Mentoria: Imersão Danilo Castro </h2>
     
      <p><strong>Preço:</strong> GRATIS</p>
    </div>
  </div>
  <div class="card">
    <img src="img/curso/nuno.jpg" alt="Capa do Curso">
    <div class="card-content">
      <h2>Lições Básicas sobre Dinheiro</h2>
      <strong>Preço:</strong> GRATIS</p>
    </div>
  </div>
  <div class="card ">
    <img src="img/curso/maquina.jpg" alt="Capa do Curso">
    <div class="card-content">
      <h2>Curso: Super Afilhado</h2>
      <strong>Preço:</strong> GRATIS</p>
    </div>
  </div>
  <div class="card">
    <img src="img/curso/vitor.webp" alt="Capa do Curso">
    <div class="card-content">
      <h2>Curso: Falar em Público Agora</h2>
      <strong>Preço:</strong> GRÁTIS</p>
    </div>
  </div>
</div>


      </section>

      <div class="txt">
        <h2>Explora a nossa seleção de ebooks exclusivos</h2>
      </div>
      <div class="ebook">
      
      <div class="ebk">
    <img src="img/ebook/passado.jpg" alt="Capa do eBook 1">
    <div class="ebk-content">
      <h2>O Passeador de Livros</h2>
      <p></p>
      <a href="#" class="btn">Download</a>
    </div>
      </div>
      <div class="ebk">
    <img src="img/ebook/crime.jpg" alt="Capa do eBook 1">
    <div class="ebk-content">
      <h2>Titulo do eBook 1</h2>
      <p></p>
      <a href="#" class="btn">Download</a>
    </div>
      </div>
      <div class="ebk">
    <img src="img/ebook/empregada.jpg" alt="Capa do eBook 1">
    <div class="ebk-content">
      <h2>Deixa de Tentar Vencer</h2>
      
      <a href="#" class="btn">Download</a>
    </div>
      </div>
      <div class="ebk">
    <img src="img/ebook/amorodio.jpg" alt="Capa do eBook 1">
    <div class="ebk-content">
      <h2>O Jogo do Amor Ódio</h2>
      <a href="#" class="btn">Download</a>
      <section class="for">

<div class="formadores">
  <div class="formador">
    <img src="img/formadores/nuno.jpg" alt="" srcset="">
  </div>
  <div class="formador">
    <img src="img/formadores/nuno.jpg" alt="" srcset="">
  </div>
  <div class="formador">
    <img src="img/formadores/danilo.jpg" alt="" srcset="">
  </div>
  <div class="formador">
    <img src="img/formadores/petra.jpg" alt="" srcset="">
  </div>
  <div class="formador">
    <img src="img/formadores/marcos.jpg" alt="" srcset="">
  </div>
</div>
</section>
    </div>
    



    
<script src="js/home.js"></script>
</body>
</html>