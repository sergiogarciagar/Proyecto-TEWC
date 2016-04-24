/**
 * Created by sergiogarcia on 19/3/16.
 */


$(function() {
    $('#guardar').click( function (){
        document.getElementById("includenew").innerHTML = '<div class="item">'+
            '<div class="col-md-3 col-xs-6">' +
            '<div class="novedad-item">' +
            '<div class="novedad-image">' +
            '<img src="img/noticia8.jpg" class="img-responsive" alt="author">' +
            '</div>' +
            '<div class="novedad-text">' +
            '<h3>Sandra García</h3>' +
            '<div class="novedad-location">Avila,Castilla y León</div>' +
            '<div class="novedad-position">– Recuerdos–</div>' +
            '<p>Recogiendo uno de mis premios.</p>' +
            '<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">' +
            'Mas info</button>' +
            '</div>' +
            '</div>' +
            '</div>'});
});