function openForm() {
    document.getElementById("dudas").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("dudas").style.display = "none";
  }

  document.getElementById("sesion").onclick = function () {
    window.location.href = "admin.php";
};