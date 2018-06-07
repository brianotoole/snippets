/**
 * Sample webpack config.js (for webpack >2.4.0)
 * Includes TweenMax alias setup (for some reason this is necessary)
 * Includes URL Loader
 */

const path = require('path');
const ExtractText = require('extract-text-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

var config = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'dist/js/[name].js'
  },
  module: {

    rules: [
      { // STYLE LOADERS
        test: /\.(css|sass|scss)$/,
        use: ExtractText.extract({
          use: ['css-loader', 'postcss-loader', 'sass-loader'],
        })
      },
      { // SCRIPT LOADERS
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      },
      { // URL LOADER, IMAGE FILES
        test: /\.(jpe?g|png|svg)/,
        loader: 'url-loader?limit=10000&name=dist/img/[name].[ext]', //if < 10 kb, base64 encode img to css
      },
      { // URL LOADER, FONT FILES
        test: /\.(woff|woff2|eot|ttf)/,
        loader: 'url-loader?limit=10000&name=dist/fonts/[name].[ext]', //font files to './dist/fonts/**.'
      },
    ]
  },
  plugins: [
    new ExtractText({
      filename: 'dist/css/[name].css',
      allChunks: true,
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      // @NOTE: make sure this proxy matches the folder name of your wordpress installation
      proxy: 'http://localhost/YOUR-THEME-NAME',
      files: ['**/*.php'],
      ghostMode: {
        clicks: false,
        forms: false
      }
    })
  ],
  resolve: {
    alias: {
        "TimelineMax": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
        "TweenMax": path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
        "ScrollMagic": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
        "animation.gsap": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
        "debug.addIndicators": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
    },
  },
};

module.exports = config;