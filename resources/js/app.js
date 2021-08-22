require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

require('./lib/makeRequest');
require('./lib/storeCredentials');
// imports end

$(function(){
    $('body').on('submit', '#form-login', function(e) {
        e.preventDefault();

        $('#error-message').html('');

        const email = $('#email').val();
        const password = $('#password').val();

        makeRequest({
            'url': '/api/login',
            'verb': 'POST',
            'data': {
                'email': email,
                'password': password,
            },
            'actions': {
                'success': function(response){
                    storeCredentials(response);
                    window.location.href = '/dash';
                },
                'fail': function(response){
                    $('#error-message').html('Invalid credentials, please try again');
                }
            }
        });
    });

    $('body').on('click', '.dash-logo', function() {
        window.location.href = '/dash';
    });
});