import Cookies from 'js-cookie';

window.storeCredentials = (credentials) => {
    localStorage.setItem('user-token', credentials.token);
    Cookies.set('user-token', credentials.token);
}