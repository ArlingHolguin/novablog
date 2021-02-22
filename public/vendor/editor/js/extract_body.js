$(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });

    //richText
    $('#extract').richText({

        // text formatting
        bold: true,
        italic: true,
        underline: true,
      
        // text alignment
        leftAlign: true,
        centerAlign: true,
        rightAlign: true,
        justify: true,
      
        // lists
        ol: true,
        ul: true,
      
        // title
        heading: true,
      
        // fonts
        fonts: false,
        fontList: [
            "Arial", 
            "Arial Black", 
            "Comic Sans MS", 
            "Courier New", 
            "Geneva", 
            "Georgia", 
            "Helvetica", 
            "Impact", 
            "Lucida Console", 
            "Tahoma", 
            "Times New Roman",
            "Verdana"
        ],
        fontColor: true,
        fontSize: true,
      
        // uploads
        imageUpload: false,
        fileUpload: false,
      
        // media
        videoEmbed: false,
      
        // link
        urls: true,
      
        // tables
        table: false,
      
        // code
        removeStyles: true,
        code: true,
      
        // colors
        colors: [],
      
        // dropdowns
        fileHTML: '',
        imageHTML: '',
      
        // translations
        translations: {
            'title': 'Titulo',
            'white': 'Blanco',
            'black': 'Negro',
            'brown': 'Café',
            'beige': 'Beige',
            'darkBlue': 'Azul Oscuro',
            'blue': 'Azul',
            'lightBlue': 'Azul Claro',
            'darkRed': 'Rojo Oscuro',
            'red': 'Rojo',
            'darkGreen': 'Verde Oscuro',
            'green': 'Verde',
            'purple': 'Púrpura',
            'darkTurquois': 'Turqueza Oscuro',
            'turquois': 'Turqueza',
            'darkOrange': 'Naranja Oscuro',
            'orange': 'Naranja',
            'yellow': 'Amarillo',
            'imageURL': 'Imagen URL',
            'fileURL': 'Archivo URL',
            'linkText': 'Texto del Link',
            'url': 'URL',
            'size': 'Tamaño',
            'responsive': 'Responsive',
            'text': 'Texto',
            'openIn': 'Abrir en',
            'sameTab': 'Misma Pestaña',
            'newTab': 'Nueva pestaña',
            'align': 'Alinear',
            'left': 'Izquierda',
            'center': 'Centrar',
            'right': 'Derecha',
            'rows': 'Filas',
            'columns': 'Columnas',
            'add': 'Agregar',
            'pleaseEnterURL': 'Por favor ingrese una Url',
            'videoURLnotSupported': 'URL de video no compatible',
            'pleaseSelectImage': 'Por favor seleccione una imagen',
            'pleaseSelectFile': 'Por favor seleccione un archivo',
            'bold': 'Negrita',
            'italic': 'Itálica',
            'underline': 'Subrayar',
            'alignLeft': 'Alinear a la izquierda',
            'alignCenter': 'Alinear centrado',
            'alignRight': 'Alinear a la derecha',
            'addOrderedList': 'Agregar lista ordenada',
            'addUnorderedList': 'Agregar lista desordenada',
            'addHeading': 'Agregar encabezado / título',
            'addFont': 'Agregar fuente',
            'addFontColor': 'Agregar color de fuente',
            'addFontSize' : 'Agregar tamaño de fuente',
            'addImage': 'Añadir imagen',
            'addVideo': 'Añadir Video',
            'addFile': 'Añadir Archivo',
            'addURL': 'Añadir URL',
            'addTable': 'Añadir tabla',
            'removeStyles': 'Eliminar estilos',
            'code': 'Mostrar código HTML',
            'undo': 'Deshacer',
            'redo': 'Rehacer',
            'close': 'Cerrar'
        },
                  
        // privacy
        youtubeCookies: false,
        
        // developer settings
        useSingleQuotes: true,
        height: 300,
        heightPercentage: 0,
        id: "",
        class: "",
        useParagraph: false,
        maxlength: 200,
        callback: undefined
      
      });

      $('#body').richText({

        // text formatting
        bold: true,
        italic: true,
        underline: true,
      
        // text alignment
        leftAlign: true,
        centerAlign: true,
        rightAlign: true,
        justify: true,
      
        // lists
        ol: true,
        ul: true,
      
        // title
        heading: true,
      
        // fonts
        fonts: true,
        fontList: [
            "Arial", 
            "Arial Black", 
            "Comic Sans MS", 
            "Courier New", 
            "Geneva", 
            "Georgia", 
            "Helvetica", 
            "Impact", 
            "Lucida Console", 
            "Tahoma", 
            "Times New Roman",
            "Verdana"
        ],
        fontColor: true,
        fontSize: true,
      
        // uploads
        imageUpload: true,
        fileUpload: true,
      
        // media
        videoEmbed: true,
      
        // link
        urls: true,
      
        // tables
        table: true,
      
        // code
        removeStyles: true,
        code: true,
      
        // colors
        colors: [],
      
        // dropdowns
        fileHTML: '',
        imageHTML: '',
      
        // translations
        translations: {
            'title': 'Titulo',
            'white': 'Blanco',
            'black': 'Negro',
            'brown': 'Café',
            'beige': 'Beige',
            'darkBlue': 'Azul Oscuro',
            'blue': 'Azul',
            'lightBlue': 'Azul Claro',
            'darkRed': 'Rojo Oscuro',
            'red': 'Rojo',
            'darkGreen': 'Verde Oscuro',
            'green': 'Verde',
            'purple': 'Púrpura',
            'darkTurquois': 'Turqueza Oscuro',
            'turquois': 'Turqueza',
            'darkOrange': 'Naranja Oscuro',
            'orange': 'Naranja',
            'yellow': 'Amarillo',
            'imageURL': 'Imagen URL',
            'fileURL': 'Archivo URL',
            'linkText': 'Texto del Link',
            'url': 'URL',
            'size': 'Tamaño',
            'responsive': 'Responsive',
            'text': 'Texto',
            'openIn': 'Abrir en',
            'sameTab': 'Misma Pestaña',
            'newTab': 'Nueva pestaña',
            'align': 'Alinear',
            'left': 'Izquierda',
            'center': 'Centrar',
            'right': 'Derecha',
            'rows': 'Filas',
            'columns': 'Columnas',
            'add': 'Agregar',
            'pleaseEnterURL': 'Por favor ingrese una Url',
            'videoURLnotSupported': 'URL de video no compatible',
            'pleaseSelectImage': 'Por favor seleccione una imagen',
            'pleaseSelectFile': 'Por favor seleccione un archivo',
            'bold': 'Negrita',
            'italic': 'Itálica',
            'underline': 'Subrayar',
            'alignLeft': 'Alinear a la izquierda',
            'alignCenter': 'Alinear centrado',
            'alignRight': 'Alinear a la derecha',
            'addOrderedList': 'Agregar lista ordenada',
            'addUnorderedList': 'Agregar lista desordenada',
            'addHeading': 'Agregar encabezado / título',
            'addFont': 'Agregar fuente',
            'addFontColor': 'Agregar color de fuente',
            'addFontSize' : 'Agregar tamaño de fuente',
            'addImage': 'Añadir imagen',
            'addVideo': 'Añadir Video',
            'addFile': 'Añadir Archivo',
            'addURL': 'Añadir URL',
            'addTable': 'Añadir tabla',
            'removeStyles': 'Eliminar estilos',
            'code': 'Mostrar código HTML',
            'undo': 'Deshacer',
            'redo': 'Rehacer',
            'close': 'Cerrar'
        },
                  
        // privacy
        youtubeCookies: false,
        
        // developer settings
        useSingleQuotes: false,
        height: 0,
        heightPercentage: 0,
        id: "",
        class: "",
        useParagraph: false,
        maxlength: 0,
        callback: undefined
      
      });

     
});
