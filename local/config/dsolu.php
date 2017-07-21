<?php
/**
 * Created by Dsolu Viet Nam.
 * User: REVKent
 * Date: 02.06.2017
 * Time: 21.55
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Path configuration
    |--------------------------------------------------------------------------
    |
    | Change the paths, so they fit your needs
    |
    */
    'pathToEnv'         =>  root_path(). '/local/.env',
    'backupPath'        =>  root_path(). '/resources/backups/env/', // Make sure, you have a "/" at the end

    /*
    |--------------------------------------------------------------------------
    | GUI-Settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the different parameter for the view, where you can edit
    | .env via a graphical interface.
    |
    | Comma-separate your different middlewares.
    |
    */

    // Activate or deactivate the graphical interface
    'activated'         => true,

    // Set the base-route. All requests start here
    'route'             =>  '/enveditor',

    // middleware and middlewaregroups. Add your own middleware if you want.
    'middleware'        => ['web'],
    'middlewareGroups'  => []
];
