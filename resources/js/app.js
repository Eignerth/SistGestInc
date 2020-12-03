require('./bootstrap');
//sweetalert
<<<<<<< Updated upstream
window.Swal = require('sweetalert2');
//import "select2/dist/js/select2.full"
=======
window.Swal = require('sweetalert2')

require('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4')();
window.dt = require('admin-lte/plugins/datatables/jquery.dataTables')();
require('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4')();


//FUNCION BUSCAR

    inputSearch = document.getElementById("inputSearch");
    box_search = document.getElementById("box-search");

    document.getElementById("inputSearch").addEventListener("keyup",buscar_inter);

    function buscar_inter(){

        filter = inputSearch.value.toUpperCase();
        li = box_search.getElementsByTagName("li");

        //recorrer elementos a filtrar
        for (i=0; i< li.length; i++){
            a = li[i].getElementsByTagName("a")[0];
            textValue = a.textContent || a.innerText;
            if(textValue.toUpperCase().indexOf(filter) > -1){
                li[i].style.display = "";
                box_search.style.display="block";
                if(inputSearch.value === ""){
                    box_search.style.display= "none";
                }

            } else{
                li[i].style.display="none";
            }
        }
    }

>>>>>>> Stashed changes
