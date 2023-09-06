<div class="container-btn">
    <input type="checkbox" id="btn-mas" />
    <div class="redes">
        <a href="https://web.facebook.com/jefferfonsecasoto/" class="fab fa-facebook-f"></a>
        <a href="https://github.com/jefferfonseca/" class="fab fa-github"></a>
        <a href="www.linkedin.com/in/jeferson-leonel-fonseca-soto" class="fab fa-linkedin-in"></a>
        <a href="mailto:jefferfonsecagmail.com?subject=Contratar%20servicios&body=Me%20interesa%20m%C3%A1s%20informaci%C3%B3n%20al%20respecto%20de%20algun%20servicio."
            class="fab fa-google"></a>
        <a href="https://api.whatsapp.com/send?phone=573136925161&text=Me%20gustaría%20contratar%20tus%20servicios."
            class="fab fa-whatsapp" target="_blank" rel="noopener"></a>
        <a href="https://www.instagram.com/fonsecajeffer/" class="fab fa-instagram"></a>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fas fa-angle-up"></label>
    </div>
</div>

<div class="container text-center ">
    <h4 style="text-align: center;"> Resumen de CV:
        &nbsp;
        <div class="aligned-center">
            <a href='assets/docs/CV - Ing. Jeferson Fonseca Soto.pdf' download='CV - Ing. Jeferson Fonseca Soto.pdf'><span class="material-icons ">cloud_download</span></a>
            <a href='assets/docs/CV - Ing. Jeferson Fonseca Soto.pdf' download='CV - Ing. Jeferson Fonseca Soto.pdf' id="descargar"><b>Descargar</b></a>
        </div>
    </h4>
    <br>
</div>
<br>
<script>
    //activa o desactiva el menu de contacto de acuerdo al estado del checkbox
    function contacto() {
        if (document.getElementById("btn-mas").checked)
            document.getElementById("btn-mas").checked = false;
        else
            document.getElementById("btn-mas").checked = true;
    }
</script>
<footer>
    <div class="bg-dark fixed-bottom">
        <p class="text-white text-center m-1"><b>Design by: </b>Ing. Jeferson Fonseca Soto.</p>
    </div>
</footer>