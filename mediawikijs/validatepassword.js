/*
    validatepassword.js

    MediaWiki Action API Code Samples
    Demo of `validate password` module: Validate a password against the wiki's password policies.
    MIT license
*/

# Validate a password for a current user.

    var params = {
        action: "validatepassword",
        password: "my_password",
        format: "json"
    },
	api = new mw.Api();

api.postWithToken( 'csrf', params ).done( function ( data ) {
	console.log( data );
} );

# Validate a password for creating a new user.

    var params = {
        action: "validatepassword",
        password: "my_password",
        user: "new_user",
        format: "json"
    },
	api = new mw.Api();

api.postWithToken( 'csrf', params ).done( function ( data ) {
	console.log( data );
} );
