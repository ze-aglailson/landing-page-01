window.onload = ()=>{

    (function openCaptura(){

        let btnAcao = document.getElementById('btn-acao')

        btnAcao.addEventListener("click", function(){

            let formCaptura = document.getElementById('form-captura')
            
            if(formCaptura.style.maxHeight){
                formCaptura.style.maxHeight = null;
            }else{
                formCaptura.style.maxHeight = formCaptura.scrollHeight +'px';
            }

        })

    }())

}