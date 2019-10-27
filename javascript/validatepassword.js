/*
    validatepassword.js

    MediaWiki Action API Code Samples
    Demo of `validate password` module: Validate a password against the wiki's password policies.
    MIT license
*/

# Validate a password for a current user.

var request = require("request").defaults({jar: true}),
url = 'https://en.wikipedia.org/w/api.php';

function validatePassword() {
    var params = {
        action: "validatepassword",
        password: "your_password",
        format: "json"
    };
    
    request.post({ url: url, form: params }, function (error, res, body) {
        if (error) {
            return;
        }
        console.log(body);
    });
}

# Validate a password for creating a new user.

var request = require("request").defaults({jar: true}),
url = 'https://en.wikipedia.org/w/api.php';

function validatePassword() {
    var params_1 = {
        action: "validatepassword",
        password: "your_password",
        user: "new_user",
        format: "json"
    };
    
    request.post({ url: url, form: params_1 }, function (error, res, body) {
        if (error) {
            return;
        }
        console.log(body);
    });
}
