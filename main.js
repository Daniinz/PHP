    document.getElementById("login").addEventListener("enviar", function(event) {
    var nome = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    
    if (nome === "" || senha === "") {
      event.preventDefault();
      
      alert("Por favor, preencha todos os campos.");
    }
  });