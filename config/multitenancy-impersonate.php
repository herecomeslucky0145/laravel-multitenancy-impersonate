<?php

/*
* Here,
* I hand you the power of impersonation, Don't be an impostor !
* This is where you can change the application's behavior
* The config values defined here will be used by the package to alter the behavior
*/

return [
    /*
    * redirect_path defines the impersonation route path
    * which is probably defined in your web.php route file
    * This is where you are redirected after successfull impersonation attempt
    * which is probably your tenant's dashboard route path
    */
    'redirect_path' => '/home',

    /*
    * auth_guard defines the authentication guard of the tenant,
    * this guard will be used as default guard to sign in as the tenant
    * if you want to override the guard defined here or if you have multiple tenant guards,
    * pass that auth guard as an argument in the impersonate method
    */
    'auth_guard' => 'web',

    /*
    * tenancy_type defines and configures the package to work accordingly to your multitenancy setup
    * supported values are `multi-db` and `single-db`
    */
    'tenancy_type' => 'multi-db',

    /*
    * This session is going to be set which will help you to do many things
    * like displaying a sticky bar
    * this may help remind the impersonator not do anything stupid cause he's not the real user
    * Just a simple example, you go get creative now
    */
    'session_name' => 'pretending_to_be_you'
];
