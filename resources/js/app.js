require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

require('./makeRequest');
// imports end

$(function(){
    // $('body').on('click', '.page-home .btn-primary', function() {

    // });

    $('body').on('submit', '#form-login', function(e) {
        e.preventDefault();

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
                    console.log(response);
                    alert('success');
                },
                'fail': function(response){
                    console.log(response);
                    alert('failed');
                }
            }
        })
    });


});