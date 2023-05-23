<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  background-color: aqua;
  padding: 20px;
  text-align: center;
  font-size: 35px;

}
.row {
  display: -webkit-flex;
  display: flex;
}

.column {
  -webkit-flex: 2;
  -ms-flex: 2;
  flex: 2;
  padding: 1px;
  height: 300px; 
}
.footer {
  background-color: aqua;
  padding: 30px;
  text-align: center;
  height: 150px;
}
@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>

<div class="header">
  <h2>Minhas Materias</h2>
</div>

<div class="row">
  <div class="column" style="background-color:white;"><h1>Historia</h1> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto maxime optio aliquam? Sapiente exercitationem minima veritatis dolor blanditiis, a ratione eius repudiandae iusto, tempore assumenda nihil provident aut rerum.</div>
  <div class="column" style="background-color:#aaa"><H1>Potugues</H1> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ad fuga perferendis quibusdam quidem nam dolor reprehenderit accusamus sed officia, voluptatum libero aliquid pariatur aspernatur cumque vero consequatur? Debitis, animi.</div>
  <div class="column" style="background-color:white;"><h1>PSW</h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quis itaque. Distinctio unde iure ducimus, nam ea maxime cum excepturi placeat, temporibus expedita saepe, fugit voluptatem asperiores adipisci iusto delectus?</div>
  <div class="column" style="background-color:#aaa;"><h1>Geografia</h1> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis dolorem modi beatae eius? Et ipsa aut deserunt similique debitis, accusantium harum facilis culpa porro dolorum totam libero voluptates odio omnis!</div>
  <div class="column" style="background-color:white;"><h1>Matematica</h1> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur recusandae magni cupiditate et dolore vero tenetur. Exercitationem sapiente enim tenetur dolore. Quod voluptatibus praesentium cumque repellendus asperiores laudantium consectetur porro.</div>
</div>

<div class="footer">
  
</div>

</body>
</html>

