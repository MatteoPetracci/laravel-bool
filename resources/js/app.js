require('./bootstrap');

const $ = require('jquery');

$(document).ready(function() {
    // Al click sulla select stampo in console il valore della select cliccata
    $('#filter_age').change(function(){
        console.log($(this).val());
    })
})