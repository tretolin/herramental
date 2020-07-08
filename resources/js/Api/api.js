import Axios from "axios";
import { compileToFunctions } from "vue-template-compiler";


const applicationJSON = 'application/json; charset=utf8';
const applicationEncode = 'application/x-www-form-urlencoded';
const baseURL = 'https://widcqzoxhb.execute-api.us-east-2.amazonaws.com/Prod/api/';

const api = {
    // login  - - - - - - - - - - - - - - - - - - - - -
    login: function(data, callback) {
        $.ajax({
            method: 'POST',
            url: baseURL + 'user/authenticate',
            data: data,
            contentType: 'application/json',
            error: function(jqXHR) {
                callback([]);
                return [];
            }
        }).done(function(data) {
            callback(data);
            return data;
        });
    },
    // Recovery Password  - - - - - - - - - - - - - - - - - - - - -
    passwordRecovery: function(data, callback) {
        $.ajax({
            method: 'POST',
            url: baseURL + 'user/password-recovery',
            data: data,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Content-Type', applicationJSON);
            },
            headers: { },
            error: function(jqXHR) {
                callback([]);
                return [];
            }
        }).done(function(data) {
            callback(data);
            return data;
        });
    },
    // Signout - - - - - - - - - - - - - - - - - - - - -
    signOut: function(callback) {
    },
};

export default api;
