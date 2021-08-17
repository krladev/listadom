window.makeRequest = (data) => {
    const authToken = () => {
        return localStorage.getItem('user-token');
    }

    const request = $.extend({}, {
        method: data.verb,
        url: data.url,
        data: data.data ? JSON.stringify(data.data):undefined,
        dataType: data.dataType ? data.dataType:'json',
        contentType: 'application/json; charset=utf-8',
        headers: data.headers ? data.headers:undefined,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
        },
        // beforeSend: authToken() !== null ? (function (xhr) {
        //     xhr.setRequestHeader('Authorization', 'Bearer ' + authToken());
        // }):undefined,
    });



    $.ajax(request)
        .done(
            function(){
                if(data.actions && data.actions.success){
                    data.actions.success();
                }
            }
        )
        .fail(
            function(){
                if(data.actions && data.actions.fail){
                    data.actions.fail();
                }
            }
        )
        .always(
            function(){
                if(data.actions && data.actions.always){
                    data.actions.always();
                }
            }
        );
}