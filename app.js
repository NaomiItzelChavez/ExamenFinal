
//document.addEventListener("DOMContentLoaded",function(){
    /*const seccion3 = document.querySelector('.seccion3');//En esta linea guardamos el div con sección3
    const seccion2 = document.querySelector('.seccion2');
  
    const form = document.getElementById('formulario');//En esta línea guardamos el formulario
  
    form.addEventListener('submit',function(e) {
     e.preventDefault();
     const m1 = document.querySelector('.oculto');
      const magia = document.querySelector('.mos');
  
      magia.addEventListener('click',function(){ 
        if(m1.style.display != 'none'){
          m1.style.display= 'none';
        }
        else{
          m1.style.display= 'inline-block';
        }
      });
     let nombre = document.getElementById('first_name').value;
     let apellido = document.getElementById('last_name').value;
     let correo = document.getElementById('email').value;
     let contra = document.getElementById('password').value;
  
     let checkBox1 = document.getElementById('checkbox1');
     let checkBox2 = document.getElementById('checkbox2');
     console.log(checkBox2);
     console.log(checkBox1);
     if(checkBox1.checked == true && checkBox2.checked == true && nombre !="" && correo !="" && contra !=""){
       console.log('Aceptó terminos y condiciones');
       agregarTexto(nombre, apellido, correo);
     }
     else{
       alert('Faltan datos');
     }
    });*/
  
    function agregarTexto(nombre,apellido,correo){
      let html = `  
      <div class="col s4 m3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Hola ${nombre} ${apellido}</span>
            <p>Tu registro fue exitoso con el correo ${correo}</p>
          </div>
        </div>
      </div>
    `;
                  
      seccion3.innerHTML = html;
      let html1 =`<li><a href="calc.html" >Calculadora1 </a></li>
            <li><a href="juego.html" >Juego</a></li>
            <li><a href="divisas.php" >Divisas</a></li>`
      seccion2.innerHTML = html1
    }
  
  
    /*  EVENTO CHANGE
    const casilla1 = document.getElementById('checkbox1')
    const casilla2 = document.getElementById('checkbox2')
  
    castilla.addEventListener('change',function(e) {
     console.log('Cambió el estado del checkbox1')
    });*/
  
    /*EVENTO SUBMIT
    const form = document.getElementById('formulario');
  
    form.addEventListener('submit',function(e) {
     e.preventDefault();
     let nombre = document.getElementById('first_name').value;
     let apellido = document.getElementById('last_name').value;
     console.log(nombre);
     console.log (apellido);
    })*/
    
    /*EVENT INPUT
    const input = document.getElementById('first_name');
      
    input.addEventListener('keydown', function(e){
     if(e.key == '@' ){
     alert('No se acepta caracteres especiales'); 
     }
    });*/
  
    /*DELAY
    setTimeout(function(p1,p2,p3) {
        console.log('p1');
        console.log('p2');
        console.log('p3');
        console.log('p4');
      },5000, 'Hola(p1)','Soy(p2)','atributos(p3)');
      */
    
      const b1 = document.querySelector('.uno');
      const b2 = document.querySelector('.dos');
      const magia = document.querySelector('.colapso');
  
      magia.addEventListener('click',function(){ 
        if(b1.style.display != 'none'){
          magia.textContent = 'Mostrar';
          b1.style.display= 'none';
          b2.style.display= 'none';
        }
        else{
          magia.textContent = 'Ocultar';
          b1.style.display= 'inline-block';
          b2.style.display= 'inline-block';
        }
      });
      
    });