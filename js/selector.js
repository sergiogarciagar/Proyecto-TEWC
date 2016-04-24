/**
 * Created by sergiogarcia on 20/4/16.
 */

$(document).ready(function() {
    document.getElementById("inicio").onclick = function () {
        document.getElementById("inicio").classList.add('active');
    };
    document.getElementById("galeria").onclick = function () {
        document.getElementById("galeria").classList.add('active');
    };
    document.getElementById("sube").onclick = function () {
        document.getElementById("sube").classList.add('active');
    };
    document.getElementById("enlaces").onclick = function () {
        document.getElementById("enlaces").classList.add('active');
    };
    document.getElementById("contacta").onclick = function () {
        document.getElementById("contacta").classList.add('active');
    };
});