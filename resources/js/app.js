require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

require('./lib/makeRequest');
require('./lib/storeCredentials');
// imports end

$(function(){
    // $('body').on('click', '.page-home .btn-primary', function() {

    // });

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
                    window.location.href = '/dashboard';
                },
                'fail': function(response){
                    $('#error-message').html('Invalid credentials, please try again');
                }
            }
        });
    });


});