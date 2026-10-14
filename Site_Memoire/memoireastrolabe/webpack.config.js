const Encore = require('@symfony/webpack-encore');
const dotenv = require('dotenv');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .configureDefinePlugin(options => {
        const env = dotenv.config();

        if (env.error) {
            throw env.error;
        }

        options['process.env'].API_HEEDS_CID = JSON.stringify(env.parsed.API_HEEDS_CID);
        options['process.env'].API_HEEDS_CSE = JSON.stringify(env.parsed.API_HEEDS_CSE);
        options['process.env'].API_HEEDS_USER = JSON.stringify(env.parsed.API_HEEDS_USER);
        options['process.env'].API_HEEDS_PWD = JSON.stringify(env.parsed.API_HEEDS_PWD);
    })
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')
    .addEntry('dropify', './assets/scripts/custom_dropify.js')
    .addEntry('adminjs', './assets/scripts/admin/admin.js')
    .addEntry('admin-groupe', './assets/scripts/admin/groupe.js')
    .addEntry('admin-ressource', './assets/scripts/admin/ressource.js')
    .addEntry('admin-evenement', './assets/scripts/admin/evenement.js')
    .addEntry('admin-label', './assets/scripts/admin/label.js')
    .addEntry('admin-indexcss', './assets/styles/admin/index.scss')
    .addEntry('admin-apiHeeds', './assets/scripts/admin/apiHeeds.js')
    .addEntry('admin-musicien', './assets/scripts/admin/musicien.js')
    .addEntry('admin-userjs', './assets/scripts/admin/user.js')
    .addEntry('admin-lieujs','./assets/scripts/admin/lieu.js')
    .addEntry('admin-instrumentjs', './assets/scripts/admin/instrument.js')
    .addEntry('admin-nationalitejs', './assets/scripts/admin/nationalite.js')
    .addEntry('admin-genreMusicaljs', './assets/scripts/admin/genreMusical.js')
    .addEntry('admin-categorieMusicaljs','./assets/scripts/admin/categorieMusical.js')
    .addEntry('admin-typeEvenementjs', './assets/scripts/admin/typeEvenement.js')
    .addEntry('admin-etiquettejs','./assets/scripts/admin/etiquette.js')
    .addEntry('select2css', './node_modules/select2/dist/css/select2.min.css')
    .addEntry('admincss', './assets/styles/admin.scss')
    .addEntry('cardscss', './assets/styles/cards.scss')
    .addEntry('logincss', './assets/styles/login.scss')
    .addEntry('resetcss', './assets/styles/reset-password.scss')
    .addEntry('evenementscss', './assets/styles/evenements.scss')
    .addEntry('filtersjs', './assets/scripts/filters.js')
    .addEntry('workflowjs', './assets/scripts/admin/workflow.js')
    .addEntry('workflowcss','./assets/styles/workflow.scss')
    .addEntry('progressBarjs', './assets/scripts/component/progressbar.js')
    .addEntry('progressBarcss','./assets/styles/component/progressBar.scss')
    .addEntry('detailevenementjs','./assets/scripts/detailEvenement.js')
    .addEntry('detailevementcss','./assets/styles/detail-evenement.scss')
    .addEntry('jquery','./node_modules/jquery/dist/jquery.min.js')
    .addEntry('apiHeedscss', './assets/styles/admin/apiHeeds.scss')
    .addEntry('dropifycss','./node_modules/dropify/dist/css/dropify.min.css')
    .addEntry('formRequired','./assets/styles/admin/required.scss')


    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    //.cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    // enables Sass/SCSS support
    .enableSassLoader()

    // copy images
     .copyFiles({
         from: './assets/images',
         to: 'images/[path][name].[ext]'
     })

    // copy ckeditor
    .copyFiles([
        {from: './node_modules/ckeditor4/', to: 'ckeditor/[path][name].[ext]', pattern: /\.(js|css)$/, includeSubdirectories: false},
        {from: './node_modules/ckeditor4/adapters', to: 'ckeditor/adapters/[path][name].[ext]'},
        {from: './node_modules/ckeditor4/lang', to: 'ckeditor/lang/[path][name].[ext]'},
        {from: './node_modules/ckeditor4/plugins', to: 'ckeditor/plugins/[path][name].[ext]'},
        {from: './node_modules/ckeditor4/skins', to: 'ckeditor/skins/[path][name].[ext]'},
        {from: './node_modules/ckeditor4/vendor', to: 'ckeditor/vendor/[path][name].[ext]'}
    ])

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
