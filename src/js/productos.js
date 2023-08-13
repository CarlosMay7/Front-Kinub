(function(){    
    const checkboxes = document.querySelectorAll('[name="tags"]');
    checkboxes.forEach( checkbox => checkbox.addEventListener("click", agregarTag));

    const radios = document.querySelectorAll('[name="categorias"]');
    radios.forEach( radio => radio.addEventListener("click", agregarCategoria));

    const nombreProducto = document.querySelector("#nombre");
    nombreProducto.addEventListener("input", agregarNombre);
    let busqueda = {
        nombre: "",
        categoria: "",
        tags: []
    }

    function agregarNombre(e){
        let input = e.target.value;
        console.log(input);

        if(length(input) > 4){
            //Función de búsqueda
        }
    }

    function agregarCategoria(e){
        busqueda.categoria = e.target.value;
    }

    function agregarTag(e){
        let valor = e.target.value;
        if(!busqueda.tags.includes(valor)){
            busqueda.tags.push(valor);
        } else {
            busqueda.tags = busqueda.tags.filter( elemento => elemento !== valor);
        }
    }
})()