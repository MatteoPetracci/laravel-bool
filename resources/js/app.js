require('./bootstrap');

const $ = require('jquery');

$(document).ready(function() {
    // Al click sulla select stampo in console il valore della select cliccata
    $('#filter_age').change(function(){

        $.ajax({
            'url': window.location.protocol + '//' + window.location.host + '/api/student/age',
            'method':'POST',
            'data': {
                'ages': $(this).val()
            },
            'success': function (data) {
                console.log(data);
            },
            'error': function() {
                console.log('error');
            }
        });
    })
})


