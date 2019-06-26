/*jscs:enable esnext */
/*jshint esversion: 6 */

var gulp = require('gulp');

// Deploy tools
var ftp = require('vinyl-ftp');
var fs = require('fs');
var vinylFilterSince = require('vinyl-filter-since');
var debug = require('gulp-debug');
var cachebust = require('gulp-cache-bust');
const logger = require('log-fancy')('ftpdeployer');
logger.enforceLogging();


// Variables
var deployConfigFile = './deploy.json';
var deployConfig = require(deployConfigFile);
var args = process.argv.slice(3);
var targetEnv = (args.length && args[0] == '--env') ? args[1] : 'staging';
var envOptions;
// Check that environment options exists
if (!deployConfig.env.hasOwnProperty(targetEnv)) {
    logger.error(
        'No config for "%s1" environment.\nAvailable environments are: %a1.'
            .replace('%s1', targetEnv)
            .replace('%a1', Object.keys(deployConfig.env))
    );

    return;
}

// envOptions = deployConfig.env[targetEnv];
envOptions = Object.assign({}, deployConfig.env[targetEnv], deployConfig.global);

// Configure logger
if (!envOptions.ftpConfig.hasOwnProperty('log')) {
    envOptions.ftpConfig.log = logger;
}

gulp.task('cachebust', function() {
        return gulp.src(envOptions.path.cachebust_file)
                .pipe(cachebust({
                        type: 'timestamp'
                }))
                .pipe(gulp.dest(envOptions.path.cachebust_path));
});

/**
 * Deploy
 *
 * usage: gulp deploy [--env production]
 * global variables: deployConfigFile, util, console, ftp
 */
gulp.task('deploy', ['cachebust'], (cb) => {

    var conn;
    var isSuccess = true;


    logger.info('Transferring files...\n');
    // logger.debug(envOptions);

    // Create new connection
    conn = ftp.create(envOptions.ftpConfig);

    gulp.src(envOptions.patterns, {base: envOptions.path.local, buffer: false})
        // .pipe(debug())
        .pipe(vinylFilterSince(new Date(envOptions.since || 0)))
        .pipe(conn.dest(envOptions.path.remote))
        .on('end', function() {
            if(isSuccess){
                logger.info('Transfer complete\n');

                // Store timestamp
                deployConfig.env[targetEnv].since = new Date();

                fs.writeFile(deployConfigFile, JSON.stringify(deployConfig, null, 4), cb);
            }else{
                logger.error('Transfer failed\n');
            }
        })
        .on('error', function(e){ isSuccess = false; logger.log('error!');logger.error(e)})
    ;
});